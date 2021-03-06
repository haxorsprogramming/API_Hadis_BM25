<?php
session_start();
header("Access-Control-Allow-Origin: *");
include("connect_db.php");

require 'vendor/autoload.php';

$client = new \GuzzleHttp\Client();

$response = $client->request('GET', 'http://api.carihadis.com/?kitab=Shahih_Bukhari&id=1');
$isi = $response -> getBody();

echo $isi;

?>
