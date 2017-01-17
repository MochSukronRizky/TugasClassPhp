<?php
require 'user.php';
require 'RicceCoocer.php';
require 'Wifi.php';
require 'botol.php';
require 'Aktivitas.php';

$bejo = new user();
$bejo->nama = "bejo";
$bejo->sandi = "abcd";
$bejo = new RicceCoocer();
$bejo->nasi = "kuning";
$bejo = new Wifi();
$bejo->connections = "Wifi IPv4";
$bejo = new Botol();
$bejo->Air = "Cola";

$untung = new user();
$untung->nama = "untung";
$untung->sandi = "1234";
$untung = new RicceCoocer();
$untung->nasi = "merah";
$untung = new Wifi();
$untung->connections = "Wifi IPv4";
$untung = new BotolAirMinum();
$untung->Air = "Air Putih";
?>
