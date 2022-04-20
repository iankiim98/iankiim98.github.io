<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap.min.css">

<style>
    /* .client_container{
        margin-bottom:5%;
    }
    .client_container .title{
  color:#fe1a0d;
}
.more_clients{
  display: flex;
  justify-content: space-between;
  margin-top: 3vh;
  color:#fff;
}
.more_clients .port_col{
  width: 32%;
  height:fit-content;
  background:black;
}
.more_clients .port_col img{
  width: 100%;
}
.port_col div{
  max-width: 85%;
  margin:auto;
} */

/* Global */
.span3{
  width:30% !important;
}
img { max-width:100%; }

a {
	-webkit-transition: all 150ms ease;
	-moz-transition: all 150ms ease;
	-ms-transition: all 150ms ease;
	-o-transition: all 150ms ease;
	transition: all 150ms ease; 
	}
    a:hover {
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)"; /* IE 8 */
        filter: alpha(opacity=50); /* IE7 */
        opacity: 0.6;
        text-decoration: none;
    }


/* Container */
.container-fluid {
    background: #FFFFFF;
    margin: 42px auto 10px;
    padding: 10px 20px 0;
}


/* Thumbnail Box */
.caption{
  padding:20px;
}
.caption h4 {
    font-size: 1.7rem;
    color: #fff;
    }
    .caption p {
        font-size: 1.2em;
        color: #fff;
        }
        .btn.btn-mini {
            font-size: 0.63rem;
            }


/* Carousel Control */
.control-box {
    text-align: right;
    width: 100%;
    }
    .carousel-control{
        background: #fff;
        display: inline-block;
        font-size: 50px;
        font-weight: 200;
        opacity: 0.5;
        padding: 10px;
        color:black;
        position: static;
        height: fit-content;
        width: fit-content;
        }
        .carousel-control.right, .carousel-control.left{
          background:none;
        }

/* Footer */
.footer {
    margin: auto;
    width: 100%;
    max-width: 960px;
    display: block;
    font-size: 0.69rem;
    }
    .footer, .footer a {
        color: #c9e4f7;
        }
        p.right  { 
            float: right; 
            }


/* Mobile Only */
@media (max-width: 767px) {
    .page-header, .control-box {
    text-align: center;
    } 
}
@media (max-width: 479px) {
    .caption {
    word-break: break-all;
    }
}

.more_clients{
    color:#fe1a0d;
    margin-bottom:50px !important;
}
/* ADD-ON
-------------------------------------------------- */
</style>
<!-- <div style="margin-top:10%;" class="client_container">
            <h1 class="title">More Clients</h1>
        <div class="more_clients">
            <div style="background:#b79d30;" class="port_col"><img src="./assets/imgs/portfolio_imgs/Nuru.jpg"><div><h1>Lorem ipsum dolor sit 
                amet consec</h1><p>Lorem ipsum dolor sit amet, 
                    consectetuer adipiscing elit, sed diam 
                    nonummy </p></div></div>
            <div style="background:#c44f0d;" class="port_col"><img src="./assets/imgs/portfolio_imgs/Nuru.jpg"><div><h1>Lorem ipsum dolor sit 
                amet consec</h1><p>Lorem ipsum dolor sit amet, 
                    consectetuer adipiscing elit, sed diam 
                    nonummy </p></div></div>
            <div style="background:#00c1de;"class="port_col"><img src="./assets/imgs/portfolio_imgs/Nuru.jpg"><div><h1>Lorem ipsum dolor sit 
                amet consec</h1><p>Lorem ipsum dolor sit amet, 
                    consectetuer adipiscing elit, sed diam 
                    nonummy </p></div></div>
        </div>
    </div>
    </div> -->
    <div class="container-fluid">

    <h1 class="more_clients">More clients</h1>
<div class="row-fluid">
<div class="span12">

  
        
    <div class="carousel slide" id="myCarousel">
        <div class="carousel-inner">
            <div class="item active">
                    <ul class="thumbnails">
                        <li style="background:#b79d30;" class="span3">
                        <img src="./assets/imgs/portfolio_imgs/Nuru.jpg" >
                            <div class="caption">
                                <h4>Lorem ipsum dolor sit 
amet consec</h4>
                				<p>Lorem ipsum dolor sit amet, 
