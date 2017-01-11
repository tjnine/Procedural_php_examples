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
              <form action="index.php" method="POST">
        <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
        </div>
           <div class="form-group">
    <input type="submit" class="btn primary-btn" value="submit">
    <br>
    <?php
$sql = "SELECT * FROM dude
    ORDER by fname";
     ?>
     <table class="table">
    <tr>
        <th>Name</th>
        <th>Meaning</th>
        <th>Gender</th>
    </tr>
<?php foreach ($db->query($sql) as $row) {?>
              <tr>
                  <td><?php echo $row['fname'];?></td>
                  <td><?php echo $row['lname'];?></td>
                  <td><?php echo $row['email'];?></td>
              </tr>
  <?php }?>
</table>
        </div>
      </form>
      </div>
    </div>
    </div>
<?php
include('includes/footer.tmpl.html');
?>

