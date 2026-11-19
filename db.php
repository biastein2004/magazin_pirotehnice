<?php
$conn = new mysqli("localhost", "root", "", "magazin2");
if ($conn->connect_error) { die("Eroare conexiune: " . $conn->connect_error); }
$conn->set_charset("utf8mb4");