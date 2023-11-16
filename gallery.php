<!doctype html>
<html lang="en">
  <head>
    <title>Salsoft_Clone</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    



    <style>
      body{
        transition: all 0.5s ease;
      }
      .bg-color{
        background-color: rgb(10, 8, 8);
        color: white;
      }
    </style>
</head>
  <body>
      
<?php

include("header.php");
?>



<!--Content Start -->


<div class="" style="width: 100%; min-height: 40rem; ">
  <img src="./logo.png" alt="" id="gallery_logo">

<div  id="gallery_heading">
  <p class="stagger_text">Gallery</p>
</div>






<button type="button" class="btn active" id="gallery_btn1">14 August</button>
<button type="button" class="btn active" id="gallery_btn2">Employee Appreciation</button>
<button type="button" class="btn active" id="gallery_btn3">Birthday Celebration</button>
<button type="button" class="btn active" id="gallery_btn4">Plantation</button>







<div class="card-group mt-4">
  <div class="col-md-3 card">
    <img src="./gallery_img1.png" class="card-img-top" alt="...">

  </div>

  <div class="card col-md-3">
    <img src="./gallery_img2.png" class="card-img-top" alt="...">
   
  </div>

  <div class="card col-md-3">
    <img src="./gallery_img3.png" class="card-img-top" alt="...">
    
  </div>

  <div class="card col-md-3">
    <img src="./gallery_img4.png" class="card-img-top" alt="...">
    
  </div>
</div>

</div>
<!--Content End -->



<?php
include("footer.php");
?>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



  <script>
    function changeBackground(){
      if(window.scrollY > window.innerHeight / 3){
        document.body.classList.add('bg-color');
      }else{
          document.body.classList.remove('bg-color');
        }
      
    }

    window.addEventListener('scroll',changeBackground);

  </script>

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

  </body>
</html>