<?php
class Contato{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $pdo;

    

    public function getId(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getSenha(){
        return $this->senha;
    }
       
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }
    public function setEmail($mail){
        $this->email = $email;
    }

    function __construct(){
        #o PDO precisa de 3 parametros 
        $dsn    = "mysql:dbname=etimcontato;host=localhost";
        $dbUser = "root";
        $dbPass = "";

        try {
            $this->pdo = new PDO($dsn, $dbUser, $dbPass);

            /* echo "<script>
                   alert('Conectado ao banco')
                </script>";*/

        } catch (\Throwable $th) {
            echo "<script>
                    alert(`Banco indisponivel, tente mais tarde!`)
                 </script>";
        }
    }

    function insertUser($nome, $email, $senha){
        //passo 1 - criar uma variável com a consulta SQL
        $sql = "INSERT INTO usuarios SET nome = :n, email = :e, senha = :s";
        //passo 2 - quando tem apelidos, temos que usar o metodo prepare
        $sql = $this->pdo->prepare($sql);
        //passo 3 - depois do prepare, usar o bindValue, um pra cada apelido
        $sql->bindValue(":n", $nome);
        $sql->bindValue(":s", $senha);
        $sql->bindValue(":e", $email);
        //passo 4 - executar o comando
        $sql->execute();

    }

    function insertAtividade($nome, $idade, $cel){
        $sqlatvd = "INSERT INTO atividade SET nome = :n, idade = :i, cel = :c";

        $sqlatvd = $this->pdo->prepare($sqlatvd);

        $sqlatvd->bindValue(":n", $nome);
        $sqlatvd->bindValue(":i", $idade);
        $sqlatvd->bindValue(":c", $cel);

        $sqlatvd->execute();

    }
       
}
