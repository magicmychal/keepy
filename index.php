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
            <a href="index.php"><span id="big">Keepy</span></a> by Zuza &amp; Michał
            <span id="to_the_right">
            <i class="big write square icon active"></i>
            <i class="big sticky note icon"></i>
        </span>
        </div>
        <div class="ui container bodystyle">
            <div class="ui floating message display_none">
                    <div class="header">
                    Here for the first time? YOU WILL SEE THIS ONLY ONCE
                    </div>
                    <p>Keepy is a public space to share your notes! Why? Maybe is you're a Russian agent and you want to send a secret not so secret code you'll find this useful. <br>
                    Every field is required. Fill them all and smash the button below! <b>Enjoy!</b></p>
                </div><br>
            <script>
                   if (localStorage.getItem('visited') == 'yes') {
                        console.log('Page has been visited before');
                        var elementTohide = document.querySelector(".display_none");
                        elementTohide.style.display = "none";
                   } else {
                        console.log('Local Storage is empty when looking for if visited statement');
                        localStorage.setItem("visited", "yes");
                    }
            </script>
            <div class="ui six column centered grid">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="ui fluid input">
                        <input type="text" name="title" id="title" placeholder="Title" value="<?php echo $title;?>">
                    </div>
                    <textarea class="txt_style" name="content" id="content"  placeholder="Type here" rows="5" cols="40"><?php echo $content;?></textarea>
                    <br><br>
                    <div class="ui input">
                        <input type="text" placeholder="E-mail" name="mail" id="mail" value="<?php echo $email;?>">
                    </div>
                    <div class="ui input">
                        <input type="text" placeholder="Name" name="name" id="name" value="<?php echo $name;?>">
                    </div><br><br>
                    <input class="ui big yellow button" type="submit" name="submit" value="Post it!">
                </form>
            </div>
            <?php echo $nameErr;?><br>
            <?php echo $emailErr;?><br>
            <?php echo $titleErr;?><br>
            <?php echo $contentErr;?>
            <script>
                $('.message .close')
                    .on('click', function() {
                        $(this)
                            .closest('.message')
                            .transition('fade');
                    });
            </script>
            <?php 
            /*$titleForm = $_POST['title'];
            $contentForm = $_POST['content'];
            $mailForm = $_POST['mail'];
            $nameForm = $_POST['name'];
            $currentDate ='22/12/1996';
            $color = 'onemoretime '; */
            
            $titleForm = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
            $contentForm = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_STRING);
            $mailForm = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_STRING);
            $nameForm = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $currentDate ='22/12/1996';
            $color = 'onemoretime '; 
            

            require_once('db_con.php');



            $sql = "INSERT INTO notes(title, content, name, mail, color) VALUES (?,?,?,?,?)";
            $stmt = $con->prepare($sql);
            $stmt->bind_param('sssss',$titleForm, $contentForm, $nameForm, $mailForm, $color);

            $stmt->execute();
            $stmt->close();

            mysqli_close($con);
            
            
            ?>
        </div>

</body>

</html>