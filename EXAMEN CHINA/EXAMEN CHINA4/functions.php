<?php
  $host = 'localhost';
    $db = 'papeleria';
    $user = 'root';
    $password = '';
    try{
        $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Error de conexion: " . $e->getMessage());
    }
    $clientExist = function($id){
        return $id;
    }
?>