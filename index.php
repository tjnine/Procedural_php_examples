<?php

require_once 'includes/settings.php';
include('includes/header.php');
ob_start();
?>
   <!-- Begin page content -->
   <br>
 <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-success btn-lg" href="#" role="button">Learn more &raquo;</a></p>

        <br><hr>
         <?php 
          if($_GET['success'] = "yes"){
            echo "<div class=\"text-primary\"> <b>You have upateed the form!</b></div><br>";
          }
         ?>
              <form action="index.php" method="POST">
       
                  <div class="form-group">
    <label for="fname">First Name</label>
    <input type="text" name="fname" class="form-control" id="fname" placeholder="Email">
                  </div>

                  <div class="form-group">
    <label for="lname">Last Name</label>
    <input type="text" name="lname" class="form-control" id="lname" placeholder="Email">
                  </div>

                 <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                  </div>
    <input type="hidden" name= value="<?php echo uniqid(); ?>">
           

    <input type="submit" class="btn btn-primary btn-md" value="submit">
    <br>
    <?php

// $_SESSION['user_id'] = 'admin';

// if(isset($_SESSION['user_id'])){
/**
 * manual PDO post statement
 */

  if(isset($_POST['email']) && $_SERVER['REQUEST_METHOD'] == 'POST'){

  $sql = "INSERT INTO dude (email, fname, lname)
            VALUES (?, ? , ?)";
  $stmt = $db->prepare($sql);
  $stmt->bindParam(1,  $_POST['email'], PDO::PARAM_STR);
  $stmt->bindParam(2, $_POST['fname'], PDO::PARAM_STR);
  $stmt->bindParam(3, $_POST['lname'], PDO::PARAM_STR);
  $stmt->execute();
  header('Location: index.php?success=yes');
exit;
  // }
}

// try{
// $sql = 'SELECT fname FROM dude
//     ORDER by fname';
//   $results = $db->query($sql);
   
// } catch (Exception $e) {
//   $error = $e->getMessage();
// }

// while ($col = $results->fetchColumn(0)) {
                            
//                               echo $col;
                            
// }

     ?>
        </div>
      </form>
      </div>
    </div>
    </div>
<?php
include('includes/footer.tmpl.html');
?>

