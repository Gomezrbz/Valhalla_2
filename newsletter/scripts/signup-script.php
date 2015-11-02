<?php

	if(isset($_POST['submit']))
	{
		include_once 'connection.php';
		$name= $_POST['name'];
		$email= $_POST['email'];

		$name = strip_tags($name);
		$email = strip_tags($email);

		if (empty($name)|| empty($email))
		{
			echo "Please fill all the required fields";
		}
		elseif(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*0[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email))
		{
			echo 'Please enter a valid email address';
		}
		else
		{
			function add_user($name,$email)
			{
				$sql = 'INSERT INTO guestbook (name,email,signup_date,status)
					VALUES('$name','$email',now(),'1')';
					try {
    				$db = conectar();
    				$stmt = $db->prepare($sql);
    				$stmt->bindParam('nombre', $nombre);
    				$stmt->bindParam('comentario', $comentario);
    				$stmt->bindParam('foto', $foto);
    				$stmt->execute();
    				echo $stmt->rowCount();
    				$db = null;
  			} catch(PDOException $e)
  			{
    			echo 'Error: ' . $e->getMessage();
			}			
		}
	}
?>
