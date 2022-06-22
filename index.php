<?php
  $server="localhost";
  $username="root";
  $password="";
  $database="zalego";




$conn= mysqli_connect($server, $username,$password,$database);
if( isset($_POST['submitbutton']))
{
  //1.fetch form data
   $firstname = $_POST["firstname"];
   $lastName = $_POST["lastname"];
   $email = $_POST["email"];
   $phone = $_POST["phone"];
   $message = $_POST["message"];
  //2.submit form data
 $insertData = mysqli_query($conn, "INSERT INTO
  contactus(firstname,lastname,email,phonenumber,message)                 
  VALUES ('$firstname','$lastName','$email','$phone','$message')");


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
    <title>bootstrapgridlayout</title>
    <link rel="stylesheet" href="bootstrap-5.2.0/bootstrap-5.2.0-/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
      <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDisplayNavigations" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button> 
            <div class="collapse navbar-collapse" id="navbarDisplayNavigations">
            
               <div class="navbar-nav">
                 <a href="index.php" class="nav-link active">Home</a>
                 <a href="aboutus.php" class="nav-link">About us</a>
                 <a href="#" class="nav-link">contactus</a>
                </div>
            </div>
        </div>
      </nav> 

     

    <main class="p-5 mb-4 bg-primary">
         <h1 style="line-height: 10vh;">Welcome,Michael</h1>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam rerum, doloribus praesentium ullam fugiat deleniti similique sequi necessitatibus blanditiis quo.</p>
         <button class="btn btn-secondary">Learn more</button>
    </main>

    <div class="container">
      <div class="row">
          <div class="col-lg-4">
              <h1>Header 1</h1>
              <p>Lorem, ipsum dolor sit amet consectetur  elit. Eius quam est alias illum eos provident, repellendus ducimus cupiditate ea cumque vero perferendis magnam suscipit rerum exercitationem! Enim aliquid quae nisi atque explicabo, accusantium, quidem dicta illo velit similique quasi assumenda doloribus, autem minima adipisci ducimus optio expedita. Quas, reprehenderit consequatur.</p>
              <button class="btn btn-primary">learn more</button>
          </div>
          <div class="col-lg-4">
            <h1>Header 2</h1>
            <p>Lorem, ipsum dolor sit amet consectetur  elit. Eius quam est alias illum eos provident, repellendus ducimus cupiditate ea cumque vero perferendis magnam suscipit rerum exercitationem! Enim aliquid quae nisi atque explicabo, accusantium, quidem dicta illo velit similique quasi assumenda doloribus, autem minima adipisci ducimus optio expedita. Quas, reprehenderit consequatur.</p>
            <button class="btn btn-primary">learn more</button>
        </div>
        <div class="col-lg-4">
            <h1>Header 3</h1>
            <p>Lorem, ipsum dolor sit amet consectetur  elit. Eius quam est alias illum eos provident, repellendus ducimus cupiditate ea cumque vero perferendis magnam suscipit rerum exercitationem! Enim aliquid quae nisi atque explicabo, accusantium, quidem dicta illo velit similique quasi assumenda doloribus, autem minima adipisci ducimus optio expedita. Quas, reprehenderit consequatur.</p>
            <button class="btn btn-primary">learn more</button>
        </div>
      
      
      </div>

        <!-- contact us page here  -->
          <div class="row pt-5">
            <h1>contactus</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente dolorum doloremque quidem modi fugit, eos voluptatem corporis nemo veniam. Aliquam.</p>
            <form action="index.php" method="POST">
             <div class="row">
                <div class="mb-3 col-lg-6">
              <label for="firstname" class="form-label">first name</label>
              <input type="text" name="firstname" class="form-control" placeholder="Enter your first name">
            </div>
            <div class="mb-3 col-lg-6">
              <label for="lastname" class="form-label">lastname</label>
              <input type="text" name="lastname" class="form-control" placeholder="Enter your Lastname">
            </div>
          </div>

          <div class="row">
            <div class="mb-3 col-lg-6">
          <label for="phonenumber" class="form-label">Phone number</label>
          <input type="text" name="phone" class="form-control" placeholder="Enter your Phone number">
        </div>
        <div class="mb-3 col-lg-6">
          <label for="emailaddress" class="form-label">email address</label>
          <input type="text" name="email" class="form-control" placeholder="Enter your email address">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <label for="message"  class="form-label">your message</label>
          <textarea cols="30" name="message" rows="10" class="form-control">your message</textarea>
        </div>
      </div>
        <br>      
      <button type="submit" name="submitbutton" class="btn btn-primary">send a message</button>
              
       </form>
          </div>



       <!-- End contact us page -->

      <hr>
      <footer>
          &copy; Company 2022
      </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <!-- <script src="bootstrap-5.2.0/bootstrap-5.2.0-/js/bootstrap.bundle.js"></script> -->
    <script src="bootstrap-5.2.0/bootstrap-5.2.0-/js/bootstrap.min.js"></script>
</body>
</html>
