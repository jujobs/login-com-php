<?php
include 'Contato.class.php';

$contato = new Contato();

// $resultado = $contato->checkUser($_POST["email"]);
// if($resultado == true) {
//      echo"
//      <script>
//          alert('Registro inserido com sucesso')
//      </script>";    
// }

$nome = $_POST["name"];
$senha = $_POST["senha"];
$email = $_POST["email"];




// $dados = $contato->checkPassUser('fabioclaret@gmail.com', 'nao');
// if(!empty($dados)){
//     echo"
//     <script>
//         alert('Usuario ja EXISTE!')
//     </script>";    
// }else{
//     echo"
//     <script>
//         alert('Logado com sucesso!')
//     </script>";    
// }

// if ($_POST["name"] !='' && $_POST["email"] && $_POST["senha"]) {
//     $resultado = $contato->insertUser($_POST["name"], $_POST["email"]);
//     echo "
//     <script>
//         alert('Registro não feito')
//     </script>";
// }
