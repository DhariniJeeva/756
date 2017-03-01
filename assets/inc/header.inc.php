<!--
/**
 * Created by PhpStorm.
 * User: DJ
 * Date: 1/28/17
 * Time: 3:11 PM
 */-->

<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Intro<?= ($title) ? " | " . $title : "" ?></title>
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
</head>
<body>
<div class="image">
    <img src="assets/images/dj.jpg" style="max-width: 40%;
    height: 60%; border : 3px solid lightskyblue;">
</div>
<div class="contact">
    <a href="<?= URL_BASE ?>contact/" target="_parent">
        <button id="b">Contact me!</button>
    </a>
</div>
<div class="about">
    <h3>Little bit about me :</h3>
    <p>My name is <strong>Dharini Jeevanandam</strong> ( Email : dj9875 [at] rit [dot] edu ) and I'm a second year grad
        student with the ISTE Department. I'm interested in all web dev related stuff.
        I like spicy food, baking, travelling and binge watching tv shows. I'm a dog lover.
        Here's a picture of my dog wearing my tiara. (which he broke into pieces later)
        He is with my parents in <a href="https://en.wikipedia.org/wiki/Chennai">Chennai</a>, India - my hometown)
        His name is Polo.</p>
    <img src="assets/images/polo.jpg" style="max-width: 30%;height: auto; border : 3px solid lightskyblue;">

</div>

<nav class="navigation">
    <h3>Submissions for this class</h3>
    <h4>Homework- click the link below to view</h4>
    <ul>
        <li><a href="<?= URL_BASE ?>homework/">Homework 1</a></li>
        <li><a href="<?= URL_BASE ?>homework/">Homework 2</a></li>
        <li><a href="<?= URL_BASE ?>homework/">Homework 3</a></li>
        <li><a href="<?= URL_BASE ?>homework/">Homework 4</a></li>
        <li><a href="<?= URL_BASE ?>homework/">Homework 5</a></li>
        <li><a href="<?= URL_BASE ?>homework/">Homework 6</a></li>
    </ul>
    <h4>Projects- click the link below to view</h4>
    <ul>
        <li><a href="<?= URL_BASE ?>projects/">Project 1</a></li>
        <li><a href="<?= URL_BASE ?>projects/">Project 2</a></li>
        <li><a href="<?= URL_BASE ?>projects/">Project 3</a></li>
    </ul>
    <h4>ICE- click the link below to view</h4>
    <ul>
        <li><a href="<?= URL_BASE ?>ice/">ICE 1</a></li>
        <li><a href="<?= URL_BASE ?>ice/">ICE 2</a></li>
        <li><a href="<?= URL_BASE ?>ice/">ICE 3</a></li>
        <li><a href="<?= URL_BASE ?>ice/">ICE 4</a></li>
        <li><a href="<?= URL_BASE ?>ice/">ICE 5</a></li>
        <li><a href="<?= URL_BASE ?>ice/">ICE 6</a></li>
        <li><a href="<?= URL_BASE ?>ice/">ICE 7</a></li>
        <li><a href="<?= URL_BASE ?>ice/">ICE 8</a></li>
        <li><a href="<?= URL_BASE ?>ice/">ICE 9</a></li>
        <li><a href="<?= URL_BASE ?>ice/">ICE 10</a></li>
        <li><a href="<?= URL_BASE ?>ice/">ICE 11</a></li>
        <li><a href="<?= URL_BASE ?>ice/">ICE 12</a></li>
    </ul>
</nav>
</body>
</html>

