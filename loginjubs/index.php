<!DOCTYPE html>
<html lang="pt-br">
<head>

    <script src="javascript.js" type="text/javascript" defer></script>

    <link rel="stylesheet" type="text/css" href="style.css"/>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>


<div class="login">
    <h1>Tela de Login</h1>
    <form action="" name="jequiti" method="POST">
      <div class="elementos-login">
        <label for="name">Nome: </label>
        <input type="text" name="name">
        <label for="email">Email: </label>
        <input type="text" name="email">
        <label for="senha">Senha: </label>
        <input type="text" name="senha">
        <button id="btlogin" type="submit" value="Submit" name="btnlogar">Entre</button>
        <button id="btcadastro" type="submit" value="Submit" name="btncadastrar">Cadastre-se</button>
      </div>
</div>

</form>
    
</body>
</html>

<?php
include 'Contato.class.php';

$contato = new Contato();

if (isset($_POST["btncadastrar"])) {
  $nome = $_POST["name"];
  $senha = $_POST["senha"];
  $email = $_POST["email"];
  $dados = $contato->checkUser($email);
  if(!empty($dados)) {
         echo"
         <script>
             alert('Usuário já cadastrado! Insira outro email.')
         </script>";    
    }else{
      if (!empty($nome) && !empty($email)  && !empty($senha)) {
            $resultado = $contato->insertUser($name, $email, $senha);
            echo "
            <script>
                alert('Registrado com sucesso! yupiiiiiii')
            </script>";
        }else {
            echo "
            <script>
                alert('Não podem ser inseridos dados vazios!')
            </script>";
        }
    }
    
}

if (isset($_POST["btnlogar"])) {
  $nome = $_POST["name"];
  $senha = $_POST["senha"];
  $email = $_POST["email"];
  $dados = $contato->checkUser($email);
  if(!empty($dados)) {
        $senhacerta = $contato->checkPassUser($email, $senha);
        if(!empty($senhacerta)) {
          echo"
          <script>
              alert('Logado com sucesso!')
          </script>";
        }else{
          echo"
          <script>
              alert('Senha incorreta!')
          </script>";
        }
            
    }else{
      echo"
         <script>
             alert('Usuario não cadastrado! Cadastre-se!')
         </script>"; 
    }
    
}