<?php

// class Conection {
//     private $db = "teste_devsite";
//     private $host = "127.0.0.1";
//     private $pass = "facebook";
//     private $user = "root";
//     private $conexao;

//     public function conex() {
//         try {
//             $dsn = "mysql:host={$this->host};dbname={$this->db}";
//             $pdo = new PDO($dsn, $this->user, $this->pass);

//             // Configurar o PDO para lançar exceções em caso de erro
//             //$this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//             return $pdo;
//             // return "Conectado com sucesso";
//         } catch (PDOException $e) {
//             die("Erro de Conexão: " . $e->getMessage());
//         }
//     }

// } 
$db = "teste_devsite";
$host = "127.0.0.1";
$pass = "facebook";
$user = "root";

try {
    // $dsn = "mysql:host={$host};dbname={$db}";
    $pdo = new PDO("mysql:host={$host};dbname={$db}", $user, $pass);
    // Configurar o PDO para lançar exceções em caso de erro
    //$this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
    // return "Conectado com sucesso";
} catch (PDOException $e) {
    die("Erro de Conexão: " . $e->getMessage());
}