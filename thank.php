<?php include("header.php");

?>  



<!doctype html>
<html lang="en">
  <head>
    <title>Salsoft_Clone</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style>
.container-fluid
{
    border:2px solid black;
    height: 30rem;
    background-color:black;
    color:white;

}

.card-title
{
    margin-top:10%;
}

</style>
    <!-- Bootstrap CSS -->
  </head>
  <body>
      

  <div class="container-fluid  ">
    <div class="card-title text-center" >
      <h1>  Thank You <br>
        For Coming🙂</h1>
    </div>
  </div>
  
  </body>
  
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
</html>


<?php

include("footer.php");
?>