<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="cont">
        <form action="index.php" method="post">
            <div id="mail">
                <div>
                    <label for="to">To :</label>
                    <input type="text" name="to" id="to" required>
                </div>
                <br>
                <div>
                    <label for="object">Object :</label>
                    <input type="text" name="object" id="object" required>
                </div>
                <div>
                    <textarea name="message" cols="30" rows="10" placeholder="Message" required></textarea>
                </div>
            </div>
            <div id="submit">
                <input type="submit" value="Send">
            </div>
        </form>
    </div>
</body>
</html>

<?php
    $run = false;
    if(isset($_POST["to"],$_POST["message"])){
        include "./classes/Mail.php";
        $run = true;
    }
    if($run){
        $mail = new Mail($_POST["to"],$_POST["object"],$_POST["message"]);
        if($mail->send()){
            echo "<div id='modal' style='background-color: darkseagreen'>Message Envoyé</div>";
        }
        else{
            echo "<div id='modal' style='background-color: indianred'>Erreur lors de l'envoie</div>";
        }

    }
?>