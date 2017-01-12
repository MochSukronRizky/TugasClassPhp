<?php
require 'user.php';
require 'RicceCoocer.php';
require 'Wifi.php';
require 'botol.php';
require 'aktivitas.php';

$bejo = new user();
$bejo->nama = "bejo";
$bejo->sandi = "abcd";
$bejo = new RicceCoocer();
$bejo->nasi = "kuning";
$bejo = new Wifi();
$bejo->Connection = "Wifi IPv4";
$bejo = new BotolAirMinum();
$bejo->Air = "Cola";

$untung = new user();
$untung->nama = "untung";
$untung->sandi = "1234";
$untung = new RicceCoocer();
$untung->nasi = "merah";
$untung = new Wifi();
$untung->Connection = "Wifi IPv4";
$untung = new BotolAirMinum();
$untung->Air = "Air Putih";
?>