<?php

    // Kullanıcı adı ve şifre
    $username = '365';
    $password = '1';

    // Access token almak için giriş isteği gönderiyoruz
    $login_url = 'https://api.baubuddy.de/index.php/login';
    $login_data = array('username' => $username, 'password' => $password);
    $login_headers = array(
        'Authorization: Basic QVBJX0V4cGxvcmVyOjEyMzQ1NmlzQUxhbWVQYXNz',
        'Content-Type: application/json'
    );
    $login_options = array(
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode($login_data),
        CURLOPT_HTTPHEADER => $login_headers,
    );
    $login_curl = curl_init($login_url);
    curl_setopt_array($login_curl, $login_options);
    $login_response = curl_exec($login_curl);
    curl_close($login_curl);

    // Gelen yanıttan access token'ı alıyoruz
    $json = json_decode($login_response, true);
    $access_token = $json['oauth']['access_token'];

    // Verileri almak için GET isteği gönderiyoruz
    $data_url = 'https://api.baubuddy.de/dev/index.php/v1/tasks/select';
    $data_headers = array(
        'Authorization: Bearer ' . $access_token,
        'Content-Type: application/json'
    );
    $data_options = array(
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => $data_headers,
    );
    $data_curl = curl_init($data_url);
    curl_setopt_array($data_curl, $data_options);
    $data_response = curl_exec($data_curl);
    curl_close($data_curl);

    // Gelen verileri işleyerek tabloyu oluşturuyoruz
    $data = json_decode($data_response, true);
?>