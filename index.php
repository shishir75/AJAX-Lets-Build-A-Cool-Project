<?php include 'db.php'; ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Ajax Live Search</title>



  </head>
  <body>

    <div class="container mt-4">
      <div class="row">
        <div class="col-6 offset-3">

          <h2 class="text-center">Search Your Name</h2>

          <input type="text" name="name" id="search" placeholder="your name" class="form-control">

          <h3 class="bg-info mt-5" id="result"></h3>

        </div>
      </div>

      <div class="row">
        <div class="col-6 offset-3">
          <form id="add-name-form" action="add_name.php">
            <div class="form-group">
              <label for="name">Add Name</label>
              <input type="text" name="name" class="form-control" required>
            </div>

             <div class="form-group">
              <input type="submit" value="Add Name" class="btn btn-sm btn-primary">
            </div>

          </form>

          <div class="col-6">
            <div id="name-result"></div>
          </div>

        </div>

      </div>


      <div class="row">
        <div class="col-md-6">
          <table class="table table-striped table-bordered">
            <thead class="text-center">
              <tr>
                <td>ID</td>
                <td>Name</td>
              </tr>
            </thead>
            <tbody id="show-names"></tbody>
          </table>
        </div>

        <div class="col-md-6">
          <p id="feedback" class="text-center"></p>
          <div id="action-container"></div>
        </div>






      </div>








    </div>













    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js""></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="ajax.js"></script>


  </body>
</html>