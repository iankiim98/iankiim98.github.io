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
     <div style="width:100%; overflow:hidden;  "><img class="brand" src="./assets/imgs/brand.png"></div>
<div class="brand_con">
<div><h1 class="big_title">Brand Strategy</h1></div>
<div><p class="paragraph">Building a brand isn't easy, its about balancing your overall business 
goals with your customers' experience. We work with you to form an 
understanding of the mindset, needs and behaviours of your target 
customers, establish the goals and trajectory of your brand and use 
this to define your brand value.</p>
<p class="paragraph">
Our process allows you to develop a clear brand framework that 
succinctly defines who you are, what you do, why you’re different and 
why your customers will care. (people should care)
</p>
</div>
</div>
<footer>
        <?php include('./assets/footer.php'); ?>
    <footer>
    </div>
</body>

</html>