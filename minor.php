<?php
include "header.php";
include "branner.php";
include "nav.php";
include "connect.php";
?>

<div class = "container mt-5">
        <h2><center>minor</center></h2>
        <table class = "table table-bordered">
            <tr>
                <th>minor_id</th>
                <th>minor_name</th>
                <th>depart_name</th>
            </tr>
    <?php
    $sql = "SELECT * FROM minor_depart";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        
        ?>
            <tr>
                <td><?php echo $row['minor_id'] ?></td>
                <td><?php echo $row['minor_name'] ?></td>
                <td><?php echo $row['depart_name'] ?></td>
            </tr>
        <?php

      }
    } else {
      echo "0 results";
    }
    
    mysqli_close($conn);
    ?>
        </table>

  </div>
</div>
<?php
include ("footer.php");
?>