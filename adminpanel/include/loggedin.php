<?php

	if(!isset($_SESSION['userID']) && empty($_SESSION['userID']))
	{
		header('location:../login/index.php');
	}

?>