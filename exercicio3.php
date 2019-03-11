<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>exercicio3</title>
    </head>
    <body>
        <?php
        function cores ($cor){
            '<ul>';
            for($i = 0; $i < count($cor); $i++){
                '<li>'; echo  $cor[$i]." <br>";'</li>';  
            }
            '</ul>';
        }
        $cores = array('branco','verde','vermelho');
        cores ($cores);
        ?>
    </body>
</html>
