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
        html, body{
            overflow-y:hidden !important;
        }
#one{background-image:url('./assets/imgs/clients/Kentaste.JPG')}
#two{background-image:url('./assets/imgs/clients/Soul-coal.JPG')}
#three{background-image:url('./assets/imgs/clients/Vital.JPG')}
#four{background-image:url('./assets/imgs/clients/Blowplast.JPG')}
#five{background-image:url('./assets/imgs/clients/CF.JPG')}
#six{background-image:url('./assets/imgs/clients/Mombasa-invest.JPG')}
#seven{background-image:url('./assets/imgs/clients/Shona.JPG')}
#eight{background-image:url('./assets/imgs/clients/Asal.JPG')}
#nine{background-image:url('./assets/imgs/clients/Amana.JPG')}
#ten{background-image:url('./assets/imgs/clients/Wangari-Maathai.JPG')}
#elleven{background-image:url('./assets/imgs/clients/Wetu.JPG')}
#twelve{background-image:url('./assets/imgs/clients/Great-Lakes.JPG')}
#thirteen{background-image:url('./assets/imgs/clients/Modern-Ways.JPG')}
#fourteen{background-image:url('./assets/imgs/clients/Easy-Solar.JPG')}
#fifteen{background-image:url('./assets/imgs/clients/Karibu-Homes.JPG')}
#sixteen{background-image:url('./assets/imgs/clients/AGI.JPG')}
#seventeen{background-image:url('./assets/imgs/clients/lmc.JPG')}
#eighteen{background-image:url('./assets/imgs/clients/oakar.JPG')}
#nineteen{background-image:url('./assets/imgs/clients/Ride-Africa.JPG')}
#twenty{background-image:url('./assets/imgs/clients/Viability.JPG')}
#twentyone{background-image:url('./assets/imgs/clients/Mille-collines.JPG')}
#twentytwo{background-image:url('./assets/imgs/clients/Moringa.JPG')}
#twentythree{background-image:url('./assets/imgs/clients/Sirimon-.JPG')}
#twentyfour{background-image:url('./assets/imgs/clients/GCS.JPG')}
#twentyfive{background-image:url('./assets/imgs/clients/Stratlink.JPG')}
#twentysix{background-image:url('./assets/imgs/clients/Maisha-.JPG')}
#twentyseven{background-image:url('./assets/imgs/clients/Blog.JPG')}
.mobile_body{
    display: none !important;
}
@media screen and (max-width:820px) {
    .clients{
        display:none !important;
    }
    .mobile_body{
       display: contents !important;
       width:100%;
       overflow:auto;
   }
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
<header style="display:block;">
        <?php include("./assets/navbar.php"); ?>
    </header>
    <div class="clientss" id="body">
    <div class="clients" >
<div class="row" >
    <div class="rec" id="one"><a href="kentaste.php"><div class="content-overlay"><div class="content-details fadeIn-bottom">
        <h3 class="content-title">Kentaste</h3>
        <p class="content-text">This is a short description</p>
      </div></div></a></div>
    <div class="squ" id="two"><a href="Soul.php"><div class="content-overlay"><div class="content-details fadeIn-bottom">
        <h3 class="content-title">Soul Coals</h3>
        <p class="content-text">This is a short description</p>
      </div></div></a></div>
    <div class="squ" id="three"><a href="vital.php"><div class="content-overlay"><div class="content-details fadeIn-bottom">
        <h3 class="content-title">Vital</h3>
        <p class="content-text">This is a short description</p>
      </div></div></a></div>
    <div class="rec" id="four"><a href="blowplast.php"><div class="content-overlay"><div class="content-details fadeIn-bottom">
        <h3 class="content-title">Blowplast</h3>
        <p class="content-text">This is a short description</p>
      </div></div></a></div>
    <div class="squ" id="five"><a href="CF.php"><div class="content-overlay"><div class="content-details fadeIn-bottom">
        <h3 class="content-title">CF</h3>
        <p class="content-text">This is a short description</p>
      </div></div></a></div>
    <div class="squ" id="six"><a href="Mombasa invest.php"><div class="content-overlay"><div class="content-details fadeIn-bottom">
        <h3 class="content-title">Mombasa Invest</h3>
        <p class="content-text">This is a short description</p>
      </div></div></a></div>
    <div class="rec" id="seven"><a href="Shona.php"><div class="content-overlay"><div class="content-details fadeIn-bottom">
        <h3 class="content-title">Shona</h3>
        <p class="content-text">This is a short description</p>
      </div></div></a></div>
    <div class="squ" id="eight"><a href="Asal.php"><div class="content-overlay"><div class="content-details fadeIn-bottom">
        <h3 class="content-title">Asal</h3>
        <p class="content-text">This is a short description</p>
      </div></div></a></div>
    <div class="squ" id="nine"><a href="Amana.php"><div class="content-overlay"><div class="content-details fadeIn-bottom">
        <h3 class="content-title">Amana</h3>
        <p class="content-text">This is a short description</p>
      </div></div></a></div>
</div>
<div class="row">
    <div class="squ" id="ten"><a href="Wangari Maathai.php"><div class="content-overlay"><div class="content-details fadeIn-bottom">
        <h3 class="content-title">Wangari Maathai</h3>
        <p class="content-text">This is a short description</p>
      </div></div></a></div>
    <div class="rec" id="elleven"><a href="Wetu.php"><div class="content-overlay"><div class="content-details fadeIn-bottom">
        <h3 class="content-title">Wetu</h3>
        <p class="content-text">This is a short description</p>
      </div></div></a></div>
    <div class="squ" id="twelve"><a href="Great Lakes.php"><div class="content-overlay"><div class="content-details fadeIn-bottom">
        <h3 class="content-title">Great Lakes</h3>
        <p class="content-text">This is a short description</p>
      </div></div></a></div>
    <div class="squ" id="thirteen"><a href="Modern Ways.php "><div class="content-overlay"><div class="content-details fadeIn-bottom">
        <h3 class="content-title">Modern Ways</h3>
        <p class="content-text">This is a short description</p>
      </div></div></a></div>
    <div class="rec" id="fourteen"><a href="Easy Solar.php"><div class="content-overlay"><div class="content-details fadeIn-bottom">
        <h3 class="content-title">Easy Solar</h3>
        <p class="content-text">This is a short description</p>
      </div></div></a></div>
    <div class="squ" id="fifteen"><a href="Karibu Homes.php"><div class="content-overlay"><div class="content-details fadeIn-bottom">
        <h3 class="content-title">Karibu Homes</h3>
        <p class="content-text">This is a short description</p>
      </div></div></a></div>
    <div class="squ" id="sixteen"><a href="AGI.php"><div class="content-overlay"><div class="content-details fadeIn-bottom">
        <h3 class="content-title">AGI</h3>
        <p class="content-text">This is a short description</p>
      </div></div></a></div>
    <div class="rec" id="seventeen"><a href="index.php"><div class="content-overlay"><div class="content-details fadeIn-bottom">
        <h3 class="content-title">LMC</h3>
        <p class="content-text">This is a short description</p>
      </div></div></a></div>
    <div class="squ" id="eighteen"><a href="Oakar Service"><div class="content-overlay"><div class="content-details fadeIn-bottom">
        <h3 class="content-title">Oakar Services</h3>
        <p class="content-text">This is a short description</p>
      </div></div></a></div>
</div>
<div class="row">
    <div class="rec" id="nineteen"><a href="Ride africa.php"><div class="content-overlay"><div class="content-details fadeIn-bottom">
        <h3 class="content-title">Ride Africe</h3>
        <p class="content-text">This is a short description</p>
      </div></div></a></div>
    <div class="squ" id="twenty"><a href="Viability.php"><div class="content-overlay"><div class="content-details fadeIn-bottom">
        <h3 class="content-title">Viability</h3>
        <p class="content-text">This is a short description</p>
      </div></div></a></div>
    <div class="squ" id="twentyone"><a href="Mille Collines.php"><div class="content-overlay"><div class="content-details fadeIn-bottom">
        <h3 class="content-title">Mille Collines</h3>
        <p class="content-text">This is a short description</p>
      </div></div></a></div>
    <div class="rec" id="twentytwo"><a href="Moringa.php"><div class="content-overlay"><div class="content-details fadeIn-bottom">
        <h3 class="content-title">Moringa</h3>
        <p class="content-text">This is a short description</p>
      </div></div></a></div>
    <div class="squ" id="twentythree"><a href="Sirimon.php"><div class="content-overlay"><div class="content-details fadeIn-bottom">
        <h3 class="content-title">Sirimon</h3>
        <p class="content-text">This is a short description</p>
      </div></div></a></div>
    <div class="squ" id="twentyfour"><a href="GCS.php"><div class="content-overlay"><div class="content-details fadeIn-bottom">
        <h3 class="content-title">GCS</h3>
        <p class="content-text">This is a short description</p>
      </div></div></a></div>
    <div class="rec" id="twentyfive"><a href="Stratlink.php"><div class="content-overlay"><div class="content-details fadeIn-bottom">
        <h3 class="content-title">Stratlink</h3>
        <p class="content-text">This is a short description</p>
      </div></div></a></div>
    <div class="squ" id="twentysix"><a href="maisha.php"><div class="content-overlay"><div class="content-details fadeIn-bottom">
        <h3 class="content-title">Maisha</h3>
        <p class="content-text">This is a short description</p>
      </div></div></a></div>
    <div class="squ" id="twentyseven"><a href="#"><div class="content-overlay"><div class="content-details fadeIn-bottom">
        <h3 class="content-title">Blog</h3>
        <p class="content-text">This is a short description</p>
      </div></div></a></div>
</div>
    </div>
</div>
    <div class="mobile_body">
      <div>
      <a href="kentaste.html"><div class="grid-item single"><img src="./assets/imgs/clients/Kentaste.jpg"></div></a>
      <div class="grid-item double" style="display:flex; margin:2px;"><div><img src="./assets/imgs/clients/Soul-coal.jpg"></div><div><img src="./assets/imgs/clients/Amana.jpg"></div></div>
      <div class="grid-item single"><img src="./assets/imgs/clients/Vital.jpg"></div>
      <div class="grid-item double" style="display:flex; margin:2px;"><div><img src="./assets/imgs/clients/Maisha-.jpg"></div><div><img src="./assets/imgs/clients/Modern-Ways.jpg"></div></div>
      <div class="grid-item single"><img src="./assets/imgs/clients/Blowplast.jpg"></div>
      <div class="grid-item double" style="display:flex; margin:2px;"><div><img src="./assets/imgs/clients/Great-Lakes.jpg"></div><div><img src="./assets/imgs/clients/Sirimon-.jpg"></div></div>
      <div class="grid-item single"><img src="./assets/imgs/clients/Easy-Solar.jpg"></div>
      <div class="grid-item single"><img src="./assets/imgs/clients/lmc.jpg"></div>
      <div class="grid-item double" style="display:flex; margin:2px;"><div><img src="./assets/imgs/clients/AGI.jpg"></div><div><img src="./assets/imgs/clients/Asal.jpg"></div></div>
      <div class="grid-item single"><img src="./assets/imgs/clients/Wangari-Maathai.jpg"></div>
      <div class="grid-item double" style="display:flex; margin:2px;"><div><img src="./assets/imgs/clients/oakar.jpg"></div><div><img src="./assets/imgs/clients/Mille-collines.jpg"></div></div>
      <div class="grid-item single"><img src="./assets/imgs/clients/Ride-Africa.jpg"></div>
      <div class="grid-item single"><img src="./assets/imgs/clients/Wetu.jpg"></div>
      <div class="grid-item double" style="display:flex; margin:2px;"><div><img src="./assets/imgs/clients/Viability.jpg"></div><div><img src="./assets/imgs/clients/Mombasa-Invest.jpg"></div></div>
      <div class="grid-item double" style="display:flex; margin:2px;"><div><img src="./assets/imgs/clients/Blog.jpg"></div><div><img src="./assets/imgs/clients/CF.jpg"></div></div>
      <div class="grid-item single"><img src="./assets/imgs/clients/Moringa.jpg"></div>
      <div class="grid-item double" style="display:flex; margin:2px;"><div><img src="./assets/imgs/clients/GCS.jpg"></div><div><img src="./assets/imgs/clients/Karibu-Homes.jpg"></div></div>
      <div class="grid-item single"><img src="./assets/imgs/clients/Shona.jpg"></div>
      <div class="grid-item single"><img src="./assets/imgs/clients/Stratlink.jpg"></div>
  </div>
</div>
  </div>
<footer>
        <?php include('./assets/footer.php'); ?>
    <footer>
    </div>
</body>
<script>
   var item = document.getElementById("body");
   
   window.addEventListener("wheel", function (e) {
     if (e.deltaY > 0) item.scrollLeft += 100;
     else item.scrollLeft -= 100;
   });
   </script>
   <script>
      $(window).on('resize',function(){
         var self=$('#ur_id');
         self.height(slef.width() * (1080/1920))
      })
   </script>


<script>
$(function() {
  // Masonry Grid
  $('.grid').masonry({
    itemSelector: '.grid-item',
    columnWidth: 180,
    fitWidth: true, // When enabled, you can center the container with CSS.
    gutter: 10
  });

  // Loading Animation
  $('.grid-item').each(function(i) {
    setTimeout(function() {
      $('.grid-item').eq(i).addClass('is-visible');
    }, 200 * i);
  });

  // Fancybox
  $('.fancybox').fancybox({
    helpers: {
      overlay: { locked: false }
    }
  });
});

</script>
</html>