<?php

include "includes/header.php";
include "includes/connect.php";

$postID = $_POST['id'];

$sql = "SELECT * FROM post WHERE postID=$postID";
if(! $conn ) {
    die('Could not connect: ' . mysqli_error($conn));
}
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $title = $row['title'];
        $content = $row['content'];
        $id = $row['postID'];

        ?>


        <header>Welcome to my CMS Example</header>


        <main>

            <form action="view.php" method="post">
                <input type="hidden" name="id" value="<?=$id?>">
                <div class="title">
                    <label for="title">Edit title:</label>
                    <input type="text" name="title" value="<?= $title ?>">
                </div>

                <div class="content">
                    <label for="content">Edit content:</label>
                    <textarea rows="4" cols="50" name="content"><?= $content ?></textarea>
                </div>

                <div>
                    <input type="reset"><input type="submit" value="Submit" name="edit">
                </div>

            </form>


        </main>


        <?php
    }
} else {
    echo "0 results";
}

mysqli_close($conn);


include "includes/footer.php";


    ?>