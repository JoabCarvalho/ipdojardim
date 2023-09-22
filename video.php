<?php
    include_once('config.php');
    $sql = "SELECT incorporar_youtube FROM video_pregacao ORDER BY id DESC LIMIT 1";
    $result = $conexao->query($sql); 
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IP do Jardim</title>
    <link rel="shortcut icon" href="Imagens/Logo/Ico/Logo.ico" type="image/x-icon">
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
        </div>
        <div>                  
            <img src="Imagens/Logo/Ico/Logo192x192.png" alt="Logo IP do Jardim">
            <h1>Igreja Presbiteriana do Jardim</h1>
            <h2>Av. Ricardo Loureiro Cavalcante, nº 133, Jardim Aeroporto, Bayeux</h2>
        </div>
    </nav>
    <main> 
        <h2>Pregação</h2>
        <br>
        <div class="conteiner-principal">
        <div class="video">
            <div class="video-area">
                <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo $user_data['incorporar_youtube'];
                    }
                ?>
            
            </div>
        </div>
        </div>
    </main>
    <footer>
        <p> Desenvolvido pela Igreja Presbiteriana do Jardim</p>
    </footer>
</body>
</html>