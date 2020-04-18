<!–– Rajiv Basnet - Let's Make a Deal  ––>


<?php
		include "functions.php";
		ob_start();
		include 'second.php';
		ob_end_clean();

		echo($firstPickDoor);

	
		$secondPickDoor = $_POST['doorSecondPick'];
		$firstPickDoor =  $_POST["door"];


		$doorSwitchedOrNot = switchedOrNot($firstPickDoor, $secondPickDoor);
		$result = findResult($winningDoor, $secondPickDoor);
		

		// insertIntoDatabase($firstPickDoor, $secondPickDoor, $winningDoor, $doorSwitchedOrNot, $result);
		
?>

<html>
<head>
	<title>Let's Make a Deal</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript" src = "main.js"> </script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>


<body>

<div class = "allcontent">
	<div class="heading" id ="content">
		<a href = "index.html"> <h1>  Let's Make A Deal  </h1> </a>
		<h2>
		
		<strong>You picked Door <?php echo $secondPickDoor; ?>. 
			The prize is in Door <?php echo $winningDoor; ?>.
			<?php
				 if ($result == "won"){
					 echo "CONGRATS, you won! </br>You got the RUBY. ";
				 }
				 else {
					 echo "OOPS, you lost! </br> You got the BELL. ";
				 }
			?>
		</strong> 
				
		</h2>
	</div>
	
	<div id="content">
	
	<form name = "myform" action = "third.php" method="post">
	
		<section class = "doorOne">
			<fieldset class = "fieldsets">
				<legend> Door I </legend>
				<div class = "boxes" id = "box1">
						<?php 
							if ($winningDoor == 1 ) {
								echo "<img name=\"doorSecondPick\" value=\"1\" src=\"realPrize.gif\" class=\"door green\" id=\"door1\">";
							}
							else {
								echo "<img name=\"doorSecondPick\" src=\"jokePrize.gif\" class=\"door\" id=\"door2\">";
							}
						?>
						
				</div>
			
			</fieldset>
		</section>
		
		<section class = "doorTwo">
			<fieldset class = "fieldsets">
				<legend> Door II </legend>
				<div class = "boxes">
						
						<?php 
							if ($winningDoor == 2) {
								echo "<img name=\"doorSecondPick\" value=\"2\" src=\"realPrize.gif\" class=\"door green\" id=\"door2\">";
							}
							else {
								echo "<img name=\"doorSecondPick\" src=\"jokePrize.gif\" class=\"door\" id=\"door2\">";
							}
						?>
						
				</div>
			
			</fieldset>
		</section>
			
		
		<section class = "doorThree">
			<fieldset class = "fieldsets">
				<legend> Door III </legend>
				<div class = "boxes">
						
						<?php 
							if ($winningDoor == 3) {
								echo "<img name=\"doorSecondPick\" value=\"3\" src=\"realPrize.gif\" class=\"door green\" id=\"door3\">";
							}
							else {
								echo "<img name=\"doorSecondPick\" src=\"jokePrize.gif\" class=\"door\" id=\"door2\">";
							}
						?>
				
				</div>
			
			</fieldset>
		</section>
		
	</form>
	
	<div class = "playagain">
					<input type="button" value="Play Again" class = "button" id = "startover" onclick="window.location.href = 'index.html';"/>
	</div>
			
	</div>
	
	
	
	<div id = "content" class = "footer">
		Page Designed By Rajiv Basnet
	</div>
</div>
</body>
</html>