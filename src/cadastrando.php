<?php
use Classificados\B7web\Model\Usuarios;
require '../vendor/autoload.php';

$mensagem = '';

if(isset($_POST['nome']) && !empty($_POST['nome'])){
    $nome = filter_input(INPUT_POST, 'nome', FILTER_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha');
    $telefone = filter_input(INPUT_POST, 'telefone');

    if(!empty($nome) && !empty($email) && !empty($telefone) && !empty($senha)){
        $usuario = new Usuarios();
        $cadastrado = $usuario->cadastrar($nome,$telefone,$email,$senha);
        if($cadastrado){
            $mensagem = "sucesso";
        }else{
            $mensagem = "aviso";
        }
    }else{
        $mensagem = "aviso";
    }
}else{
    $mensagem = "aviso";
}

// Redirecionar para a página anterior com a mensagem como parâmetro na URL
header("Location: cadastre-se.php?mensagem=" . $mensagem);
exit();
?>
