<?php
/**
 * Created by IntelliJ IDEA.
 * User: Miguel.Acevedo
 * Date: 3/25/2019
 * Time: 3:46 AM
 */

$title = $_POST['title'];
$content = $_POST['content'];


if (empty($title) || empty($content)){
    header("Location: ../index.php?field=empty");
    exit();
} else {

    $sql = "INSERT INTO post (title, content) VALUES ('$title', '$content')";
    if (mysqli_query($conn, $sql)) {
//        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}