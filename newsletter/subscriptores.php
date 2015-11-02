<?php
	function conectar()
	{
    $dbh = new PDO("mysql:host=localhost;dbname=news", 'root', 'Sicparvis25');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;
	}



	function getinfoFirst(){
  $sql = "SELECT * FROM guestbook";
  try {
      $db = conectar();
      $stmt = $db->query($sql);
      $datos = $stmt->fetchAll();
     
      foreach($datos as $row) {
          $id = $row['id'];
          $name = $row['name'];
          $email=$row['email'];
           echo '<li>
           <input type="hidden" value="'.$id.'" id="idComent">
            <div class="commentText">
            <p class="">'.$email.'</p> 
            <span class="date sub-text">'.$nombre.'</span>
          </div>
        </li>';
        }
      
      $db = null;
  } catch(PDOException $e) {
      echo 'Error: ' . $e->getMessage();
  }
}
getinfoFirst();
?>