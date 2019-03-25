<?php

include "includes/header.php";
include "includes/connect.php";

if (isset($_POST['submit'])){
    include "create.php";
}
if (isset($_POST['edit'])){
    include "update.php";
}


$sql = "SELECT * FROM post";
if(! $conn ) {
    die('Could not connect: ' . mysqli_error());
}
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $title = $row['title'];
        $content = $row['content'];
        ?>


        <main>

            <form action="edit.php" method="post">

                <div class="title">
                    <header><?=$title?></header>
                    <input type="hidden" name="id" value="<?=$row['postID']?>">
                </div>

                <div class="content">
                    <p><?=$content?></p>
                </div>

                <div>
                    <input type="submit" value="Edit">
                </div>

            </form>


        </main>



        <?php
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>




<?php include "includes/footer.php" ?>