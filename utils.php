<?php

declare(strict_types=1);

function get_data(string $uri): ?array
{
    $payload = file_get_contents($uri);
    $data = json_decode($payload, true);
    return $data;
}


function render_template(string $template, array $props = [])
{
    extract($props);
    require "./layout/$template.php";
}
