<?php
    class Conexao{
        private $conection;

        private function AbrirConection(){
            try {
                $this->conection = new PDO("mysql: host=localhost:8080; db=usuarios", "clientes", "usuariostigresa1001");
                $this->conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Sucesso na conexão!";
            } catch (PDOException $e) {
                echo "Falha na conexão:".$e->getMessage();
            }            
        }

        public function Insert($name, $username, $senha){
            try {
                $this->AbrirConection();
                echo "A ação foi concluida com exito.";
            } catch (Exception $e) {
                echo "Ocorreu o erro:".$e->getMessage();
            }            
        }

        public function Insert_2($name, $username, $senha, $genero){
            try {
                $this->AbrirConection();
                echo "A ação foi concluida com exito.";
            } catch (Exception $e) {
                echo "Ocorreu o erro:".$e->getMessage();
            }            
        }

        public function Insert_3($name, $username, $senha, $idade){
            try {
                $this->AbrirConection();
                echo "A ação foi concluida com exito.";
            } catch (Exception $e) {
                echo "Ocorreu o erro:".$e->getMessage();
            }            
        }

        public function Insert_total($name, $username, $senha, $genero, $idade){
            try {
                $this->AbrirConection();
                echo "A ação foi concluida com exito.";
            } catch (Exception $e) {
                echo "Ocorreu o erro:".$e->getMessage();
            }            
        }

        

    }
?>