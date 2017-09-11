<?php

$adminName = $_POST["adminName"];
$adminPass = $_POST["adminPass"];

if (empty($adminName) or empty($adminPass)) {

	header ("Location:panelgiris.php");

}

else {

	if($adminName == "furkan" and $adminPass == "Furkan2525x") {

		header ("Location:main.html");

	}

	else {

		header ("Location:panelgiris.php");

	}

}

?>