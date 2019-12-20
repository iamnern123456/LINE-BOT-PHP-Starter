<?php
echo "bot page";

$access_token = '5S9dpG+aKWbMwHFN+eEy/W6HCGtWgg3iGudC7WYIEOPKdBkmz3nT3QWWVPrrDFkBgl5dzXEGYtt+91KBN4nBthZWkNk9ju7oPJidZuz5972wGZ2u3Ie4gjU/Yb5/U8fPQf3RFWDXecI3qf+5NBxELAdB04t89/1O/w1cDnyilFU=';
  $url = 'https://api.line.me/v1/oauth/verify';
  $headers = array('Authorization: Bearer ' . $access_token);
  $ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  $result = curl_exec($ch);curl_close($ch);
  echo $result;


?>
