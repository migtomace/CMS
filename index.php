<?php include "includes/header.php"?>


    <header>Welcome to my CMS Example</header>


<main>

    <form action="view.php" method="post">

        <div class="title">
            <label for="title">Create a title:</label>
            <input type="text" name="title" placeholder="Enter a title">
        </div>

        <div class="content">
            <label for="content">Create some content:</label>
            <textarea rows="4" cols="50" placeholder="Enter some content here..." name="content"></textarea>
        </div>

        <div>
            <input type="reset"><input type="submit" value="Submit" name="submit">
        </div>

    </form>
    

</main>


<?php include "includes/footer.php" ?>