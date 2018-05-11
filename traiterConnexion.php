<?php

session_start();

function connect() {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=sitegpd;charset=utf8', 'root', '');
        $query = 'SELECT * FROM users WHERE username=\'' . $_POST["username"] . '\' AND password=\'' . $_POST["password"] . '\'';
        $donnees = $bdd->query($query);
        echo $query;
        while ($reponse = $donnees->fetch()) {
            $_SESSION['USER_ID'] = $reponse['id'];
        }
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

connect();

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

header("Location: " . "index.php");
