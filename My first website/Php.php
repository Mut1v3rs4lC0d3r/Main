<?php
   $email = $_POST['email'];
   $date = $_POST["date"];
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-UA-Compatible">
    <meta name="veiwport" content="width-device-width, initial-scale=1-0">
    <link rel="stylesheet" href="Style4.css">
    <title>Matthews Marvalous Multiverse</title>
</head>
<body>
<p>
    Welcome to the club <?php echo $email?>. You are an official member of the Marvalous Multiverse.
    Your subscripsion will happen around <?php echo $date?>.
    To return to the main page press this button.
    <nav class="link">
        <form action="Main.php" >
        <input type="submit" value="Main page and agree">
        </form>
    </nav>

</p>
<script src="script.js"></script>
</body>
