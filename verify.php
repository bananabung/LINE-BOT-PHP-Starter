<?php
$access_token = 'wDtxvaOeyyRnNkixWCNu3zXtGF542aKnV74xC2N5Ebkeql4M4caDC19q+l7rx9Olu+eIGCDvPBaknB7g1AhM46XmzUuA25uOyd6NjrBMbiFoonjIiHmwu51l+pk6p7C3kaSqcg0VkZzPYeW3SC2i3AdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
