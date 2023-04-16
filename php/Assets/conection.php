<?php
    class Conexao{
        private $conection;

        private function Con_AbrirConection(){
            try {
                $this->conection = new PDO("mysql: host=localhost:8080; dbname=elgames", "clientes", "usuariostigresa1001");
                $this->conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $this->conection;
                //echo "Sucesso na conexão!";
            } catch (PDOException $e) {
                //echo "Falha na conexão:".$e->getMessage();
                return false;
            }            
        }

        public function Con_Select($query){
            try {
                $con = $this->Con_AbrirConection();
                $res = $con->prepare($query);
                if($res){
                    $res->setFetchMode(PDO::FETCH_COLUMN, 0);
                    $tab = $res->fetchAll();
                    return $tab;
                }else{
                    return false;
                }
            } catch (Exception $e) {
                echo "Ocorreu o erro:".$e->getMessage();
            }            
        }

        public function Con_Insert($name, $username, $senha){
            try {
                $con = $this->Con_AbrirConection();
                $res = $con->prepare("INSERT INTO tb_usuarios(nome_users, username_users, senha_users) VALUES(:nome, :username, :senha)");
                $res->bindValue("nome", $name);
                $res->bindValue("username", $username);
                $res->bindValue("senha", $senha);
                $res->execute();
                if($res){
                    return true;
                }else{
                    return false;
                }
            } catch (Exception $e) {
                echo "Ocorreu o erro:".$e->getMessage();
            }            
        }

        public function Con_Insert_cadastro($name, $username, $senha, $genero, $idade){
            try {
                $con = $this->Con_AbrirConection();
                $res = $con->prepare("INSERT INTO tb_usuarios(nome_users, username_users, senha_users, genero_users, idade_users) VALUES(:nome, :username, :senha, :genero, :idade)");
                $res->bindValue("nome", $name);
                $res->bindValue("username", $username);
                $res->bindValue("senha", $senha);
                $res->bindValue("genero", $genero);
                $res->bindValue("idade", $idade);
                $res->execute();
                if($res){
                    return true;
                }else{
                    return false;
                }
            } catch (Exception $e) {
                echo "Ocorreu o erro:".$e->getMessage();
            }            
        }

        
        public function Con_Update($name, $username, $senha){
            try {
                $con = $this->Con_AbrirConection();
                echo "A ação foi concluida com exito.";
            } catch (Exception $e) {
                echo "Ocorreu o erro:".$e->getMessage();
            }            
        }


    }
?>