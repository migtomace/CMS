<?php
/**
 * Created by IntelliJ IDEA.
 * User: Miguel.Acevedo
 * Date: 3/25/2019
 * Time: 3:50 AM
 */

$id = $_POST['id'];


if (empty($id)){
    header("Location: ../index.php?field=empty");
    exit();
} else {

    $sql = "DELETE FROM post WHERE postID = $id;";
    if (mysqli_query($conn, $sql)) {
//        echo "New record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}