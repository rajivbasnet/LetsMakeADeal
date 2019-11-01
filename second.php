<!–– Rajiv Basnet - Let's Make a Deal  ––>


<?php
		$winningDoor = mt_rand(1,3);
		
		session_start();
		$_SESSION['winningDoor']= $winningDoor;
		
		$firstPickDoor = $_POST["door"];
		
		$_SESSION['firstPickDoor']=$firstPickDoor;
		
		include "functions.php";
		$openDoor = openFirstDoor($winningDoor, $firstPickDoor);
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
				<strong>
					You picked Door <?php echo $firstPickDoor; ?>. Switching the door increases the probability of winning. You still have a choice. Do you want to SWITCH? 
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
							if ($openDoor == 1 ) {
								echo "<img name=\"doorSecondPick\" src=\"jokePrize.gif\" class=\"door\" id=\"door1\">";
							}
							else {
								echo "<input type=\"submit\" name=\"doorSecondPick\" value=\"1\" style = \"background-image: url('curtainClosed.gif');\" src=\"curtainClosed.gif\" class=\"door\" id=\"door1\">";
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
							if ($openDoor == 2) {
								echo "<img name=\"doorSecondPick\" src=\"jokePrize.gif\" class=\"door\" id=\"door2\">";
							}
							else {
								echo "<input type=\"submit\" name=\"doorSecondPick\" value=\"2\" style = \"background-image: url('curtainClosed.gif');\" src=\"curtainClosed.gif\" class=\"door\" id=\"door2\">";
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
							if ($openDoor == 3) {
								echo "<img name=\"doorSecondPick\" src=\"jokePrize.gif\" class=\"door\" id=\"door3\">";
							}
							else {
								echo "<input type=\"submit\" name=\"doorSecondPick\" value=\"3\" style = \"background-image: url('curtainClosed.gif');\" src=\"curtainClosed.gif\" class=\"door\" id=\"door3\">";
							}
						?>
				
				</div>
			
			</fieldset>
		</section>
			
		
	</form>
	</div>
	
	
	
	<div id = "content" class = "footer">
		Designed By Rajiv Basnet
	</div>
</div>
</body>
</html>
