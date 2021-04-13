<?php
$fields = [
    "appReference": "loki",
    "secret": "password",
    "requestId": "7b26282f-06c6-456e-aa5c-4c21e9089ba7",
    "invoiceNum": "7868d43d-0c91-4701-a0ff-ff1b7e5e37e5",
    "transactionId": "",
    'customerName' => $_POST['customerName'],
    'walletRef' => $_POST['walletRef'],
    'provider' => $_POST['provider'],
    'customerMobile' => $_POST['customerMobile']
];

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => '/webpos/processPayment',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode($fields), 1,
    CURLOPT_HTTPHEADER => array(
    'appId: 1@Je[kR%9v7iROO'
    ),
));
$response = curl_exec($curl);
curl_close($curl);
echo $response;