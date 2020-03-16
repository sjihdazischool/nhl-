<?php 
	if (session_status() == PHP_SESSION_NONE) {
	    session_start();
	}
?>
<nav >
	<div class="nav-wrapper white">
	<a href="index.php" class="brand-logo"><img src="images/logo.jpg"></a>
	<?php
		if(isset($_SESSION["loggedin"])){
		    echo "<ul id='nav-mobile' class='right hide-on-med-and-down'>";
		    echo "
		    	<li><a class='waves-effect waves-light btn blue darken-1' href='addMessage.php'>add message</a>
				<li><a class='waves-effect waves-light btn blue darken-1' href='logout.php'>log out</a></li>";
		    echo "</ul>";
		}
	?>
	</div>
</nav>