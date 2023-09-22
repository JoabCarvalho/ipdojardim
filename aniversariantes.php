<?php
    include_once('config.php');
    $sql = "SELECT DATE_FORMAT(m.data_nascimento, '%d/%m/%Y') AS data_formatada, m.conhecido FROM membros m WHERE MONTH(m.data_nascimento) = MONTH(NOW()) ORDER BY data_formatada";
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
        <h2>Aniversariantes do Mês</h2>
        <div class="aniversariantes">
            <?php
            
                while($user_data = mysqli_fetch_assoc($result)) {
                    echo "<div>";
                    echo "<li>" .$user_data['data_formatada']. "</li>";
                    echo "<p>" .$user_data['conhecido']. "</p>";
                    echo "</div>";
                }
            
            ?>
        </div>
    </main>
    <footer>
        <p> Desenvolvido pela Igreja Presbiteriana do Jardim</p>
    </footer>
</body>
</html>