<?php
$conn = new mysqli("localhost", "root", "", "calculadora");

if ($conn->connect_error) {
  die("ERROR: No se puede conectar al servidor: " . $conn->connect_error);
}