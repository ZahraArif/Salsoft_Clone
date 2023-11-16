<?php include("form.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Salsoft_CLone</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  </head>


  <body>
    
  <?php
include("header.php");
    ?>



<!--Content Start-->

<div  style="width: 100%; min-height: 40rem;  ">
  <img src="./logo.png" alt="" id="news_logo">

<div  class="col-md-12 card-group" style=" margin-top: 5%; padding: 5%; padding-left: 10%;">
<div class="col-md-6">
  <p id="contact_h1" class="stagger_text">Contact</p>
  <p id="contact_h2" class="stagger_text">US.</p>

</div>

<div class="col-md-6">
<form action="" method="POST" >

<div class="card-group">
  <select name="drop_con" id="dropmenu" >

    <option value="What can we help you with?">What can we help you with?</option>
    <option value="Becoming a client">Becoming a client</option>
    <option value="Investment">Investment</option>
    <option value="Partnership">Partnership</option>
    <option value="Press enquiry">Press enquiry</option>
    <option value="Careers">Careers</option>
  </select>

  <input type="text" name="name_con" placeholder="Name*" id="name" class="" >

</div>


<div class="card-group mt-2">
  <input type="email" name="email_con"  placeholder="Email*" id="email" >

  <input type="tel" name="phone_con"  placeholder="Phone*" id="phone" >
</div>


  <textarea name="message_con" class="mt-2" placeholder="Message" id="message" cols="30" rows="5"></textarea>
<br>
  <!-- <input type="email" name="" placeholder="email" id="email" class="col-md-6"> -->
  <!-- <button  class="btn" name="sub_con" id="con_btn">SUBMIT</button> -->
  <input type="submit" name="mybutton" class="btn" id="con_btn" value="SUBMIT">
  <!-- <input type="submit"  value="SUBMIT" name="mybutton" class="btn mt-3" id="submit_btn" > -->

</form>
</div>

</div>

<!--Form End-->


<div class="col-md-12" style=" padding: 5%;">
  <div class="card-title" style="font-size: 3rem; font-weight: bold;">WE’D LOVE TO HEAR FROM YOU.</div>
  <div class="card-text" style="font-size: xx-large; font-family:  'Montserrat', sans-serif; font-weight: 600;">Whether you’re curious to learn more about our products and services, or to discuss business and partnership opportunities, or even careers or press—we’re ready to answer any and all questions.</div>
</div>


<!--Para End-->



<div class="col-md-12 card-group mt-4" >

  <div class="col-md-4" >
    <center>
    <div class="" style="border: 1px solid black; width: 15%; height: 3rem; text-align: center; justify-content: center;">
     <p class="X">X</p>
    </div>
    <div class="card-text mt-3"><a href="" id="net">info@salsoft.net</a></div>

  </center>
  </div>


  <div class="col-md-4" >
    <center>
    <div class="" style="border: 1px solid black; width: 15%; height: 3rem; text-align: center; justify-content: center;">
     <p class="X">X</p>
    </div>
    <div class="card-text mt-3" id="net2">+92 2134550354</div>

  </center>
  </div>



  <div class="col-md-4" >
    <center>
    <div class="" style="border: 1px solid black; width: 15%; height: 3rem; text-align: center; justify-content: center;">
     <p class="X">X</p>
    </div>
    <div class="card-text mt-3" id="net3">47 NKCHS, Dar-ul-Aman Society,
      Street-6, 75400, Karachi</div>

  </center>
  </div>

</div>

</div>




<!--Content End-->



    
          

          

          <?php
include("footer.php");
    ?>



                     <script src="https://unpkg.com/scrollreveal"></script>
                     <script>
                       // Function to initialize ScrollReveal
                       function initScrollReveal() {
                         ScrollReveal().reveal('.stagger_text', {
                           delay: 200,  // Adjust the delay according to your preference
                           distance: '50px',
                           origin: 'bottom',
                           easing: 'ease-in-out',
                           reset: true
                         });
                       }
                     
                       // Wait for the Webflow page to be fully loaded
                       $(document).ready(function() {
                         initScrollReveal();
                       });
                     </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php



if(isset($_POST['mybutton']))
{
  $input1 =  $_POST['drop_con'];
  $input2 =  $_POST['name_con'];
  $input3 =  $_POST['email_con'];
  $input4 =  $_POST['phone_con'];
  $input5 =  $_POST['message_con'];
 

// echo $input1.'<br>'.$input2.'<br>'.$input3.'<br>'.$input4.'<br>'.$input5.'<br>';

 $query2 = "Insert into contact_data VALUES ('$input1'  , '$input2' , '$input3' , '$input4' , '$input5' )";

 $data = mysqli_query($conn,$query2);



//  if($data)
//  {
//   echo "<script>alert('data insert into db')</script>";
//  }

//  else{
//   echo "failed";
//  };


};
?>