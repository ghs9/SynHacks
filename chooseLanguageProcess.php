<?php
	$language = $_POST["language"];
	if ($language === "Python"){
		header("Location: /python.html", true, 302);
		exit();
	}
	if ($language === "Java"){
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
	// header("Location: startScreen.html", true, 302);
	echo ("Does this work?");
	print("this work");
?>
<!DOCTYPE HTML>
<html>
<head></head>
<body>
here
<?="Does this work?"?>
</body>
</html>