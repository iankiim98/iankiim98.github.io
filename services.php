<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("assets/header.php"); ?>
</head>
<body>
<style>
    section{
  background:url(./assets/imgs/service.JPG);
}
#loader{
  position:fixed;
  width:100%;
  height:100vh;
  z-index:999999;
  overflow: visible;
  background:#fff url('./assets/imgs/loader.gif') no-repeat center center;
  transition:.8s ease;
}
</style>
<div id="loader"></div>
<div class="contentt">
<header>
        <?php include("assets/navbar.php"); ?>
    </header>
    <section id="about">
        <div class="content">
            <h1 class="title">About Us</h1>
            <p class="paragraph">“Your brand is the environment in which the 
world will experience what you have to offer”</p>
            <p class="paragraph">No two ideas are alike and no two brands are 
alike, over the last 8 years we’ve worked with 
over 80 companies and organisations across 
Africa to provide the focus and direction and 
spark required to create enduring brands.</p><br>
        </div>
    </section>
    <div class="container">
        <h1 class="big_title">Services</h1>
        <hr>
     <div class="inner_container">
         <div>
             <h1 class="title" id="title">Brand Development</h1>
             <a class="inner_container_tag" href="#"><p>Brand Strategy</p></a>
             <!-- <a class="inner_container_tag" style="margin-top:-20%;" href="#"><p>Design</p></a> -->
         </div>
         <div>
             <h1 class="title" id="title">Marketing</h1>
             <a class="inner_container_tag" href="#"><p>Campaign development</a></p>
             <a class="inner_container_tag" href="#"><p>Communication & Content</a></p>
             <a class="inner_container_tag" href="#"><p>Production</a></p>
         </div>
     </div>   
    </div>
    <footer>
        <?php include('./assets/footer.php'); ?>
    <footer>
    </div>
</body>
</html>