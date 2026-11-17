<?php

$hash_key = "hash";

$crypt_key = "crypt";

function hasher_mdp(string $mdp): string
{
    $hashed_mdp = hash_hmac(
        'sha256',
        $mdp,
        $_ENV['hash']
    );
    return $hashed_mdp;
}

function verifier_mdp(string $mdp, string $hash): bool
{
    return hasher_mdp($mdp) == $hash;
}

function chiffrer_donnee(string $donnee, string $cle_chiffrement): string
{
    $iv = '1234567890123456';
    $donnee_chiffre = openssl_encrypt($donnee, 'aes-256-cbc', $cle_chiffrement, OPENSSL_RAW_DATA, $iv);
    return base64_encode($donnee_chiffre);
}

function dechiffrer_donnee(string $donnee_chiffree, string $cle_dechiffrement): string
{
    $iv = '1234567890123456';
    $donnee_claire = openssl_decrypt(base64_decode($donnee_chiffree), 'aes-256-cbc', $cle_dechiffrement, OPENSSL_RAW_DATA, $iv);
    return $donnee_claire;
}
