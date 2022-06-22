<?php
  $server="localhost";
  $username="root";
  $password="";
  $database="zalego";




$conn= mysqli_connect($server, $username,$password,$database);
if( isset($_POST['button']))
 {
  //1.fetch form data
  $email = $_POST["email"];
 

   //2.submit form data
 $insertData = mysqli_query($conn, "INSERT INTO
 subscribers(email)                 
 VALUES ('$email')");
 
 if($insertData)
 {
   echo "data submitted successfully";
 }

 else{
  echo "data not submitted";
 }



 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>aboutus</title>
  <link rel="stylesheet" href="bootstrap-5.2.0/bootstrap-5.2.0-/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
   <!-- navigation bar -->
   <!-- <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
    <div class="container-fluid">
        <a href="#" class="navbar-brand">Zalego Academy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDisplayNavigations" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button> 
        <div class="collapse navbar-collapse" id="navbarDisplayNavigations">
        
           <div class="navbar-nav">
             <a href="index.php" class="nav-link ">Home</a>
             <a href="aboutus.php" class="nav-link active">About us</a>
             <a href="#" class="nav-link">contact us</a>
            </div>
        </div>
    </div>
  </nav> -->

<!-- end navigation bar -->
  <main class="p-5 mb-4 bg-light shadow">
    <h1 style="line-height: 10vh;">aboutus</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, tempora. Accusantium fugiat officia tenetur labore at, deleniti voluptatibus nostrum iusto odio earum tempore possimus reiciendis aliquam quod nihil. Id quidem veniam quaerat. Voluptates voluptatum in excepturi possimus quod laboriosam, consequatur omnis ducimus nesciunt, vitae deserunt, iste quidem consectetur repellendus autem!</p>
    
</main>
<div class="container" style="text-align: left;">
  <div class="row">
      <div class="col-lg-6 ">
          <h1>Our Program</h1>
          <p>Lorem, ipsum dolor sit amet consectetur  elit. Eius quam est alias illum eos provident, repellendus ducimus cupiditate ea cumque vero perferendis magnam suscipit rerum exercitationem! Enim aliquid quae nisi atque explicabo, accusantium, quidem dicta illo velit similique quasi assumenda doloribus, autem minima adipisci ducimus optio expedita. Quas, reprehenderit consequatur.</p>
      </div>
      <div class="col-lg-6">
        <img src="images/1.jpig.jfif" style="border-radius: 50px;">
      </div>
    </div> <br>
    <h1>The programs</h1>
    <br><br>
    <div class="row">
      <div class="col-lg-4 mb-3 bg-light shadow" style="text-align: center;">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Skill discovery</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quo aperiam minima maiores optio iste architecto repellat, dolorum quidem ad molestias earum consequatur unde illum.</p>
            <a href="#" class="btn btn-primary">view details</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-3 bg-light shadow" style="text-align: center;">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">upskilling program</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet ad culpa temporibus ipsum! Minus, modi in quaerat unde quis blanditiis officia veniam doloremque illum odit!</p>
            <a href="#" class="btn btn-primary">view details</a>
          </div>
        </div>
      </div>
    <div class="col-lg-4 mb-3 bg-light shadow" style="text-align: center;">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">path finding program</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat quod magnam sed perspiciatis est facere illum. Voluptatum consectetur in, nobis ipsa mollitia illo nesciunt ea?</p>
          <a href="#" class="btn btn-primary">view details</a>
        </div>
      </div>
    </div>
  </div>
  <br><br><br><br>
   <p style="text-align: center; color: grey;">subscribe to get information, latest news about zalego academy</p>
   <br><br><br>
   <div class="row" style="justify-content: center;">
   
        <form action="aboutus.php" method="POST" >
              <div class="mb-3 col-lg-6">
                  <input type="text"  name="email" class="form-control" placeholder="your email address">
              </div>
              <div class="mb-3 col-lg-6">
                  <button class="btn btn-primary"name="button">subscribe</button>
                </div>
          </form>
     </div>
    
  <br><br>
  
  <footer>
    &copy; Company 2022
  </footer>
  </div>




















  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <!-- <script src="bootstrap-5.2.0/bootstrap-5.2.0-/js/bootstrap.bundle.js"></script> -->
    <script src="bootstrap-5.2.0/bootstrap-5.2.0-/js/bootstrap.min.js"></script>
</body>
</html>