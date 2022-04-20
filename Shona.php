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
    <section class="portfolio_container">
    <img  class="portfolio_logo" src="./assets/imgs/portfolio_logos/shona-24.png"> 
    <img  class="portfolio" src="./assets/imgs/portfolio_imgs/shona.jpg">
    </section>
    <div class="portfolio_main">
        <div class="portfolio_content">
            <h1 class="big_tittle">Kentaste</h1>
            <p class="paragraph"><span>Tag:</span> Lorem ipsum dolor sit amet consectetuer adipiscing elit</p>
            <p class="paragraph"><span>Date:</span></p>
            <p class="paragraph"><span>SOW:</span></p>
            <p class="paragraph">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat 
                volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis 
                autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et 
                accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
            <p class="paragraph">Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat 
                volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat 
                volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis 
                autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et 
                accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                <p class="paragraph">Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat 
                    volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat 
                    volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
                    accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                    </p>
        </div>
        <div>
            <?php include("./assets/more_clients_carousel.php"); ?>
        </div>
</body><footer>
        <?php include('./assets/footer.php'); ?>
    <footer>
    </div>
</html>