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
            <a href="redeSociais.php">Redes Sociais e Devocionais</a>
        </div>
        <div>                  
            <img src="Imagens/Logo/Ico/Logo192x192.png" alt="Logo IP do Jardim">
            <h1>Igreja Presbiteriana do Jardim</h1>
            <h2>Av. Ricardo Loureiro Cavalcante, nº 133, Jardim Aeroporto, Bayeux</h2>
        </div>
    </nav>
    <main class="conteiner-principal"> 
    <h2>Aconselhamento Pastoral</h2>
    <form action="" method="POST">
        <div class="container">
            <br>
            <legend><b>Mande uma mensagem para o nosso pastor</b></legend>
            <br><br>
            <div class="row">
                <div class="col">
                    <label for="sexo">Sexo: </label>
                    <div>
                        <input type="radio" id="masculino" name="sexo" value="M" required>
                        <label for="masculino">Masculino</label>
                        <input type="radio" id="feminino" name="sexo" value="F" required>
                        <label for="feminino">Feminino</label>
                    </div>
                </div>
                <div class="col">
                    <label for="conhecido">Nome:</label>
                    <div><input type="text" name="conhecido" id="conhecido" required></div>
                </div>                    
            </div>

            <br>

            <div class="row">
                <div class="col">
                    <label for="celular">Celular:</label>
                    <div><input type="tel" name="celular" id="celular" required></div>
                </div>
                <div class="col">
                    <label for="whats">É WhatsApp? </label>
                    <div>
                        <input type="radio" id="whats_sim" name="whats" value="S" required>
                        <label for="whats_sim">Sim</label>
                        <input type="radio" id="whats_nao" name="whats" value="N" required>
                        <label for="whats_nao">Não</label>
                    </div>
                </div>
            </div>
            
            <br>
            
            <div class="row">
                <div class="col">
                    <label for="cep">CEP:</label>
                    <div><input type="text" name="cep" id="cep" required></div>
                </div>
                <div class="col">
                    <label for="cidade">Cidade:</label>
                    <div><input type="text" name="cidade" id="cidade" required></div>
                </div>
                <div class="col">
                    <label for="bairro">Bairro:</label>
                    <div><input type="text" name="bairro" id="bairro" required></div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="rua">Rua:</label>
                    <div><input type="text" name="rua" id="rua" required></div>
                </div>
                <div class="col">
                    <label for="numero">Número:</label>
                    <div><input type="text" name="numero" id="numero" required></div>
                </div>
                <div class="col">
                    <label for="complemento">Complemento:</label>
                    <div><input type="text" name="complemento" id="complemento" required></div>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col">
                    <label for="mensagem">Mensagem:</label>
                        <textarea name="mensagem" id="mensagem" rows="10"></textarea>
                    <br>
                </div>
            </div>

            <br>
            
        <input type="submit" name="submit" id="submit" value="Enviar">
    </form>
    </main>
<footer>
    <p> Desenvolvido pela Igreja Presbiteriana do Jardim</p>
</footer>
</body>
</html>