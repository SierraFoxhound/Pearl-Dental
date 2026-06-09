/**
 * Pearl Dental - Main Child Theme Script Layout
 */

// Global tracking variable for the currently active timezone, los angeles is the default
let activeClinicTimezone = "America/Los_Angeles";

document.addEventListener("DOMContentLoaded", function () {

    // --- 1. Appointment Form Validation Mockup ---
    const appointmentForm = document.getElementById("appointmentForm");
    if (appointmentForm) {
        appointmentForm.addEventListener("submit", function (e) {
            e.preventDefault();
            alert("Thank you! Your appointment request has been submitted. Our clinic team will reach out via email shortly.");
            appointmentForm.reset();
        });
    }

    // --- 2. Dynamic Navbar Highlighting on Scroll ---
    const sections = document.querySelectorAll("section, header");
    const navLinks = document.querySelectorAll(".navbar-nav .nav-link");

    window.addEventListener("scroll", () => {
        let current = "";
        sections.forEach((section) => {
            const sectionTop = section.offsetTop;
            if (window.scrollY >= sectionTop - 100) {
                current = section.getAttribute("id");
            }
        });

        navLinks.forEach((link) => {
            link.classList.remove("active");
            if (link.getAttribute("href") && link.getAttribute("href").includes(current)) {
                link.classList.add("active");
            }
        });
    });

    // --- 3. Initialize & Loop Status Badge ---
    // Runs right away on page paint using the default timezone
    updateClinicStatus(activeClinicTimezone);

    // Automatically recalculates every 60 seconds using the currently active timezone variable
    setInterval(() => {
        updateClinicStatus(activeClinicTimezone);
    }, 60000);

    // --- 4. Attach ZIP Routing Forms ---
    const heroForm = document.getElementById('heroZipRouterForm');
    const footerForm = document.getElementById('footerZipRouterForm');
    const globalForm = document.getElementById('globalZipRouterForm');

    if (heroForm) heroForm.addEventListener('submit', handleZipSubmission);
    if (footerForm) footerForm.addEventListener('submit', handleZipSubmission);
    if (globalForm) globalForm.addEventListener('submit', handleZipSubmission);
});

/**
 * Timezone-Aware Green Dot Status Badge Logic (Strict Spec Compliant)
 */
function updateClinicStatus(targetTimezone = "America/New_York") {
    const badge = document.getElementById("clinic-status-badge");
    if (!badge) return;

    const now = new Date();

    // 1. Safely extract numeric parameters using the h23 true 24-hour standard cycle
    const weekdayStr = new Intl.DateTimeFormat('en-US', { timeZone: targetTimezone, weekday: 'long' }).format(now);
    const hourStr = new Intl.DateTimeFormat('en-US', { timeZone: targetTimezone, hour: 'numeric', hourCycle: 'h23' }).format(now);
    const minuteStr = new Intl.DateTimeFormat('en-US', { timeZone: targetTimezone, minute: 'numeric' }).format(now);

    // 2. Map the text string weekday back to array index structure
    const daysMap = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    const day = daysMap.indexOf(weekdayStr);

    // Parse values cleanly as base-10 integers
    const hour = parseInt(hourStr, 10);
    const minute = parseInt(minuteStr, 10);
    const currentTime = hour + (minute / 60);

    // --- ADD THESE TEMP LOGS HERE --- REMOVE THIS LATER, FOR TESTING :L
    console.log("--- CLINIC STATUS DEBUGGER ---");
    console.log("Extracted Day Index:", day, "(Should be 3 for Wednesday)");
    console.log("Calculated Time Decimal:", currentTime, "(At 4:25pm, this should be 16.41)");

    let isOpen = false;

    // 3. Schedule Rules Checking (Mon-Thu: 8am-5pm, Fri: 8am-2pm)
    if (day >= 1 && day <= 4) {
        if (currentTime >= 8 && currentTime < 17) {
            isOpen = true;
        }
    } else if (day === 5) {
        if (currentTime >= 8 && currentTime < 14) {
            isOpen = true;
        }
    }

    // 4. Render Badge UI Elements
    if (isOpen) {
        badge.innerHTML = `<span class="status-dot-pulse me-2"></span> Open`;
        badge.style.backgroundColor = "rgba(34, 197, 94, 0.15)";
        badge.style.color = "#4ade80";
        badge.style.borderColor = "rgba(34, 197, 94, 0.3)";
    } else {
        badge.innerHTML = `<span class="status-dot-closed me-2"></span> Closed`;
        badge.style.backgroundColor = "rgba(239, 68, 68, 0.15)";
        badge.style.color = "#f87171";
        badge.style.borderColor = "rgba(239, 68, 68, 0.3)";
    }
}

/**
 * Google Business Profile ZIP Code Router Handler
 */
function handleZipSubmission(e) {
    e.preventDefault();

    const currentForm = e.target;
    const zipInput = currentForm.querySelector('input[type="text"]');
    const submitBtn = currentForm.querySelector('button[type="submit"]');

    if (!zipInput || !submitBtn) return;

    const zipValue = zipInput.value.trim();

    if (!/^[0-9]{5}$/.test(zipValue)) {
        alert("Please enter a valid 5-digit ZIP code.");
        return;
    }

    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Checking...';
    submitBtn.disabled = true;

    fetch(wp_ajax_objects.ajax_url, {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: new URLSearchParams({
            action: 'route_closest_clinic_by_zip',
            zip: zipValue
        })
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Update class fields globally across sections and components
                document.querySelectorAll('.clinic-display-name').forEach(node => node.innerText = data.data.name);
                document.querySelectorAll('.clinic-display-address').forEach(node => node.innerText = data.data.address);
                document.querySelectorAll('.clinic-display-phone').forEach(node => node.innerText = data.data.phone);
                document.querySelectorAll('.clinic-display-email').forEach(node => {
                    if (data.data.email) node.innerText = data.data.email;
                });

                if (data.data.map_iframe_url) {
                    const iframe = document.querySelector('.map-container iframe');
                    if (iframe) iframe.src = data.data.map_iframe_url;
                }

                // --- THE STEP 3 REPLACEMENT & UPDATE BLOCK ---
                // 1. Capture the new clinic timezone string returned by PHP
                if (data.data.timezone) {
                    activeClinicTimezone = data.data.timezone;
                }

                // 2. Force an immediate badge status recalculation using the fresh timezone
                try {
                    if (typeof updateClinicStatus === "function") {
                        updateClinicStatus(activeClinicTimezone);
                    }
                } catch (err) {
                    console.log("Status badge skipped or not present on this page template.");
                }

            } else {
                alert(data.data || "No localized clinic matching that area code was located.");
            }
        })
        .catch(error => {
            console.error("Routing Sync Failure:", error);
        })
        .finally(() => {
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
        });
}