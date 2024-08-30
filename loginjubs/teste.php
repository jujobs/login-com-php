<?php
include 'Contato.class.php';

$contato = new Contato();

if ($_POST["name"] !='' && $_POST["email"] && $_POST["senha"]) {
    $resultado = $contato->insertUser($_POST["name"], $_POST["email"], $_POST["senha"]);
    echo "
    <script>
        alert('Registro não feito vsf')
    </script>";
}


// if( $resultado == true) {
//     echo"
//     <script>
//         alert('Registro inserido com sucesso!')
//     </script>";
// } else (){

// }