<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST')  {
    $user = filter_var($_POST['username'],FILTER_SANITIZE_STRING) ;
    $mail = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $num = filter_var($_POST['mobile'] , FILTER_SANITIZE_NUMBER_INT);
    $msg = filter_var($_POST['message'],FILTER_SANITIZE_STRING);
    
   
    $formErors = array();

    if(strlen($user) < 3){
      $formErors[] = 'you can not write username smaller than 3 charcter';
    }
    if(strlen($msg) <= 10){
      $formErors[] = 'you should write unless 10 charcters';
    }
  }  
    
  
?>


<!DOCTYPE  html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--font awosem  -->
    <link rel="stylesheet" href="css/all.min.css">
    <!--css-->
    <link rel="stylesheet" href="css/style.css">
    <!-- googl font -->
   
    <title>Contact</title>
  </head>
  <body>
    <div class="container">
      <h1 class="text-center">Contact me!</h1>

      <form class="contact-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
          <?php  if(! empty($formErors)) { ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          <?php
            foreach($formErors as $error){
              echo $error . '<br>';
            }
           ?>
          </div>
 
          <?php } ?>
        <div class="mb-3">

          <input class="form-control username"
           type="text"
            name="username"
             placeholder="Type Your Name"
             value="<?php if(isset($user)){echo $user;} ?>"
             >
          <i class="fas fa-user"></i>
          <span class="asterix">*</span>
          <div class="alert alert-danger custom-alert " role="alert">
              you can't enter less than 4 charcter!
          </div>

        </div>

        <div class="mb-3">
        
          <input class="form-control mail"
           type="email"
           name="email"
           placeholder="Type Your Email"
           value="<?php if(isset($mail)){echo $mail;} ?>">
          <i class="fas fa-envelope"></i>
          <span class="asterix">*</span>
          <div class="alert alert-danger custom-alert" role="alert">
            you should enter an Email!
          </div>

        </div>    
        
        <input 
         class="form-control"
         type="text"
         name="mobile"
         placeholder="Type Your Phone Number"
         value="<?php if(isset($num)){echo $num;} ?>">
        <i class="fas fa-phone"></i>
        <div
         class="alert alert-danger custom-alert"
         role="alert"
         >
          you should enter a Number       </div>
        <textarea 
         class="form-control msg"
         name="message"
         placeholder="Your message!!"
         ><?php if(isset($msg)){echo $msg;} ?></textarea>
        <div class="alert alert-danger custom-alert" role="alert">
          you should enter unles 10 charcter!
        </div>
        <input type="submit" class="btn btn-success" value="Send Message">
        <i class="fas fa-paper-plane send-icon"></i>
        
      </form>
    </div>

    


    



    <script src="js/main.js"> </script>
    <script src="js/jquery-3.5.1.min.js"> </script>
    <script src="js/bootstrap.min.js"> </script>
    <script src="js/jquery.js"> </script>
  </body>
</html>