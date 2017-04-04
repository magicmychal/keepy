<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keepy by Zuzanna and Michal </title>
    <link rel="stylesheet" type="text/css" href="kit/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="main.css" />

    <!-- jQuery load -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="kit/semantic.js"></script>

</head>

<body>
    <?php
    //form.php - script for validate
    include 'form.php';
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>

        <div id="header">
            <span id="big">Keepy</span> by Zuza &amp; Michał
            <span id="to_the_right">
            <i class="big write square icon active"></i>
            <i class="big sticky note icon"></i>
        </span>
        </div>
        <div class="ui container bodystyle">
            <div class="ui six column centered grid">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                    <div class="ui fluid input">
                        <input type="text" name="title" placeholder="Title" value="<?php echo $title;?>">
                    </div>
                    <textarea class="txt_style" name="content" placeholder="Type here" rows="5" cols="40"><?php echo $content;?></textarea>
                    <br><br>
                    <div class="ui input">
                        <input type="text" placeholder="E-mail" name="email" value="<?php echo $email;?>">
                    </div>
                    <div class="ui input">
                        <input type="text" placeholder="Name" name="name" value="<?php echo $name;?>">
                    </div><br><br>
                    <input class="ui big yellow button" type="submit" name="submit" value="Post it!">
                </form>
            </div>
           
               <?php echo $nameErr;?><br>
               <?php echo $emailErr;?><br>
               <?php echo $titleErr;?><br>
               <?php echo $contentErr;?>
        
        </div>

</body>

</html>