consectetuer adipiscing elit, sed diam 
nonummy </p>

                            </div>
                        </li>
                        <li style="background:#c44f0d;" class="span3">
                        <img src="./assets/imgs/portfolio_imgs/Nuru.jpg" >
                            <div class="caption">
                                <h4>Lorem ipsum dolor sit 
amet consec</h4>
                				<p>Lorem ipsum dolor sit amet, 
consectetuer adipiscing elit, sed diam 
nonummy </p>
                        
                            </div>
                        </li>
                        <li style="background:#00c1de;" class="span3">
                        <img src="./assets/imgs/portfolio_imgs/Nuru.jpg" >
                            <div class="caption">
                                <h4>Lorem ipsum dolor sit 
amet consec</h4>
                				<p>Lorem ipsum dolor sit amet, 
consectetuer adipiscing elit, sed diam 
nonummy </p>
                               
                            </div>
                        </li>
                    </ul>
              </div><!-- /Slide1 --> 
            <div class="item">
                    <ul class="thumbnails">
                        <li style="background:#b79d30;" class="span3">
                        <img src="./assets/imgs/portfolio_imgs/Nuru.jpg" >
                            <div class="caption">
                                <h4>Lorem ipsum dolor sit 
amet consec</h4>
                				<p>Lorem ipsum dolor sit amet, 
consectetuer adipiscing elit, sed diam 
nonummy </p>
                      
                            </div>
                        </li>
                        <li style="background:#c44f0d;" class="span3">
                        <img src="./assets/imgs/portfolio_imgs/Nuru.jpg" >
                            <div class="caption">
                                <h4>Lorem ipsum dolor sit 
amet consec</h4>
                				<p>Lorem ipsum dolor sit amet, 
consectetuer adipiscing elit, sed diam 
nonummy </p>
                              
                            </div>
                        </li>
                        <li style="background:#00c1de;" class="span3">
                        <img src="./assets/imgs/portfolio_imgs/Nuru.jpg" >
                            <div class="caption">
                                <h4>Lorem ipsum dolor sit 
amet consec</h4>
                				<p>Lorem ipsum dolor sit amet, 
consectetuer adipiscing elit, sed diam 
nonummy </p>
                                
                            </div>
                        </li>
                      
                    </ul>
              </div><!-- /Slide2 --> 
            <div class="item">
                    <ul class="thumbnails">
                        <li style="background:#b79d30;" class="span3">
                        <img src="./assets/imgs/portfolio_imgs/Nuru.jpg" >
                            <div class="caption">
                                <h4>Lorem ipsum dolor sit 
amet consec</h4>
                				<p>Lorem ipsum dolor sit amet, 
consectetuer adipiscing elit, sed diam 
nonummy </p>
                             
                            </div>
                        </li>
                        <li style="background:#c44f0d;" class="span3">
                        <img src="./assets/imgs/portfolio_imgs/Nuru.jpg" >
                            <div class="caption">
                                <h4>Lorem ipsum dolor sit 
amet consec</h4>
                				<p>Lorem ipsum dolor sit amet, 
consectetuer adipiscing elit, sed diam 
nonummy </p>
                               
                            </div>
                        </li>
                        <li style="background:#00c1de;" class="span3">
                        <img src="./assets/imgs/portfolio_imgs/Nuru.jpg" >
                            <div class="caption">
                                <h4>Lorem ipsum dolor sit 
amet consec</h4>
                				<p>Lorem ipsum dolor sit amet, 
consectetuer adipiscing elit, sed diam 
nonummy </p>
                             
                            </div>
                        </li>
                      
                    </ul>
              </div><!-- /Slide3 --> 
        </div>
        <br>
        <div class="control-box">                            
            <a data-slide="prev" href="#myCarousel" class="carousel-control left">‹</a>
            <a data-slide="next" href="#myCarousel" class="carousel-control right">›</a>
        </div><!-- /.control-box -->   
                              
    </div><!-- /#myCarousel -->
        
</div><!-- /.span12 -->          
</div><!-- /.row --> 
</div><!-- /.container -->

                            
<!-- Delete This -->                        
    <script>
          $(document).ready(function() {
    $('.carousel').carousel({
      interval: 1000
    })
  });
    </script>