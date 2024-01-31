<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio Empresa</title>
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
    max-width: 100vw;
    max-height: 100vh;
}
body {
    background-image: url("images/background.jpg");
    max-width: 100vw;
    max-height: 100vh;
}
.pratos{
    display: flex; 
    flex-direction: row;
    justify-content: space-between;
    width: 100%;
    align-items: center;
}
#empresa2{
    font-size: 20px;
    margin: 14px;
    position: relative;
    left: 30px
}
.dinamico{
    margin:10px;
    list-style: none;
    position: relative;
    left: 20px;
}
</style>
<body>
    
    <main class="cardapio1">
        <div class="days">
            <h3>Segunda</h3>
            <h3>Terça</h3>
            <h3>Quarta</h3>
            <h3>Quinta</h3>
            <h3>Sexta</h3>
        </div>
        <div style="display: flex; flex-direction: column" class="cardapio" >

        <div style="display: flex; flex-direction: row; width: 100%" class="nome_prato">
        <?php 
        for($i=0; $i<5; $i++){
            $pratos = "Almoço";
            echo "<div class='pratos'>";
            echo "<p id='empresa2'>";
            echo $pratos;
            echo "</p>";
            echo "</div>";
        }
        ?>
        </div>
        <div style="display: flex; flex-direction: row; width: 100%" class="pratos">
        <?php

        $semana = [
            "Segunda" => ["Franguinho na Panela", "_________________","Frango Grelhado", "Arroz Integral", "Salada de Folhas Verdes", "Suco de Laranja Natural"],
            "Terça" => ["Italianíssimos", "_________________","Spaghetti ao Pesto", "Tomate Assado com Manjericão", "Pão Integral", "Água com Limão"],
            "Quarta" => ["Bom e Barato", "_________________","Estrogonofe de Carne", "Purê de Batatas", "Brócolis ao Vapor", "Suco de Acerola"],
            "Quinta" => ["Alto Mar", "_________________","Peixe Assado com Ervas", "Quinoa", "Abobrinha Grelhada", "Suco de Abacaxi"],
            "Sexta" => ["Os Smurfs", "_________________","Risoto de Cogumelos", "Salada de Rúcula com Tomate Seco", "Frutas Frescas", "Água de Coco"]
        ];

        foreach ($semana as $dia => $pratos) {
            echo "<ul class='dinamico'>";

        foreach ($pratos as $prato) {
            echo "<li class='prats'>$prato</li>";
        }
            echo "</ul>";
        }
        ?>
        </div>
        </div>
        
    </main>
    <footer>
        <p id="empresa">
            <?php 

            $var = "nutriNilmar";
            echo $var;
            
            ?>&copy;
        </p>
    </footer>

    
    
</body>
<script>
</script>
</html>