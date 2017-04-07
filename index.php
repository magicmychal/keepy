<!doctype html>
<html>
<!-- NIE OCENIAJ NAS PO KODZIE, OKEJ ZIĄĄĄĄ? -->
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
    require_once 'php/form.php';
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
            <i class="big write square icon activeicon"></i>
            <a href="posted.php"><i class="big sticky note icon"></i></a>
        </span>
        </div>
        
        <div class="ui container bodystyle form">
            <script>
                $(document).ready(function () {

                    $('.ui.accordion').accordion('refresh');
                });

            </script>
            <div class="ui floating message display_none">
                    <div class="header">
                    Here for the first time? YOU WILL SEE THIS ONLY ONCE
                    </div>
                    <p>Keepy is a public space to share your notes! Why? Maybe is you're a Russian agent and you want to send a secret not so secret code you'll find this useful. <br>
                    Every field is required. Fill them all and smash the button below! <b>Enjoy!</b></p>
                </div>
            <div class="ui floating message display_block">
                    <i class='close icon' data-vivaldi-spatnav-clickable='1'></i>
                    <div class="header">
                    Welcome back ;)
                    </div>
                    <p>Ready to share another story?<br>
                        You arleady know the rules <br>
                        <b>Enjoy!</b></p>
                </div><br>
            <script>
                   if (localStorage.getItem('visited') == 'yes') {
                        console.log('Page has been visited before');
                        var elementTohide = document.querySelector(".display_none");
                        elementTohide.style.display = "none";
                       var elementToshow = document.querySelector(".display_block");
                       elementToshow.style.display = "block";
                   } else {
                        console.log('Local Storage is empty when looking for if visited statement');
                        localStorage.setItem("visited", "yes");
                    }
            </script>
            <div class="ui accordion">
                    <div class="title">
                        <i class="dropdown icon"></i>
                        Add a note
                    </div>

                    <div class="content">
                        <div class="ui six column centered grid">
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <div class="ui fluid input">
                                <input type="text" name="title" id="title" placeholder="Title" value="<?php echo $title;?>">
                            </div>
                            <textarea class="txt_style" name="content" id="content"  placeholder="Type here" rows="5" cols="40"><?php echo $content;?></textarea>
                            <br><br>
                            <div class="ui input popup_info">
                                <input type="text" placeholder="E-mail" name="mail" id="mail" value="<?php echo $email;?>" data-tooltip="Add users to your feed" data-position="top right">
                            </div>
                            <div class="ui input">
                                <input type="text" placeholder="Name" name="name" id="name" value="<?php echo $name;?>">
                            </div><br><br>
                            <a href="posted.php"><input class="ui big yellow button" type="submit" name="submit" value="Post it!"></a>
                        </form>
                    </div>
                    </div>
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
               $('.popup_info input')
                  .popup({
                    on: 'focus'
                  })
                ;
            </script>
            <?php 
            require_once('php/insert.php');
            ?>
        </div>
        <div class="ui container output">
            <?php 
            require_once('php/select.php');
            ?>
        </div>
</body>

</html>