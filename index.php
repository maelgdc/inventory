<?php
session_start();
require './info_bdd.php';
require_once './gestion_secrets.php';

$page = verifConnexion();

include './header.php';
include './' . $page . '.php';
include './footer.php';


function verifConnexion()
{
    $login = isset($_POST["login"]) ? htmlspecialchars($_POST["login"]) : "";
    $password = isset($_POST["password"]) ? htmlspecialchars($_POST["password"]) : "";

    if (isset($_POST["password"])) {
    }
    $user = getUserByLogin($login);

    global $erreur;

    if ($user == null) {
        $erreur = isset($_POST["login"]) ? 'Mauvais login ou mdp' : null;
        return 'connexion';
    }

    if ($user['hash_mdp'] != $password) {
        $erreur = 'Mauvais login ou mdp';
        return 'connexion';
    } else {
        $_SESSION['user'] = $user["prenom"] . " " . $user["nom"];
        $_SESSION['idUser'] = $user["idUser"];
        return $_GET['page'];
    }
}

function getUserByLogin(string $login)
{
    global $mon_pdo;
    $request = $mon_pdo->prepare(
        "SELECT * FROM users where login = :login"
    );
    $request->execute([
        'login' => $login
    ]);
    $user = $request->fetch(PDO::FETCH_ASSOC);
    return $user;
}

function saveUser(string $login, string $mdp, string $nom, string $prenom)
{
    global $mon_pdo;
    $request = $mon_pdo->prepare(
        "INSERT INTO users (login, password, nom, prenom) VALUES (:login, :password, :nom, :prenom)"
    );
    $resultat = $request->execute([
        'login' => $login,
        'password' => $mdp,
        'nom' => $nom,
        'prenom' => $prenom
    ]);
    return $resultat;
}
function inscription() {}

function getData()
{
    global $mon_pdo;

    $request = $mon_pdo->prepare(
        "SELECT nom, os, cpu, max(date) FROM machine GROUP BY nom"
    );
    $request->execute([]);
    $machines = $request->fetchall(PDO::FETCH_ASSOC);
    return $machines;
}
