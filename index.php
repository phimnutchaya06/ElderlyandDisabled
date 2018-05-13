<?php 
$access_token = 'Kzlcf/j+ttHwRYZmYufOeojXDC1KUgPTMOznmN27PGHbPzlIjoV0DXubU1gL2XjlzAfMXJb2Tsd8LSH+te7E+D68lzZBHRK1dFif/FvOIPU+liLSrYmoVyKZZKY//cxXpRZc3r4DX/boQ700lN+x5QdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v2/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result;