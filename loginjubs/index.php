<!DOCTYPE html>
<html lang="pt-br">
<head>
<script>
function validateForm() {
  let x = document.forms["jequiti"]["name"].value;
  let y = document.forms["jequiti"]["email"].value;
  let z = document.forms["jequiti"]["senha"].value;
  if (x == "" && y == "" && z == "") {
    alert("BOTE A INFORMAÇÃO !!!");
    return false;
  }
}
</script>

    <link rel="stylesheet" type="text/css" href="style.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Usuários</title>
</head>
<body>

<div class="login">
    <form action="teste.php" name="jequiti" method="POST">
        <label for="name">Nome: </label>
        <input type="text" name="name">
        <label for="email">Email: </label>
        <input type="text" name="email">
        <label for="senha">Senha: </label>
        <input type="text" name="senha">
        <input type="submit" value="Submit">
</div>

</form>
    
</body>
</html>