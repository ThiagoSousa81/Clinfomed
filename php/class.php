<?php
Class database
    {      
        private $pdo;
        public $msg = "";
        
      
        public function conectar($nome, $host, $user, $password)
        {
            global $pdo;
            global $msg;
            try {
                
                $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$user,$password);
            } catch (PDOException $e) {
                $msg = $e->getMessage();
            }
            
        }

        public function login($user, $password)
        {
            global $pdo;  
            $sql = $pdo->prepare("SELECT ID_USER FROM CONTAS WHERE EMAIL_USER = :u AND HASH_USER = :h");  
            $sql->bindValue(":u", $user);
            $sql->bindValue(":h", $password);    //lembrar de aplicar criptografia depois
            //$sql = $pdo->prepare("SELECT id_user FROM usuarios WHERE nome_user = '".$user."' AND hash_user = '".$password."'");  
            $sql->execute();
            if($sql->rowCount() > 0)
            {
                $dados = $sql->fetch();
                session_set_cookie_params(1800); //Define o tempo limite da sessão 30 min
                session_start();
                $_SESSION['ID_USER'] = $dados['ID_USER'];                
                return true;
            }
            else
            {
                return false;
            }
        }
      
      
      public function GetUser($id)
      {
        try {

          
          $conexao = mysql_connect($servidor, $username, $password) 
            or die("Erro ao conectar ao banco de dados");
          $db = mysql_select_db($database)
            or die("Erro ao selecionar banco de dados");
          $query = mysql_query("SELECT * FROM CONTAS WHERE ID_USER = ".$id);
             
          return mysql_fetch_array($query);
        } catch (Exception $e) {
          $msg = $e->getMessage();
        }            
      }
      
      public function GetUserByEmail($email)
      {
        try {
          $servidor = 'xxxxxxxxxxxxxxxx';
          $username = 'xxxxxxxxxxxxx';
          $password = 'xxxxxxxxxxxxxxx';
          $database = 'xxxxxxxxxxxxxxxxxx';
          $conexao = mysqli_connect($servidor, $username, $password, $database) 
            or die("Erro ao conectar ao banco de dados");
          
          $query = mysqli_query($conexao, "SELECT ATIVO_USER FROM CONTAS WHERE EMAIL_USER = '".$email."' AND ATIVO_USER = '1'");

          if (mysqli_num_rows($query) > 0) {
            return true;
          } else {
            return false;
          }

        } catch (Exception $e) {
          $msg = $e->getMessage();
        }            
      }
      
      public function GetLinkMySQLI()
      {
        $usuario = 'xxxxxxxxxxxxx';
        $senha = 'xxxxxxxxxxxx';
        $database = 'xxxxxxxxxxxxxx';
        $host = 'xxxxxxxxxxxxxxx';
        
        $mysqli = new mysqli($host, $usuario, $senha, $database);
        return $mysqli;
      }
      
      public function SetPassword($newPassword)
      {
        
      }



    }
?>