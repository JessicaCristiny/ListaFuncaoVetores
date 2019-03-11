<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>exercicio1</title>
    </head>
    <body>
        <?php
        $num = 2;
        function primos ($num) {
	$pri=1;
	$cont=0;
	while($pri<=$num){
		if($num%$pri==0){
		$cont++;
		}
	$pri++;
	}
	if ($cont ==2){
		return true;
	}
	return false;

}
       if (primos($num)){
            echo"o numero ".$num." é primo";
	}
	else {
            echo"O numero ".$num. " não é primo";
	}
        ?>
    </body>
</html>
