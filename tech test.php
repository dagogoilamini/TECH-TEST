<?php 

// function called countTo that takes in a parameter which is a digit and pass that digit to a for loop
	function countTo($value)
		{
    // for to do a simple count of number within 1 - 100
	for ($i=2; $i < $value ; $i++) 
	{ 
      // now we create exceptions to the printing out of the numbers with a chain of logic statement
      
      //statement 1
		if ($i % 5 == 0 && $i % 7 == 0) 
		{
			echo "FooBar <br>";
		}
      // statement 2 is dependent on statement 1
		elseif ($i % 56 == 0) 
		{
			echo " <br>" ;
		}
      // statement 3 is dependent on statement 1 and 2
      		elseif ($i % 7 == 0)
      		{
			echo "Foo <br>";
		}
      // statement 4 is dependent on statement 1, 2 and 3
      		elseif ($i % 5 == 0) 
		{
			echo "Bar <br>";
		}
      // statement 4 is dependent on statement 1, 2, 3 and 4
      		else
		{
			echo $i .'<br>';
		}
	}
}
		?>
<!DOCTYPE html>
<html>
<head>
	<title> TECH TEST</title>

	<style type="text/css">
		.gist{
			width: 75% !important; 
			margin: 10px auto !important;
		}
		.gist-data{
			height: 450px !important;
		}
		.wrapper{
			margin: 10px auto !important;
			width: 75%;
			background: rgba(242, 242, 242, 0.7);
			padding: 10px;
		}
		.title{
		background: #eee;
		margin: -31px -10px -10px;
		padding: 0px 0px 0px 24px;
		color: #b01712;
		box-shadow: 0px 1px 1px 0px #b3b3b3;
	    font-family: 'Farsan', cursive;
    	font-family: 'Signika', sans-serif;
		}
		.body{
			font-family: 'Sansita', sans-serif;
			font-size: 80px;
			height: 550px;
			text-align: center;
			overflow: auto;
		}
		.footer{
		margin:0px -10px -10px -10px;
		padding: 10px 10px 10px 24px;
	    overflow: hidden;
	    color: #767676;
	    background-color: #eee;
	    border-radius: 0 0 2px 2px;
	    font-family: 'Sansita', sans-serif;
	    font-style: italic;	    
		box-shadow: 0px 1px 1px 0px #b3b3b3;
		}
		.footer a{
		font-weight: 600;
		color: #666;
		text-decoration: none;
		border: 0;
		}
	</style>
	
	<link href="https://fonts.googleapis.com/css?family=Sansita:400i" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Farsan|Signika:700" rel="stylesheet"> 

</head>
<body>
	<div class="wrapper">
		<div class="title">
		<h1>Today we will print Numbers to HTML counting 1 between to 100</h1>
		</div>
		<div class="body">
			<?php countTo(100)?>
		</div>
		<div class="footer">Coded with &#x2764; by <a style="float: right;" href="#">Ilamini Sent with &#128140;</a></div>
	</div>
<script src="https://gist.github.com/dagogoilamini/d33258feffabaf62062a4432980f6b44.js"></script>
</body>
</html>
