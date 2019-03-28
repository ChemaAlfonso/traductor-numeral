<?php require_once 'herramientas.php'; ?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="lang" content="es">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <section id="traductor">
            <article class="titulo">
                <h1>Traductor Alfa a numerico</h1>
            </article>
            <article>
                <h3>Aqui puedes escribir el texto que quieras y te lo traducire a numerico</h3>
                <form action="index.php" method="POST">
                    <textarea name="texto"></textarea>
                    <input type="submit" value="Traducir"/>
                </form>
            </article>
            <?php if(!empty($_POST) && $_POST['texto'] != ''):?>
                    <article>
                        <h3>Tu texto numerico seria:</h3>
                        <p><?=$_POST != 0 ? traducirAnumeros($_POST['texto']) : 'Escribe algo por lo menos, ¿no?'?></p>
                        <h5>De nada ;)</h5>
                    </article>
            <?php elseif(!empty($_POST)): ?>
                    <article>
                        <h3>Vamos, escribe algo por lo menos...</h3>
                    </article>
            <?php endif; ?>
        </section>
        <footer>
            <h2>Creado por Jose manuel Alfonso &copy; 2018</h2>
        </footer>
    </body>
</html>
