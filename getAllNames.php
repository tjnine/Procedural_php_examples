<?php
try {
	require_once 'includes/db_connect.php';

	$sql = 'SELECT name,meaning,gender FROM names
    ORDER by name';
	$results = $db->query($sql);
	$all     = $results->fetchAll();

} catch (Exception $e) {
	$error = $e->getMessage();
}
include ("includes/tmpl/header.html");
?>
<h1>PDO: Fetching the Next Row</h1>
<?php if (isset($error)) {
	echo "<p>$error</p>";
}
?>
<table class="table table-striped">
    <tr class="active">
        <th>Name</th>
        <th>Meaning</th>
        <th>Gender</th>
    </tr>
     <!-- while ($row = $results->fetch()) -->
<?php foreach($all as $row) {?>
	<!-- only php's fetch() method can use both column # and name -->
		<tr>
		        <td><?php echo $row[0];?></td>
		        <td><?php echo $row[1];?></td>
		        <td><?php echo $row[2];?></td>
		    </tr>
<?php }?>
</table>
<p>
    <h3>footnotes</h3>
    <ul>
        <li>only php's fetch() method can use both column # and name</li>
        <li>g_select.php demonstrates how to loop over a <b>SELECT</b> query</li>
        <li>g_fecth.php demonstrates how to fetch a result set with the fetch() method</li>
    <li>Bootstrap uses class="table" for default table styling</li>
    <li>BS3 tables has options like class="table table-striped" || class="table table-bordered"</li>
    <li>BS3 also has responsive tables which is used like
    <br>
    <pre>
    div class="table-responsive"
        table class="table"
            tr/tr
            td/td
        /table
    /div
        </pre>
    </li>
    </ul>
</p>

<?php include ("includes/tmpl/footer.html");?>

