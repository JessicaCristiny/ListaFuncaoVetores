<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        function primos_menor_100 (){
            for($i = 2; $i <= 100; $i++){
            $num = $i;
            $cont = 0;
            $pri = 1;
	while($pri<=$num){
		if($num % $pri == 0){
		$cont++;
		}
	$pri++;
	}
        if ($cont == 2){
            echo $num ."<br>";
        }
            
                
        }
        }
        primos_menor_100 ()
        ?>
    </body>
</html>
