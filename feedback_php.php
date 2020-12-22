<?php



	$firstname = $_POST['First'];
	$lastname = $_POST['Last'];
	$mobile = $_POST['Mobile'];
	$profession = $_POST['Profession'];
	$email = $_POST['Email'];

	$teachings = $_POST['teaching'];
	$exams = $_POST['Exams'];
	$yesbce = $_POST['Yesbce'];

	$languages = $_POST['Langs'];

	$feedback = $_POST['feedback'];

	$conn = new mysqli('localhost','root','','FEEDBACK');

	if($conn->connect_error)
	{
		die('Connection Failed'.$conn->connect_error);
	}
	else
	{
		$stmt=$conn->prepare("INSERT INTO Feed_Back(Firstname,Lastname,Mobile,Profession,Email,Teaching,Exams,Yesbce,Languages,Feedback_sum)
			VALUES(?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("ssisssssss",$firstname,$lastname,$mobile,$profession,$email,$teachings,$exams,$yesbce,$languages,$feedback);
		$stmt->execute();
		echo "Form submitted successfully";
		$stmt->close();
		$conn->close();

	}

?>