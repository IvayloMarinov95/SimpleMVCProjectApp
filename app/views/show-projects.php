<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8"/>
    <title>HomePage</title>
    <style>
    table, th, tr, td{
        border:1px solid black;
    }
    
    </style>
    </head>    
    <body>
        <div class="button">
            <a href="http://localhost/simplemvc/public/home/add">Add</a>
        </div>
        <div class="tbl">
            <table border="1">
                <tr>
                    <td>Project name</td>
                    <td>Student name</td>
                    <td>Date</td>
                    <td>Document</td>
                    <td>View</a></td>
                    <td>Edit</a></td>
                    <td>Delete</a></td>
                </tr>
                <?php
                        foreach($data['projects'] as $projects){
                            echo "<tr>";
                            echo  "<td>" . $projects["name"] . "</td>";
                            echo  "<td>" . $projects["student_name"] . "</td>";
                            echo  "<td>" . $projects["date"] . "</td>";
                            echo  "<td>" . $projects["document_name"] . "</td>";
                            echo "<td><a href='http://localhost/simplemvc/public/home/info?id=" . $projects["id"] . "'>View</a></td>";
                            echo "<td><a href='http://localhost/simplemvc/public/home/edit?id=" . $projects["id"] . "'>Edit</a></td>";
                            echo "<td><a href='http://localhost/simplemvc/public/home/delete?id=" . $projects["id"] . "'>Delete</a></td>";
                            echo "</tr>";

                        
                        }
                    
              ?>      
           </table>
        </div>  
    </body>
</html>
