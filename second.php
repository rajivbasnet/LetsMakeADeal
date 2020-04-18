<!–– Rajiv Basnet - Let's Make a Deal  ––>


<?php
	$winningDoor = rand(1,3);
	
	$firstPickDoor = $_POST["door"];
	$openDoor = openFirstDoor($winningDoor, $firstPickDoor);

	function openFirstDoor($winningDoor, $firstPickDoor){
		if ($firstPickDoor == 1) {
				if ($winningDoor != 2) {
					$openDoor = 2;
				}
				elseif ($winningDoor != 3){
					$openDoor = 3;
				}
			}
			if ($firstPickDoor == 2) {
				if ($winningDoor != 1) {
					$openDoor = 1;
				}
				elseif ($winningDoor != 3){
					$openDoor = 3;
				}
			}
			if ($firstPickDoor == 3) {
				if ($winningDoor != 1) {
					$openDoor = 1;
				}
				elseif ($winningDoor != 2){
					$openDoor = 2;
				}
			}
			
			return $openDoor;
	}	
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
	
	
	<div id="content" class="footer">
        <p style="text-align: center;">
          <a href="http://www.letsmakeadeal.com/" target="_blank">
            Here's the history of Let's Make A Deal
          </a>
        </p>
      </div>
	  
	<div id = "content" class = "footer">
		Page Designed By Rajiv Basnet
	</div>
</div>
</body>
</html>
