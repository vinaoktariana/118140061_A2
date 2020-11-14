<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Latihan 3 - Vina Oktariana</title>
    </head>
<body>
    <?php 

	echo "<h1>Bilangan Prima dari 1-50</h1>";
	for ($i=1;$i<=50;$i++){
		$a=0;
		for ($j=1;$j<=$i;$j++){
			if($i%$j==0){
				$a++;
			}
		}
		if($a==2){
			echo $i." ";
		}
	}
    ?>
</body>
</html>