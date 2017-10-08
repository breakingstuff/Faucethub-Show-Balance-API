<?php
// edit [INSERT API KEY] and insert your own API key to show current balance on bitcoin.
$url = 'https://faucethub.io/api/v1/balance?api_key=[INSERT API KEY]&balance_bitcoin';
$ch = curl_init($url);
 
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
$response = curl_exec($ch);
curl_close($ch);
//process $response
$resp = substr($response, -11, 10);
echo "<font face='Verdana'><b>Bitcoin Balance:</b> ";
echo $resp;
?>
