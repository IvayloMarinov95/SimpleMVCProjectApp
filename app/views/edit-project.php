<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Edit</title>
    
</head>
<body>

<?php
  
    $data['project'];
    echo "<form action= 'http://localhost/simplemvc/public/home/update?id=" . $_GET['id'] . "'" . "method = post>";
    echo "<input type='text' name='name' value='" . $data['project']['name']."'>";
    echo "<input type='text' name='student_name' value='" . $data['project']['student_name']."'>";
    echo "<input type='submit' value='Edit'>";
    echo "</form>";
    


?>    
</body>
</html>

