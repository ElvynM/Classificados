<?php

namespace Classificados\B7web\Model;

use Classificados\B7web\infra\Database;

class Usuarios
{   
    public $pdo;

    public function __construct()
    {
        $db = new Database();
        $this->pdo =$db->getConnection();
    }
    
    public function cadastrar($nome,$email,$senha, $telefone)
    {
        $sql = $this->pdo->prepare("SELECT id FROM where email = :email");
        $sql->bindValue(":email",$email);
        $sql->execute();

        if($sql->rowCount() == 0){
            $sql = $this->pdo->prepare("INSERT INTO usuarios set nome = :nome, email = :email, senha = :senha, telefone = :telefone");
            $sql->bindValue(":nome",$nome);
            $sql->bindValue(":email",$email);
            $sql->bindValue(":senha",md5($senha));
            $sql->bindValue(":telefone",$telefone);
            $sql->execute();

            return true;
            
        }else{
            return false;
        }

    }

    public function getFindAll(){
        $sql = "SELECT * FROM usuarios";
        $query = $this->pdo->query($sql);
        $query->execute();

        $data = $query->fetchAll();
        
        return $data;
    }
}
