<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Add tour package</title>
  </head>
  <body>
      
      
      <div class="container mt-3 mb-4 p-2 shadow bg-white">
          <form action="crud.php" method="POST">
              
                  <div class="form-group">
                      <input type="text" name="Tourname" class="form-control" id="Tour name" placeholder="Tour name">
                  </div>
                      <div class="form-group">
                          <input type="text" name="Days" class="form-control" id="Days" placeholder="Days">
                      </div>
                      <div class="form=group">
                          <input type="text" name="Price" class="form-control" id="Price" placeholder="Price">
                          </div>
                        <br>
                      <div class="form-group">
                        <textarea name="description" class="form-control" id="description" placeholder="description"></textarea>
                        </div>
                          <div class="form-group">
                          <button type="submit" name="save" class="btn btn-info">Save</button>
                          </div>
                          
                      
                 
              
          </form>
      </div>
      
      <?php require_once("crud.php"); ?>
      
      <div class="container">
      <?php if(isset($_SESSION['msg'])): ?>
          <div class="<?= $_SESSION['alert']; ?>">
              <?= $_SESSION['msg'];
              unset($_SESSION['msg']);
              ?>
              
      </div>
          <?php endif;
          ?>
          
          <table class="table">
          <thead>
              <tr>
              <th>ID</th>
               <th>Tour Name</th>
               <th>Days</th>
               <th>Price</th>
               <th>Description</th>
               <th>Action</th>
              </tr>
              </thead>
              <tbody>
                  <form action="crud.php" method="POST">
              <?php
                  #coding for display user's data
                  $sQuery = "SELECT * FROM packages LIMIT 50";
                  $result = $conn-> query($sQuery);
                      
                  $x=1;
                  
                  #code for edit button
                  
                  while($row = $result->fetch_assoc()): ?>
                  
                  <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['tourname']; ?></td>
                  <td><?php echo $row['days']; ?></td>
                  <td><?php echo $row['price']; ?></td>
                  <td><?php echo $row['description']; ?></td>
                  <td>
                      <button type ="submit" name ="delete" value="<?= $row['id']?>" class="btn btn-danger">Delete</button>
                      <button type="submit" name="edit" value="<?= $x;$x++;?>" class="btn btn-primary">Edit</button>
                      </td>
                  </tr>
                  <?php endwhile;?>
                      </form>
              </tbody>
          </table>
      </div>
     
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
      $(document).ready(function(){
                        setTimeout(function(){
                            $(".alert").remove();
                        },3000);
         
       $(".btn-primary").click(funtion(){
                               $(".table").find('tr').eq(this.value).each(function(){
                               $("#tourname").val($(this).find('td').eq(1).text());
                               $("#days").val($(this).find('td').eq(1).text());
                               $("#price").val($(this).find('td').eq(1).text());
                               $("#description").val($(this).find('td').eq(1).text());
           
                               $(".btn-info").val($(this).find('td').eq(0).text());
                               $(".btn-info"). attr("name","edit");
       });
                               });
        
      </script>
       
  </body>
</html>