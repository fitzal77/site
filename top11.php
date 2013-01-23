<?php

$page_file = "top11.php";
$page_title = "Top 11 @ 11";

require ("functions/main_fns.php");
require ("functions/top11_fns.php");
require ("partials/_header.php");

/*----- CONTENT ------*/
?>
<div class="row">
  <div class="nine columns content">
    <h1>Top 11 @ 11</h1>
    <?php 
      if ($_POST['action']) {
        require ("partials/__top11save.php");
      } else {
        display_message();
        show_top11();
        if (top11_status() != "open"){
          display_form();
        } else {
          echo "<div class=\"information center\">Sorry but voting is currently closed.\n<br>\nCheck back soon to vote for next week's Top 11 @ 11</div>";
        }
      }
    ?>
  </div>
  <div class="three columns"><?php require ("partials/_featured_concerts_and_ads.php") ?></div>
</div> <!-- end of row div -->
<?php require ("partials/_footer.php"); ?>