<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <section>
        <div class="login-container">
            <form action="php/login-001.php" method="post">
                <h2>Login</h2>
                <label for="setor">Acessar como:</label>
                <select name="setor" id="setor">
                    <option value=""></option>
                    <option value="Financeiro">Financeiro</option>
                    <option value="Administrativo">Administrativo</option>
                    <option value="Almoxarifado">Almoxarifado</option>
                </select><br>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username"  placeholder="Username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Password" required>
            
                <button type="submit">Acessar</button>
                <hr>
                <button type="reset">Limpar</button>
            </form>
            
        </div>
        <footer>
            <h6>Versão do Sistema: 00.00.01</h6>
        </footer>
    </section>
    
  
   
</body>
</html>
