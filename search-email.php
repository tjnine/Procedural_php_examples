<?php
require_once 'includes/settings.php';
include('includes/header.php');
?>
   <!-- Begin page content -->
   <br>
 <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
   </div>           
<br>
<hr>
   <div class="row">
      
       <div class="col-md-8 col-md-offset-1">
            
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">  

       <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
        </div>


          <div class="form-group">
    <input type="submit" class="btn primary-btn" value="submit">
        </div>

    </div>

<div class="row"></div>
  <div class="col-lg-8 col-md-offset-1">
<?php

$email = filter_input(INPUT_GET, 'email');
$username = filter_input(INPUT_GET, 'username');

  if( $_SERVER['REQUEST_METHOD'] == 'GET' && !empty($email) ) {

// "SELECT * FROM articles
//       WHERE (`title` LIKE '%".$query."%') OR (`text` LIKE '%".$query."%')")


$sql = "SELECT * FROM dude WHERE (`email` LIKE :email)";
$stmt = $db->prepare($sql);
$stmt->bindValue(':email','%' . $email . '%' , PDO::PARAM_STR);
// $stmt->bindValue(2, $_GET['fname'], PDO::PARAM_STR);
// $stmt->bindValue(3, $_GET['lname'], PDO::PARAM_STR);
// $stmt->bindValue(2, $username, PDO::PARAM_STR);
// $stmt->bindValue(3, '%' . $email . '%', PDO::PARAM_STR); 
//option + control + [ o r ]
$stmt->execute();

   $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($results as $r) {
      echo "email : {$r['email']}  and username: {$r['username']}<br>";
        }
    }
?>
    

  </div>
<br>
<hr>
    
<?php
include('includes/footer.tmpl.html');
?>

