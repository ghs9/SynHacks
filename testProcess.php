<?php
	$q1 = $_POST["q1"];
	$q2 = $_POST["q2"];
	$q3 = $_POST["q3"];
	if($q1 != "answer1" or $q2 != "answer2" or $q3 != "answer3"){
		header("location: rubyBasics.html");
	} else {
		header("location: ruby.html");
	}

?>