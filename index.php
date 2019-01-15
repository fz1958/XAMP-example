

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="XAMP warm-up">
    <meta name="author" content="Carlo Martinez">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Papers</title>

	 
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
    <!-- CSS -->
    <style>
    .hide{;
	visibility:hidden;		  
		}
    </style>
  </head>

  <body>
<?php
// define variables and set them to empty values
$title = $description = "";

?>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal">Wayne State University</h5>
	  </div>

    <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4" style="padding-bottom: 10px;">Todo list</h1>
		<div class="container mx-auto">
  <div class="row" style="padding-bottom: 10px;">
    <div class="col">  
      <!-- Button 1 -->
		<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal">
  Add a todo item
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add a todo item</h5>
      </div>
      <div class="modal-body">
        <div class="container">
			<!-- start of content -->

      <div class="row">
        <div class="col">
          <h4 class="mb-3">To-do</h4>
          <form action="validate.php" novalidate="" method="post">
            <div class="row">
              <div class="col">
                <label for="lastName">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Title" value="<?php echo $title;?>"required="">
                <div class="invalid-feedback">
                  Valid title needed
                </div>
              </div>
            </div>


            <div class="input-group">
  				<div class="input-group-prepend">
    				<span class="input-group-text">Description</span>
				</div>
				<textarea class="form-control" name="description" value="<?php echo $description;?>" aria-label="With textarea"></textarea>
			</div>

           
            <button class="btn btn-primary btn-lg btn-block" type="submit">Save Todo-item</button>
          </form>
        </div>
      </div>

    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
		<!-- End of Modal-->

		

	  </div></div>
		</div></div>
  <table class="table">
  <thead>
    <tr>
	  <th scope="col">Delete</th>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>

    </tr>
  </thead>
     <tr>
  <tbody>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM list";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
        //echo "id: " . $row["id"]. " - Title: " . $row["title"]. " |Description" . $row["description"]. "<br>";
		echo "<td>
   <form action='delete.php' method='post'>
   <input type='hidden' name='wow' value='d'>
   <button class='btn btn-danger' name='id' value='".$row['id']."' type='submit'> Delete</button>
   </form>
	</div>
   </td>
   	   <td>".$row['id']."</td>
       <td>".$row['title']."</td>
       <td>".$row['description']."</td>
       </tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 
</tbody>
   	</table>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
  </body>
</html>
