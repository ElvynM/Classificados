<?php
use Classificados\B7web\infra\Database;
use Classificados\B7web\Model\Usuarios;

require '../vendor/autoload.php';
require_once './template/header.php';

$mensagem = '';

// Verificar se há uma mensagem na URL
if(isset($_GET['mensagem'])){
    $mensagem = $_GET['mensagem'];
}

?>

<div class="container-fluid">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Olá seja Bem Vindo!</h1>
        </div>
    </div>

    <div class="container">
        <h1>Cadastre-se</h1>

        <?php if (!empty($mensagem)) : ?>
            <div class="alert <?php echo ($mensagem === 'sucesso') ? 'alert-success' : 'alert-warning'; ?>">
                <?php echo ($mensagem === 'sucesso') ? 'Cadastro realizado com sucesso!' : 'Preencha todos os campos!'; ?>
            </div>
            <?php if ($mensagem === 'sucesso' || $mensagem === 'aviso') : ?>
                <script>
                    setTimeout(function() {
                        var alertElement = document.querySelector('.alert');
                        if (alertElement) {
                            alertElement.remove();
                        }
                    }, 5000);
                </script>
            <?php endif; ?>
        <?php endif; ?>

        <form method="POST" action="cadastrando.php">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome">
                </div>
                <div class="form-group col-md-4">
                    <label for="telefone">Telefone:</label>
                    <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Telefone">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Password</label>
                    <input type="password" name="senha" class="form-control" id="inputPassword4">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
</div>

<?php require_once './template/footer.php'; ?>
