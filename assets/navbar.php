<!-- navigation bar -->
<style>
     a{
    text-decoration: none;
    font-family:"one";
}
.nav-list {
    display: block;
  }
  
  .nav-list {
    background: none;
    position: relative;
    width: 100%;      
    z-index: 1000;
  }
  .nav-list div{
      width:100%;
      text-align: center;
      margin:auto;
  }
  .nav-list div a{
      padding:14px;
      display: inline-block;
      color: #1c1e3e;
      text-decoration: none;
      transition: .8s ease;
      font-weight:700;
      text-decoration: none;
      font-family:'one' !important;
  }
.nav-list div a:hover{
      color:red;
  }
  #nav_list {
    width: 100%;
    cursor: pointer;
    height: 50px;
    line-height: 70px;
    position: fixed;
    top: 0px;
    Z-index:9999;
    display: none;
    overflow: hidden !important;
  }
  #nav_list:hover{
    color: red;
  }
  .nav-list--active {
    color: blue;
  }
  @media screen and (max-width: 820px) {
    #nav_list {
      display: block;
      background:#fff;
      position:fixed;
    }
    .nav-list {
      display: none;
       top: 50px;
       background:#1c1e3e;
       position: fixed;
    }
    .body{
        margin-top:5vh;
    }
    .nav-list div{
        width: 100%;
        text-align: left;
    }
    .nav-list div .logo{
        display: none;
    }
     .nav-list div a {
        display: block;
        color:#fff;
    }
    .nav-list div a::after{
        display: block;
        content:'';
        width:20%;
        padding:20px auto;
        height:2px;
        background:#fff;
        opacity: .5;
    }
  }
 
  @media screen and (min-width:821px) {
    .nav-list { display:block !important; }
  }
</style>
<script src="./assets/nav.js"></script>
<nav class="nav-list">
    <div>
    <a href="about-us.php">ABOUT US</a>
    <a href="services.php">OUR SERVICES</a>
    <a href="#">OUR PROCESS</a>
    <a class="logo" href="index.php"><img style="width:70px;" src="./assets/imgs/lmc-logo-copy.png" alt="logo"></a>
    <a href="index.html">PORTFOLIO</a>
    <a href="Team.php">OUR TEAM</a>
    <a href="contact.php">CONTACT US</a>
</div>
  </nav>