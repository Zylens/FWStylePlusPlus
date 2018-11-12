<?php
if (isset($_POST['submit'])) {
    
    include_once 'dbh.inc.php';
    
    $header = mysqli_real_escape_string($conn, $_POST['header']);
    $text = mysqli_real_escape_string($conn, $_POST['text']);
    //error handlers
    //Check for empty fields
    if (empty($header) || empty($text)) {
        header("Location: ../topic.php?signup=empty");
        exit();   
    }else{
        $sql = "SELECT * FROM db_topic WHERE db_id='$header'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            header("Location: ../topic.php?signup=usertaken");
        exit();

        }else{
            //Hashing the password
            
            //Insert the user in dateabase
            $sql = "INSERT INTO db_topic (db_header, db_text) VALUES ('$header','$text');";
            $result = mysqli_query($conn, $sql);
            header("Location: ../topic.php?signup=success");
            exit();

            }
        }
    }else {
    header("Location: ../topic.php");
    exit();
}
