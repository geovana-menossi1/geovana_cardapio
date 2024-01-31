<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<style>

* {
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;
    font-family: 'Roboto Mono', monospace;
}
body {
    background-image: url("images/background.jpg");
}
</style>
<body>
    <main>
        <div class="login">
            <form action="" class="form">
                <div class="icon">
                    <span class="material-symbols-outlined" style="font-size: 60px;">
                        group
                        </span>
                </div>
                <div class="resto" style="width: 100%; height: 200px; 
                display: flex; flex-direction: column;" >
                
                <legend style="position: relative; bottom: 20px;">Digite seu nome</legend>
                <input type="text" id="nome">
                <legend style="position: relative; bottom: 15px;">Digite a senha</legend>
                <input style="position: relative; bottom: 10px;" type="password" id="senha">
                <div class="botao">
                    <input class="button" type="button" onclick="entrar()" value="Entrar" id="Entrar">
                </div>
                
                </div>
                
            </form>
        </div>
    </main>
</body>
<script>
    function entrar(){
        var user = document.getElementById("senha").value
    if(user == "funcionario"){
        window.location.href = 'cardapio.php'
    }else{
        alert("errado, para entrar vc precisa escrever funcionario na senha")
    }
    }
    
</script>
</html>