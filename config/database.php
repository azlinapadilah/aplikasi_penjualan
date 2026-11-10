<?php
// config/database.php

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'penjualan';

// Instalisasi koneksi dengan MySQLi secara Object Oriented
$koneksi = new mysqli($host, $user, $pass, $db);