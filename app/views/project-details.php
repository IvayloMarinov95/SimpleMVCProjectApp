<!DOCTYPE html>
<html>
    <head>
     <title>Details</title>   
     <meta charset="utf8">
    </head>
<body>
  <?php
     
        $data['project'];          
         echo "<div>";
         echo "<h1>" . $data['project']["name"] . "</h1>";
         echo "<h1>" . $data['project']["student_name"] . "</h1>";
         echo "<h1>" . $data['project']["date"] . "</h1>";
         echo "</div>";
         

?>
</body>
</html>