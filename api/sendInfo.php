<?php
	session_start();
	$myFile = "../json/informatii.json";

	if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['nume']) && isset($_POST['mail']) && isset($_POST['mesaj']))
	{

		$utilizator = $_POST['nume'];
		$mail = $_POST['mail'];
		$mesaj = $_POST['mesaj'];

		try
		  {

			$struct = array(
			   'nume'=> $_POST['nume'],
			   'mail'=> $_POST['mail'],
			   'mesaj'=>$_POST['mesaj']
			);

			$jsondata = file_get_contents($myFile);
			$arr_data = json_decode($jsondata, true);
			if($arr_data==null)
			{
				$arr_data=array();
			}
    	array_push($arr_data,$struct);
			$formdata=$arr_data;
			$jsondata = json_encode($formdata, JSON_PRETTY_PRINT);

			if(file_put_contents($myFile, $jsondata)){
			    $message="Mesaj transmis cu succes!";
			}
			else {
		        $message="Eroare! Mesajul nu a fost trimis!";
			}
			}
	   	catch (Exception $e) {
	           $message = "$e->getMessage()";
	   	}
	}
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script type='text/javascript'>window.location.href = '../index.php';</script>";

?>
