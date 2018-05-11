<?php
session_start();
$_POST["username"];
$_POST["password"];

function checkUsernameExists() {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=sitegpd;charset=utf8', 'root', '');
        $query = 'SELECT * FROM users WHERE username=\'' . $_POST["username"] . '\'';
        $donnees = $bdd->query($query);
        echo $query;
        while ($reponse = $donnees->fetch()) {
            return TRUE;
        }
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

function insertUser() {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=sitegpd;charset=utf8', 'root', '');
        $query2 = 'INSERT INTO users(username, password) VALUES(\'' . $_POST["username"] . '\',\'' . $_POST["password"] . '\')';
        echo $query2;
        $bdd->exec($query2);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

function connectUser() {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=sitegpd;charset=utf8', 'root', '');
        $query = 'SELECT * FROM users WHERE username=\'' . $_POST["username"] . '\'';
        $donnees = $bdd->query($query);
        echo $query;
        while ($reponse = $donnees->fetch()) {
            $_SESSION['USER_ID'] = $reponse['id'];
        }
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

if (!checkUsernameExists()) {
    insertUser();
    connectUser();
}

header("Location: " . "index.php");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

