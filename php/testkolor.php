<?php
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

?>