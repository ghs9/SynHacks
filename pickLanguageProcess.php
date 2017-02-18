<?php
	$language = "pre";
	echo($language);
	$language = $_POST["language"];
	echo($language);
	if ($language == "Python"){
		header("Location: python.html");
		exit();
	}
	if ($language == "Java"){
		echo("here");
		header("Location: java.html");
		exit();
	}
	if ($language == "C"){
		header("Location: c.html");
		exit();
	}
	if ($language == "C#"){
		header("Location: cSharp.html");
		exit();
	}
	if ($language == "C++"){
		header("Location: cPlusPlus.html");
		exit();
	}
	if ($language == "Ruby"){
		header("Location: ruby.html");
		exit();
	}

?>