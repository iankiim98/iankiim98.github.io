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
  background:url(./assets/imgs/aboutus.png);
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
    <section>
        <div class="content">
            <h1 class="title">About Us</h1>
            <p class="paragraph">LMC is a brand driven creative agency that combines strategy and creativity to create memorable experiences.</p>
            <p class="paragraph">This means that all our solutions begin with a deep focus on 
                    positioning and storytelling and all of our work is structured to 
                    help business owners identify what makes their brand connect 
                    with today’s consumers.</p>
                    <p class="paragraph">It means we are always exploring new ideas and opportunities 
                    for growth, always innovating, and always developing strategies 
                    to ensure that our clients brands are defined and engaged.</p>
        </div>
    </section>
    <footer>
        <?php include('./assets/footer.php'); ?>
    <footer>
    </div>
</body>
</html>