<?php 
    include_once 'header.php';
?>

    <main class="px-3">
        <h1 class="display-4 my-3 text-sm-center">Sign Up</h1>
        <form action="includes/signup.inc.php" method="post">
            <input class="form-control my-2" name="first" type="text" placeholder="Vorname">
            <input class="form-control my-2" name="last" type="text" placeholder="Nachname">
            <input class="form-control my-2" name="email" type="email" placeholder="E-Mail">
            <input class="form-control my-2" name="uid" type="text" placeholder="Benutzername">
            <input class="form-control my-2" name="pwd" type="password" placeholder="Passwort">
            <button class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit">Registrieren</button>
        </form>
    </main>
<?php 
    include_once 'footer.php';
?>