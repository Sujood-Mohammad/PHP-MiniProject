<?php
session_start();
ession_unset();
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
   
table{
  background: rgb(215 174 174);
  width: 90%;
}
th{
  background:brown;
  color :white;
}
.text-small {
  font-size: 0.9rem;
}

a {
  color: inherit;
  text-decoration: none;
  transition: all 0.3s;
}

a:hover, a:focus {
  text-decoration: none;
}

.form-control {
  background: rgb(215 174 174);
  border-color: #545454;
}

.form-control:focus {
  background: rgb(236 230 230);
}

footer {
  background: brown;
}
.text-muted{
  color :#f8f9fa!important;
}
  body, html {
    height: 100%;
  }
  .table td, .table th {
    border : 2px solid brown;
  }
  /* .table{
    width: 80%;
  } */
  
    </style>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style=" background-color: brown!important;">
        <a href="" class="navbar-brand" style="font-family:'Hurricane', cursive; font-weight: bold; font-size:larger;">SUJOUDSTORE</a>
       <a href="#sujoud" data-toggle="collapse" class="navbar-toggler">
          <span class="navbar-toggler-icon"></span>
        </a>
        <div id="sujoud" class="collapse navbar-collapse">
        <ul class="nav navbar-nav justify-content-end" style="margin-left:70%;" >
          <li class="nav-item"><a href="http://localhost/sujoudphp/add.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link">About</a></li>
          <li class="nav-item"><a href="http://localhost/sujoudphp/view.php" class="nav-link">View Products</a></li>
        </ul>
       </div>
      </nav>
    </div>
    <!-- new line-->
    <div class="container-fluid">
        <div class="jumbotron" style="background-color:rgb(215 174 174);">
          <h1>Welcome To Our Store</h1>      
          <p>Dear merchant, you are welcome to our store to display your products and earn <br> a lot of money and to reach a larger number of customers </p>
          <button type="button" class="btn btn-info" style="background-color: brown;">Learn More</button>
        </div>

    <!-- new -->

    <div class="container">
      <h2>Add Product</h2>
      <form action="add.php" method="post">
        <div class="form-group">
          <label for="namepro">Name Product :</label>
          <input type="text" class="form-control" id="namepro" name="namepro">
        </div>
        <div class="form-group">
          <label for="des">Product Description :</label>
          <input type="text" class="form-control" id="des" name="Description">
        </div>
        <div class="form-group">
          <label for="pri">Product Price :</label>
          <input type="text" class="form-control" id="pri" name="Price">
        </div>
        <div class="form-group">
          <label for="pic">Product Image :</label>
          <!-- <input type="image" class="form-control" id="pic" name="Picture"> -->
          <input type="url" class="form-control" name="picture" placeholder="Enter URL Image">
        </div>
        <button type="submit" class="btn btn-primary" style="background-color: brown;">Add Product</button>
      </form>
    </div>

<?php
$pro = array();
if(!empty($_POST['namepro'])){
    if(!empty($_POST['Description'])){
        if(!empty($_POST['Price'])){
          if(!empty($_POST['picture'])){
// $img_url = "http://yallabook.com/blog/uploade/files/200531_422549d0c5.jpg";

    if(!isset( $_SESSION['pro'])){
    $_SESSION['pro'] = array() ;
    }
    array_push( $pro , $_POST['namepro']);
    array_push( $pro , $_POST['Description']);
    // array_push( $pro ,$img_url );
    array_push( $pro , $_POST['picture']);
    array_push( $pro , $_POST['Price']);
    array_push($_SESSION['pro'] , $pro );


} } } 
}
?>
<br><br>
  <!-- table -->
   <section>
   <div class="container" >
     <table class="table table-striped">
       <thead>
         <tr>
           <th scope="col">Name</th>
           <th scope="col">Description</th>
           <th scope="col">Price</th>
           <th scope="col">Image</th>
         </tr>
       </thead>
       <tbody>
         <?php
           if(!isset( $_SESSION['pro'])){
            $_SESSION['pro'] = array() ;
            }

        for ($i=0; $i < count($_SESSION['pro']); $i++) { 
         $p =$_SESSION['pro'][$i]; 
         echo "<tr>";
          echo '<td>' . $p[0] . '</td>';
          echo '<td>' . $p[1] . '</td>';
          echo '<td>' . $p[3] . '</td>';
          echo ' <td><img style="width: 150px; height: 150px;" src= " '. $p[2] .'"></td>';
          echo "<tr>";
        }
      ?>
       </tbody>

     </table>
   </div>
 </section>
<div class="container">
<form action="view.php" method="post">
        <button type="submit" class="btn btn-primary" style="background-color: brown;">Veiw Product</button>
           </form>
      </div>
<!-- footer -->
<div class="d-flex flex-column h-100" style = "margin-top:100px; ">
    <footer class="w-100 py-4 flex-shrink-0" style="border: solid 2px black;">
        <div class="container-fluid py-4">
            <div class="row gy-4 gx-5">
                <div class="col-lg-4 col-md-6">
                    <h5 class="h1 text-white" style="font-family:'Hurricane', cursive;">SUJOUDSTORE</h5>
                    <p class="small text-muted">Get more customers and more profits.</p>
                    <p class="small text-muted mb-0">SUJOUDSTORE&copy; 2022 </p>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3">Contact Us</h5>
                    <ul class="list-unstyled text-muted">
                        <li> <p>Address : Irbid.Jordan</p></li>
                        <li><p>Phone :+(962)0778090546</p></li>
                        <li> <p>Email : Sujoudmoh1996@gmail.com</p></li>
                
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3">Quick links</h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="http://localhost/sujoudphp/add.php">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="http://localhost/sujoudphp/view.php">View Prodact</a></li>
                    </ul>
               </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-white mb-3">More Contact</h5>
    
                    <form action="#">
                        <div class="input-group mb-3">
                        <a href="https://ar-ar.facebook.com/"><i class='fab fa-facebook' style='font-size:48px;color:white'></i></a>
                        <a href="https://www.instagram.com/"><i class='fab fa-instagram' style='font-size:48px;color:white; margin-left:15px;'></i></a>
                        <a href="https://github.com/Sujood-Mohammad"><i class='fab fa-github' style='font-size:48px;color:white; margin-left:15px;'></i></a>
                        <a href="https://www.linkedin.com/feed/"><i class='fab fa-linkedin' style='font-size:48px;color:white; margin-left:15px;'></i></a>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>