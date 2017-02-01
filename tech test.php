<?php 
	function countTo($value)
		{
		for ($i=2; $i < $value ; $i++) { 
				if ($i % 5 == 0 && $i % 7 == 0) {
					echo "FooBar <br>";
				}elseif ($i % 56 == 0) {
					echo " <br>" ;
				}elseif ($i % 7 == 0){
					echo "Foo <br>";
				}elseif ($i % 5 == 0) {
					echo "Bar <br>";
				}else{
					echo $i .'<br>';
				}
		}
	}
		?>
<!DOCTYPE html>
<html>
<head>
	<title> TECH TEST</title>
</head>
<body>
		<h1>Today we will print Numbers to HTML counting 1 between to 100</h1>
			<?php countTo(100)?>

</body>
</html>