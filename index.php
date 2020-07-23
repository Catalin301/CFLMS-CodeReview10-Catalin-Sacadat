<?php

require_once("./component.php");
require_once("./operation.php");



?>


<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>Code-Review-10</title>
  </head>
  <body>
    <main>
      <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Book Store</h1>

        <div class="d-flex justify-content-center ">
          <form action="" method="post" class="w-50" >
            <div class="pt-2">
              <?php inputElement("<i class='fas fa-id-badge'></i>","ID","Media_ID",setID());?>
            </div>
            <div class="pt-2">
              <?php inputElement("<i class='fas fa-book'></i>","Title","title","");?>
            </div>
            <div class="pt-2">
              <?php inputElement("<i class='fas fa-image'></i>","Image","image","");?>
            </div>
            <div class="pt-2">
              <?php inputElement("<i class='fas fa-code'></i>","ISBN","ISBN","");?>
            </div>
            <div class="pt-2">
              <?php inputElement("<i class='fas fa-align-justify'></i>","short_description","short_description","");?>
            </div>
         
            <div class="row pt-2">
              <div class="col">
                <?php inputElement("<i class='fas fa-user-secret'></i>","Author","author","");?>
              </div>
              <div class="col">
                <?php inputElement("<i class='fas fa-users'></i>","Publisher","publisher","");?>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <?php inputElement("<i class='far fa-calendar-alt'></i>","publish_date","publish_date","");?>
              </div>
              <div class="col">
                <?php inputElement("<i class='fab fa-old-republic'></i>","Type","type","");?>
              </div>
            </div>

            <div class="d-flex justify-content-center">

              <?php buttonElement("btn-create","btn btn-success","<i class='fas fa-plus'></i>","create","data-toggle='tooltip' data-placement='bottom' title='Create' "); ?>

              <?php buttonElement("btn-read","btn btn-primary","<i class='fas fa-sync'></i>","read","data-toggle='tooltip' data-placement='bottom' title='Read' "); ?>

              <?php buttonElement("btn-update","btn btn-ligth border","<i class='fas fa-pen-alt'></i>","update","data-toggle='tooltip' data-placement='bottom' title='Update' "); ?>

              <?php buttonElement("btn-delete","btn btn-danger","<i class='fas fa-trash-alt'></i>","delete","data-toggle='tooltip' data-placement='bottom' title='Delete' "); ?>
              <!--<?php /*deleteBtn()*/;?>-->
            </div>
          </form>
        </div>

        <div class="d-flex justify-content-center table-data">
          <table class="table table-striped table-dark">
            <thead class="thead-dark">
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Image</th>
                <th>ISBN</th>
                <th>short_description</th>
                <th>Author</th>
                <th>Publisher</th>
                <th>publish_date</th>
                <th>Type</th>
                <th>Edit</th>
              </tr>
            </thead>
            <tbody id="tbody">
          <?php
          
          if(isset($_POST['read'])){
                $result=getData();

              if($result){
                while($row=mysqli_fetch_assoc($result)){?>

              <tr>
                <td data-id="<?php echo $row['Media_ID'];?>"><?php echo $row['Media_ID'];?></td>
                <td data-id="<?php echo $row['Media_ID'];?>"><?php echo $row['title'];?></td>
                <td data-id="<?php echo $row['Media_ID'];?>"><img src="<?php echo $row['image'];?>"></td>
                <td data-id="<?php echo $row['Media_ID'];?>"><?php echo $row['ISBN'];?></td>
                <td data-id="<?php echo $row['Media_ID'];?>"><?php echo $row['short_description'];?></td>
                <td data-id="<?php echo $row['Media_ID'];?>"><?php echo $row['author'];?></td>
                <td data-id="<?php echo $row['Media_ID'];?>"><?php echo $row['publisher'];?></td>
                <td data-id="<?php echo $row['Media_ID'];?>"><?php echo $row['publish_date'];?></td>
                <td data-id="<?php echo $row['Media_ID'];?>"><?php echo $row['type'];?></td>
                <td><i class="fas fa-edit btnedit" data-id="<?php echo $row['Media_ID'];?>"></i></td>
              </tr>


            <?php
                }
              }
            }

          ?>
            </tbody>
          </table>
        </div>

      </div>
    </main>



    

 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="./main.js"></script>

  </body>
</html>