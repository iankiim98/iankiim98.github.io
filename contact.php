<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("./assets/header.php"); ?>
</head>
<body>
    <style>
        @font-face {
  font-family:one;
  src: url(./assets/css/Avenir.ttf) format(truetype);
}
        h1, p, a{
  font-family: 'one' !important;
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
        <?php include("./assets/navbar.php"); ?>
    </header>
    <div style="background:#f5f5f5; padding:4% 0px 4% 0px;">
    <div class="contact_container">
        <h1 style="color:#000;" class="big_title">Contact Us</h1>
        <p style="color:#666666;" class="paragraph">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat 
volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
    </div>
    <div class="contact_content">
        <form class="form" action="" method="POST">
        <div class ="form-group"> 
                 <label class="paragraph">Name</label><br>
                 <input type="text" required>
             </div>
             <div class ="form-group"> 
                 <label class="paragraph">Email</label><br>
                 <input type="email" required>
             </div>
             <div class ="form-group"> 
                 <label class="paragraph">Phone</label><br>
                 <input type="number">
             </div>
             <div class="form-group">
                 <textarea name="" id="" cols="30" rows="10"></textarea>
             </div>
             <div class="form-group">
                 <button class="button" type="submit">SEND MESSAGE</button>
             </div>
        </form>

        <div class="find">
            <p class="paragraph">Find us on</p><br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8635779376314!2d36.75391511602187!3d-1.253466804740784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f19b157a44a87%3A0x24e1f79ab0fbb5bd!2s189%20Kaptagat%20Grove%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1643893636552!5m2!1sen!2ske" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>

    </div>
</div>
      <footer>
        <?php include('./assets/footer.php'); ?>
    <footer>
    </div>
</body>
</html>