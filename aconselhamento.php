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
            <a href="redeSociais.php">Redes Sociais e Devocionais</a>
        </div>
        <div>                  
            <img src="Imagens/Logo/Ico/Logo192x192.png" alt="Logo IP do Jardim">
            <h1>Igreja Presbiteriana do Jardim</h1>
            <h2>Av. Ricardo Loureiro Cavalcante, nº 133, Jardim Aeroporto, Bayeux</h2>
        </div>
    </nav>
    <main> 
    <h2>Aconselhamento Pastoral</h2>
    <form action="cadUsu.php" method="POST">
            <fieldset>
                <legend><b>Mande uma mensagem para o nosso pastor</b></legend>
                <br>
                <label for="sexo">Sexo: </label>
                    <input type="radio" id="masculino" name="sexo" value="M" required>
                    <label for="masculino">Masculino</label>                    
                    <input type="radio" id="feminino" name="sexo" value="F" required>
                    <label for="feminino">Feminino</label>
                    <br><br><br>       

                <div class="inputBox">
                    <input type="text" name="nome_completo" id="nome_completo" class="inputUser" required>
                    <label for="nome_completo" class="labelInput">Nome Completo:</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="text" name="conhecido" id="conhecido" class="inputUser" required>
                    <label for="conhecido" class="labelInput">Conhecido como:</label>
                </div>
                <br><br>  

                <div class="inputBox">
                    <input type="tel_celular" name="tel_celular" id="tel_celular" class="inputUser" required>
                    <label for="tel_celular" class="labelInput">Celular:</label>
                </div>
                <br><br>
<!--
                    <label for="data_nascimento"><b>Data de Nascimento:&ensp;</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br>
-->
                <table>
                    <tr>
                        <td class="cidade">
                            <div class="inputBox">
                                <input type="text" name="cidade" id="cidade" class="inputUser" required>
                                <label for="cidade" class="labelInput">Cidade:</label>
                            </div>
                        </td>
                        <td class="bairro">
                            <div class="inputBox">
                                <input type="text" name="bairro" id="bairro" class="inputUser" required>
                                <label for="bairro" class="labelInput">Bairro:</label>
                            </div>
                        </td>
                    </tr>
                    </table>
                    <table>
                    <tr>
                        <td class="endereco">
                            <div class="inputBox">
                                <input type="text" name="endereco" id="endereco" class="inputUser" required>
                                <label for="endereco" class="labelInput">Endereço (sem número):</label>
                            </div>
                        </td>
                        <td class="numero">
                            <div class="inputBox">
                                <input type="text" name="numEndereco" id="numEndereco" class="inputUser" required>
                                <label for="numEndereco" class="labelInput">Nº:</label>
                            </div>
                        </td>
                    </tr>
                    </table>
                    <table>
                    <tr>
                        <td class="complemento">
                            <div class="inputBox">
                                <input type="text" name="complemento" id="complemento" class="inputUser" required>
                                <label for="complemento" class="labelInput">Complemento:</label>
                            </div>
                        </td>
                        <td class="cep">
                            <div class="inputBox">
                                <input type="text" name="cep" id="cep" class="inputUser" required>
                                <label for="cep" class="labelInput">CEP:</label>
                            </div>
                        </td>
                    </tr>
                </table>
                <br><br>
                <input type="submit" name="submit" id="submit" value="Enviar">
            </fieldset>
        </form>
    </main>
    <footer>
        <p> Desenvolvido pela Igreja Presbiteriana do Jardim</p>
    </footer>
</body>
</html>