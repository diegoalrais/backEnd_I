<?php

$correto = $_GET['apresentado'];
$escolhido = $_GET['escolhido'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php if($correto === $escolhido) {?> 
                <p>Você acertou! O animal correto é <strong><?= $escolhido?></strong>.</p> 
            <?php } else {?>
                <p>Você errou ao escolher: <strong><?=$escolhido?></strong>. A opção correta é: <strong><?=$correto?></strong>.</p>
        <?php }?> 
        <button><a href="index.php" style="text-decoration: none;"><strong>VOLTAR</strong></a></button>
    </body>
</html>
