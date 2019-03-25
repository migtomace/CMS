<?php
/**
 * Created by IntelliJ IDEA.
 * User: Miguel.Acevedo
 * Date: 3/25/2019
 * Time: 3:50 AM
 */

$title = $_POST['title'];
$content = $_POST['content'];
$id = $_POST['id'];


if (empty($title) || empty($content)){
    header("Location: ../index.php?field=empty");
    exit();
} else {

    $sql = "UPDATE post SET title = '$title', content = '$content' WHERE postID = $id;";
    if (mysqli_query($conn, $sql)) {
//        echo "New record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}