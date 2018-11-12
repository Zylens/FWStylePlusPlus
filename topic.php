<?php 
    include_once 'header.php';
?>

    <main class="px-3">
        <h1 class="display-4 my-3 text-sm-center">Create Topic</h1>
        <form action="includes/topic-create.inc.php" method="post">
            <input class="form-control my-2" name="header" type="text" placeholder="Überschrift">
            <input class="form-control my-2" name="text" type="text" placeholder="Text">
            <button class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit">Post</button>
        </form>
    </main>
<?php 
    include_once 'footer.php';
?>