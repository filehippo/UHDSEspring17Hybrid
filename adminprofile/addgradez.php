


<!DOCTYPE html>

<html lang="en">

<?php

$conn = new mysqli('localhost', 'uhdjordan', 'uhdchang', 'uhdpizzaratzz') 
or die ('Cannot connect to db');

    $result = $conn->query("select id_student, finame from students");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='id_student'>";

    while ($row = $result->fetch_assoc()) {

                  unset($id, $name);
                  $id = $row['id_student'];
                  $name = $row['finame']; 
                  echo '<option value="'.$id.'">'.$name.'</option>';
                 
}

    echo "</select>";
    echo "</body>";
    echo "</html>";
?>









</body>
</html>