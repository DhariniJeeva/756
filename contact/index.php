<!doctype html>

<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">

    <title>ContactForm<?= ($title) ? " | " . $title : "" ?></title>
    <link rel="stylesheet" type="text/css" href="../assets/css/form.css">
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
<body>
<h1>Contact form</h1>

<?php
require_once "../assets/inc/page_start.inc.php";
echo "<h2 style='text-align: center'>Please enter all fields to successfully send your query!</h2>";
//Validation method
if( !empty( $_POST )){

    $first = trim($_POST["first-name"]);
    $last = trim($_POST["last-name"]);
    $email= trim($_POST["email"]);
    $comments = trim($_POST["comments"]);

    if (empty( $first ) || is_numeric ( $first )){
        $errors[] ="<div class='error'>First name can't be empty or numeric</div>";
    }

    if (empty( $last ) || is_numeric ( $last )){
        $errors[] ="<div class='error'>Last name can't be empty or numeric</div>";
    }
    if (empty( $email )){
        $errors[] ="<div class='error'>Please enter valid email address</div>";
    }
    if (empty ( $comments ) || is_numeric( $comments )){

        $errors[] = "<div class='error'>Comment can not be empty or invalid.</div>";
    }
    if( !isset ( $errors ) ){
        //form submission
        /**
         *@param to you, the dev
         *@para sub of email
         *@param message
         *@param headers
         */
        $headers .= 'CC:'. $email . "\r\n";
        foreach( $_POST as $key => $post)
        {
            $message .= "$key: $post\n";
        }
        if(mail ("dj9875@rit.edu" , "Website query" , $message, $headers )){
        echo "<div class='success'>your query was submitted successfully</div>";

       }
        else{
            echo "<div class='error'query was not submitted successfully. Please try again the details></div>";

        }

    }
}
    if( isset ($errors)){
        foreach( $errors as $error){
            echo $error;
        }
    }


    ?>

<!---contact form--->
<form id="contactform" name="contact-form" method="post" action="index.php">
    <p>
        <label for="first-name">first-name: </label>
        <input type="text" name="first-name" value="<?=$first ?>" id="first-name" placeholder="First Name"/> <!----here = means echo---->
    </p>

    <p>
        <label for="last-name">last-name: </label>
        <input type="text" name="last-name" value="<?=$last ?>" id="last-name" placeholder="Last Name"/>
    </p>

    <label for="email">Email: </label>
    <input id="email" name="email" placeholder="email address" value="<?= $email ?>" type="email">

    <p>
        <label for="comments">Comments:</label>
        <input id="comments" name="comments" value="<?=$comments ?>"</input>
    </p>

    <input type="submit" name="submit" />
    <input type="reset" name="reset" value="reset"/>



<nav>
    <ul>
        <li><a style="color:steelblue;" href="<?php echo URL_BASE; ?>">Home</a></li>
    </ul>
</nav>
</body>
</html>

