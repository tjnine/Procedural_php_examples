<?php 

require_once 'includes/settings.php';
include('includes/header.php');

 ?>

 <!-- Begin page content -->
   <br>
 <div class="jumbotron">
      <div class="container">

           <div class="panel panel-primary">
               <?php 
    $stmt = $db->prepare('SELECT title, body FROM articles');
    $stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
echo "<pre>";
print_r($results);
echo "</pre>";
                ?>

           </div> 
    </div>
</div>


<?php
include('includes/footer.tmpl.html');
?>