<?php

const API_URL = "https://whenisthenextmcufilm.com/api";

$ch = curl_init(API_URL);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_OPTIONS, CURLSSLOPT_NATIVE_CA);

$result = curl_exec($ch);
$data = json_decode($result, true);

curl_close($ch);
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Next Marvel Film</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
    <style>
        :root {
            color-scheme: light dark;
        }

        body {
            padding: 1rem;
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        img {
            margin: 0 auto;
            height: 500px;
        }

        .content {
            margin-top: 2rem;
        }
    </style>
</head>

<body>
    <img src="<?= $data["poster_url"] ?>" alt="poster image">
    <div class="content">
        <h2><?= $data["title"] ?></h2>
        <p><?= $data["overview"] ?></p>
        <p>Release date: <?= $data["release_date"] ?></p>
    </div>
</body>

</html>