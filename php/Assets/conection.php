<?php
class Conexao
{
    private $conection;

    private function Con_AbrirConection()
    {
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

    public function Con_Select($query)
    {
        try {
            $con = $this->Con_AbrirConection();
            $res = $con->prepare($query);
            $res->execute();
            if ($res) {
                $res->setFetchMode(PDO::FETCH_ASSOC);
                $tab = $res->fetchAll();
                return $tab;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo "Ocorreu o erro:" . $e->getMessage();
        }
    }

    public function Con_Insert($name, $username, $senha)
    {
        try {
            $con = $this->Con_AbrirConection();
            $res = $con->prepare("INSERT INTO tb_usuarios(nome_users, username_users, senha_users) VALUES(:nome, :username, :senha)");
            $res->bindValue("nome", $name);
            $res->bindValue("username", $username);
            $res->bindValue("senha", $senha);
            $res->execute();
            if ($res) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo "Ocorreu o erro:" . $e->getMessage();
        }
    }

    public function Con_Insert_Fase($title, $desc, $data)
    {
        try {
            $con = $this->Con_AbrirConection();
            $res = $con->prepare("INSERT INTO tb_fases(title_fases, username_users, senha_users) VALUES(:nome, :username, :senha)");
            $res->bindValue("title", $title);
            $res->bindValue("desc", $desc);
            $res->bindValue("data", $data);
            $res->execute();
            if ($res) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo "Ocorreu o erro:" . $e->getMessage();
        }
    }

    public function Con_Insert_cadastro($name, $username, $senha, $genero, $idade)
    {
        try {
            $con = $this->Con_AbrirConection();
            //Verificar os usuarios
            $cmd = $con->prepare("SELECT * FROM tb_usuarios WHERE username_users = ':username'");
            $cmd->bindValue("username", $username);
            $cmd->execute();
            $verf = $cmd->fetch();            
            if (count($verf) > 0) {
                return false;
            } else {
                //Cadastro
                $res = $con->prepare("INSERT INTO tb_usuarios(nome_users, username_users, senha_users, genero_users, idade_users) VALUES(:nome, :username, :senha, :genero, :idade)");
                $res->bindValue("nome", $name);
                $res->bindValue("username", $username);
                $res->bindValue("senha", $senha);
                $res->bindValue("genero", $genero);
                $res->bindValue("idade", $idade);
                $res->execute();
                if ($res) {
                    return true;
                } else {
                    return false;
                }
            }
        } catch (Exception $e) {
            echo "Ocorreu o erro:" . $e->getMessage();
        }
    }


    public function Con_Update($name, $username, $senha, $idade, $genero)
    {
        try {
            $con = $this->Con_AbrirConection();
            //Verificar os usuarios
            $cmd = $con->prepare("SELECT * FROM tb_usuarios WHERE username_users = ':username'");
            $cmd->bindValue("username", $username);
            $cmd->execute();
            $verf = $cmd->fetch();            
            if (count($verf) > 0) {
                //Cadastro
                $res = $con->prepare("INSERT INTO tb_usuarios(nome_users, username_users, senha_users, genero_users, idade_users) VALUES(:nome, :username, :senha, :genero, :idade)");
                $res->bindValue("nome", $name);
                $res->bindValue("username", $username);
                $res->bindValue("senha", $senha);
                $res->bindValue("genero", $genero);
                $res->bindValue("idade", $idade);
                $res->execute();
                if ($res) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo "Ocorreu o erro:" . $e->getMessage();
        }
    }
}
