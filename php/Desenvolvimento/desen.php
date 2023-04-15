<?php

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="desen.css" />
    <title>Painel</title>
</head>

<body>
    <!-- Cabeçalho da Página -->
    <header>

        <!-- Cabeçalho - Barra de Navegação -->
        <nav>
            <ul>
                <li><a href="\php/painel.php" target="_self">Painel</a></li>
                <li><a class="active" href="/php/Desenvolvimento/desen.php" target="_self">Desenvolvimento</a></li>
                <li><a href="\php/Perfil/perfil.php" target="_self">Perfil</a></li>
            </ul>
        </nav>
    </header>

    <!-- Principal - Seções -->
    <main>
        <br><br>
        <!-- Principal - Seção - Titular -->
        <section class="scn_title">
            <h1>Desenvolvimento</h1>
        </section>

        <br><br>

        <section>
            <form action="desen.php" method="post">
                <fieldset class="fld_form">
                    <h1>Cadastrar Fase</h1><br>

                    <label for="ftitle">Título:</label><br>
                    <input type="text" id="ftitle" name="ftitle" required><br><br>

                    <label for="fdesc">Descrição:</label><br>
                    <textarea id="fdesc" name="fdesc" required></textarea><br><br>

                    <label for="fdata">Data:</label><br>
                    <input type="date" id="fdata" name="fdata" min="2023-01-01"><br><br>
                    
                    <div class="btn_group">
                        <input class="btn_action" type="submit" value="Cadastrar">
                        <input class="btn_action" type="reset" value="Redefinir"><br>
                    </div>
                </fieldset>
            </form>
        </section>

        <section class="scn_dados">
            
        </section>

        <br><br>
    </main>

    <!-- Rodapé da Pagina -->
    <footer class="main_footer container">
        <div class="content">

            <!-- Menu -->
            <div class="subfooter">

                <h3 class="titleFooter">Menu</h3>

                <ul>
                    <li><a ref="painel.php" title="Painel" target="_self">Painel</a></li>
                    <li><a href="/php/Desenvolvimento/desen.php" title="Desenvolvimento" target="_self">Desenvolvimento</a></li>
                    <li><a href="/php/Perfil/perfil.php" title="Perfil" target="_self">Perfil</a></li>
                </ul>

            </div>
        </div>

        <div class="main_footer_copy">

            <p class="m-b-footer">ElGames - 2023, todos os direitos reservados.</p>
            <p class="by">Desenvolvido por: <a href="#" title="Jonatas Renan">Jonatas Renan</a></p>
        </div>

    </footer>

</body>

</html>