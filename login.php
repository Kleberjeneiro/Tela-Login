<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = $_POST["username"];
        $password = $_POST["password"];
        $setor = $_POST["setor"];

        switch ($setor) {

            case 'Administrativo':
                if ($username === 'Administrativo' && $password === '12345') {
                    // Login bem-sucedido - redirecionar para a página principal, por exemplo
                    header("Location: producao.php");
                    exit();
                } else {
                    // Login falhou - exibir mensagem de erro, por exemplo
                    header("Location: index.php");
                    echo "Credenciais inválidas. Tente novamente.";
                }       
            break;

            case 'Financeiro':
                if ($username === 'Financeiro' && $password === '12345') {
                    // Login bem-sucedido - redirecionar para a página principal, por exemplo
                    header("Location: financeiro.php");
                    exit();
                } else {
                    // Login falhou - exibir mensagem de erro, por exemplo
                    header("Location: index.php");
                    echo "Credenciais inválidas. Tente novamente.";
                }           
            break;

            case 'Almoxarifado':
                if ($username === 'Almoxarifado' && $password === '12345') {
                    // Login bem-sucedido - redirecionar para a página principal, por exemplo
                    header("Location: cadastro_produto.php");
                    exit();
                } else {
                    // Login falhou - exibir mensagem de erro, por exemplo
                    header("Location: index.php");
                    echo "Credenciais inválidas. Tente novamente.";
                } 
            
            default:
                echo "Setor inválido";
        
            break;
        }    
    }
?>