<?php
    class Conexao{
        private $conection;

        public function Conc_AbrirConection(){
            try {
                $this->conection = new PDO("mysql: host=localhost:8080; db=elgames", "clientes", "usuariostigresa1001");
                $this->conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //return $this->conection;
                echo "Sucesso na conexão!";
            } catch (PDOException $e) {
                echo "Falha na conexão:".$e->getMessage();
                //return false;
            }            
        }

        public function Conc_Select($query){
            try {
                $con = $this->Conc_AbrirConection();
                /*$res = $con->query($query);
                if($res){
                    $res->setFetchMode(PDO::FETCH_COLUMN, 0);
                    $tab = $res->fetchAll();
                    return $tab;
                }else{
                    return false;
                }*/
            } catch (Exception $e) {
                echo "Ocorreu o erro:".$e->getMessage();
            }            
        }

        public function Conc_Insert($name, $username, $senha){
            try {
                $con = $this->Conc_AbrirConection();
                /*$res = $con->query("");
                if($res){
                    return true;
                }else{
                    return false;
                }*/
            } catch (Exception $e) {
                echo "Ocorreu o erro:".$e->getMessage();
            }            
        }

        public function Conc_Update($name, $username, $senha){
            try {
                $con = $this->Conc_AbrirConection();
                echo "A ação foi concluida com exito.";
            } catch (Exception $e) {
                echo "Ocorreu o erro:".$e->getMessage();
            }            
        }

        public function Conc_Insert_2($name, $username, $senha, $genero){
            try {
                $con = $this->Conc_AbrirConection();
                echo "A ação foi concluida com exito.";
            } catch (Exception $e) {
                echo "Ocorreu o erro:".$e->getMessage();
            }            
        }

        public function Conc_Insert_3($name, $username, $senha, $idade){
            try {
                $con = $this->Conc_AbrirConection();
                echo "A ação foi concluida com exito.";
            } catch (Exception $e) {
                echo "Ocorreu o erro:".$e->getMessage();
            }            
        }

        public function Conc_Insert_total($name, $username, $senha, $genero, $idade){
            try {
                $con = $this->Conc_AbrirConection();
                echo "A ação foi concluida com exito.";
            } catch (Exception $e) {
                echo "Ocorreu o erro:".$e->getMessage();
            }            
        }

    }
?>