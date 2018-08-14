<?php

  include("db.php");


  $search = $_POST['search'];


  if(!empty($search)) {

    $query = "SELECT * FROM users WHERE name LIKE '$search%' ";
    $search_query = mysqli_query($conn,$query);
    $count = mysqli_num_rows($search_query);


      if(!$search_query) {
        die('QUERY FAILED' . mysqli_error($connection));
      }

      if($count <= 0) {

       echo "Sorry! This person is not available now";

      } else {

        while($row = mysqli_fetch_array($search_query)) {

          $name = $row['name'];

        ?>

        <ul class='list-unstyled pl-3'>
          <li><?php echo $name. " is available now!"; ?></li>
        </ul>

    <?php  }

      }

  }



?>