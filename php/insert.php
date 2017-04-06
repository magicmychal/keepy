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
            
            // code for random colors
             $colors = array();
    
           array_push($colors, "#80D8FF"); //blueish
           array_push($colors, "#FFD180"); //redish
           array_push($colors, "#FFFF8D"); //yellowish
           array_push($colors, "#CFD8DC"); //greyish
           array_push($colors, "#CCFF90"); //greenish
    
            
            $random_color = rand(0,4);
            print $random_color."<br>";
            $selectedcolor = $colors[$random_color];
            print $selectedcolor;

            require_once('db_con.php');



            $sql = "INSERT INTO notes(title, content, name, mail, color) VALUES (?,?,?,?,?)";
            $stmt = $con->prepare($sql);
            $stmt->bind_param('sssss',$titleForm, $contentForm, $nameForm, $mailForm, $selectedcolor);

            $stmt->execute();
            $stmt->close();

            mysqli_close($con);
            
            
            ?>