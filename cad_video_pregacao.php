<?php
    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $incorporar = $_POST['incorporar'];

        $result = mysqli_query($conexao, "INSERT INTO video_pregacao (incorporar_youtube) VALUES ('$incorporar')");

        header('Location: cad_video_pregacao.php');
    }
 ?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IP do Jardim</title>
    <link rel="shortcut icon" href="Imagens/Logo/Ico/Logo.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Style/Style.css">    
</head>
<body>
    <header>
        <div class="menu">
            <p>Igreja Presbiteriana do Jardim</p>
        </div>
    </header>
    <nav>
        <div class="menu">
            <a href="index.php">Início</a>
            <a href="noQueCremos.php">No que cremos</a>
            <a href="aconselhamento.php">Aconselhamento</a>
            <a href="video.php">Pregação</a>
            <a href="aniversariantes.php">Aniversariantes</a>
            <a href="redeSociais.php">Redes Sociais e Devocionais</a>
        <div>
        <div>                  
            <img src="Imagens/Logo/Ico/Logo192x192.png" alt="Logo IP do Jardim">
            <h1>Igreja Presbiteriana do Jardim</h1>
            <h2>Av. Ricardo Loureiro Cavalcante, nº 133, Jardim Aeroporto, Bayeux</h2>
        </div>
    </nav>
    <main class="conteiner-principal"> 
    
    <form action="" method="POST">
        <div class="container">
            <br>
            <legend><b>Cadastro Código Incorporar YOUTUBE</b></legend>
            <br><br>
            <div class="row">
                <div class="col">
                    <label for="incorporar">Código YOUTUBE (Compartilhar - Incorporar):</label>
                    <div><input type="text" name="incorporar" id="incorporar" required></div>
                </div>
            </div>
            
            <br>
            <br>
            
        <input type="submit" name="submit" id="submit" value="Enviar">
    </form>
    </main>
<footer>
    <p> Desenvolvido pela Igreja Presbiteriana do Jardim</p>
</footer>
</body>
</html>