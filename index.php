<?php
    include_once('config.php');
    $sql = "SELECT *, DATE_FORMAT(data_culto, '%d/%m/%Y') AS data_formatada FROM culto_mensagens ORDER BY id DESC LIMIT 6";
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
            <a href="redeSociais.php">Redes Sociais e Devocionais</a>        </div>
        <div>                  
            <img src="Imagens/Logo/Ico/Logo192x192.png" alt="Logo IP do Jardim">
            <h1>Igreja Presbiteriana do Jardim</h1>
            <h2>Av. Ricardo Loureiro Cavalcante, nº 133, Jardim Aeroporto, Bayeux</h2>
        </div>
    </nav>
    <main> 
        <h2>Culto Solene</h2>
        <h3>Divisões dos últimos textos</h3>
        <div class="conteiner-principal">
        <?php
/*            do{echo "<div class = caixa>";
                echo "<h2>Culto Solene " .$user_data['data_formatada']. "</h2>";
                echo "<h3>" .$user_data['titulo']. "</h3>";
                echo "<ul>";
                echo "<li>" .$user_data['texto']. "</li>";
                echo "<ol>";
                echo "<li>" .$user_data['texto_divisao_1']. "</li>";
                echo "<li>" .$user_data['texto_divisao_2']. "</li>";
                echo "<li>" .$user_data['texto_divisao_3']. "</li>";
                    if(!empty($user_data['texto_divisao_4'])){
                        echo "<li>" .$user_data['texto_divisao_4']. "</li>";
                } else {}
                echo"</ol>";
                echo"</ul>";
                echo"</div>";
            }
            while($user_data = mysqli_fetch_assoc($result))
*/            
            /**Abaixo com WHILE */
            while($user_data = mysqli_fetch_assoc($result)) {

                echo "<div class = caixa>";
                echo "<h2>Culto Solene " .$user_data['data_formatada']. "</h2>";
                echo "<h3>" .$user_data['titulo']. "</h3>";
                echo "<ul>";
                echo "<li>" .$user_data['texto']. "</li>";
                echo "<ol>";
                echo "<li>" .$user_data['texto_divisao_1']. "</li>";
                echo "<li>" .$user_data['texto_divisao_2']. "</li>";
                    if(!empty($user_data['texto_divisao_3'])){
                        echo "<li>" .$user_data['texto_divisao_3']. "</li>";
                } else {}
                
                    if(!empty($user_data['texto_divisao_4'])){
                        echo "<li>" .$user_data['texto_divisao_4']. "</li>";
                } else {}
                echo"</ol>";
                echo"</ul>";
                echo"</div>";
            }
        ?>
    </main>
    <footer>
        <p> Desenvolvido pela Igreja Presbiteriana do Jardim</p>
    </footer>
</body>
</html>