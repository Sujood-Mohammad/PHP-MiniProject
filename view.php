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
  background: brown;
  border-color: #545454;
}

.form-control:focus {
  background: brown;
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


<?php
session_start();
for ($i=0; $i < count($_SESSION['pro']); $i++) { 
   $p =$_SESSION['pro'][$i]; 
// echo ' 
// <div class="">
// <img src= " '. $p[2] .'" width ="400px">
// <h1>'.$p[0].'<h1>
// <h2>'.$p[1].'<h2>
// <h3>'.$p[3].'<h3>
 
// '; 

echo '
<div class="card" style = " box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);max-width: 300px;margin: 50px;text-align: center;font-family: arial; display:inline-block;">
  <img src= "'. $p[2] .'" style="width:100%; height: 300px;">
  <h1>'.$p[0].'<h1>
  <p class="price" style = "color: grey;font-size: 22px;">'.$p[1].'</p>
  <p>'.$p[3].'</p>
  
</div>';


}
?>

 <form action="add.php" method="post" style ="margin-left:50px;">
        <button type="submit" class="btn btn-primary" style="background-color: brown;">Add Product</button>
           </form>

<!-- footer -->
<div class="d-flex flex-column h-100" style = "margin-top:50px; ">
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