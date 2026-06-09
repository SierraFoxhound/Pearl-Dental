<?php
/*
Template Name: Display Code Page
*/

$url = 'https://jsonplaceholder.typicode.com/users';

$arguments = array(
    'method' => 'GET'
);

$response = wp_remote_get($url, $arguments);

if (is_wp_error($response)) {
    $error_message = $response->get_error_message();
    echo "something went wrong: $error_message";
}

$results = json_decode(wp_remote_retrieve_body($response));

echo '<pre>';
var_dump($results);
echo '</pre>';

return $results;
