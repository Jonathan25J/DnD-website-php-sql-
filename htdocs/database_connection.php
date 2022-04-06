<?php
	$charactername = $_POST['charactername'];
	$classlevel = $_POST['classlevel'];
	$race = $_POST['race'];
	$background = $_POST['background'];
	$health = $_POST['health'];
	$armorclass = $_POST['armorclass'];

	$conn = new mysqli('localhost','root','','unicorn247');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into dnd_data(charactername, classlevel, race, background, health, armorclass) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssii", $charactername, $classlevel, $race, $background, $health, $armorclass);
		$execval = $stmt->execute();
		echo $execval;
        $stmt->close();
		$conn->close();
        {
		header("Location: ./pages/registration.php");
        exit;
        }
	
	}
?>