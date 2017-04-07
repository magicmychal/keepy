<?php
    require_once('db_con.php');

   $sql = "SELECT title, content, name, date, color FROM notes WHERE 1 order by ID asc limit 9";
    
    $result = mysqli_query($con, $sql);
    
    if (mysqli_num_rows($result) > 0) {
         // output data of each row
         echo "<div class='ui equal width grid'>
                <div class='centered column'>";
         while($row = mysqli_fetch_assoc($result)) {
             echo "<div class='ui segment' style='background-color:".$row["color"]."'>
                <h2>".$row["title"]."</h2>
                <p class='content'>".$row["content"]."</p>
                <div class='down'>".$row["name"]."</div>
                <div class='down'>".$row["date"]."</div>
                </div>";
         }
        echo "  </div>
              </div>";
    } else {
         echo "0 results";
    }

    mysqli_close($con);
?>