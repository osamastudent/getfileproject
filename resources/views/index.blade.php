<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
    <!-- font awesom -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
  
<div class="container px-1">
<div class="alert status  " role="alert">
  <div class="status-content">
  <img src="{{asset('images/investomate.png')}}" class="investomate" alt="investomate">
  <a href="#" class="fw-bold">Investomate</a>

  <img src="{{asset('images/asanhisab.png')}}" class="asanhisab" alt="asanhisab">
  <a href="#" class="fw-bold">AsaanHisab</a>
</div>

</div>
  </div>
  <hr class="hr1">
<!-- navbar start -->

<nav class="navbar navbar-expand-lg px-md-4 px-0 ">
  
  <a class="navbar-brand " href="#"><img src="{{asset('images/logo.png')}}" class="offset-4 px-4  logo" alt="logo"></a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon " id="togg"><i class="fa-solid fa-bars"></i></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav offset-1 px-5" >
      <li class="nav-item" id="taxttoolsid">
        <a class="fw-bold nav-link  px-0 px-md-3 active"  aria-current="page" href="#">TAX TOOLS</a>
      </li>
      <li class="nav-item">
        <a class="fw-bold nav-link main__menu px-0 px-md-3 resourcesid" id="resourcesid" href="#">RESOURCES</a>
      </li>

      <!-- <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    RESOURCES
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="left: 0; right: 0; width: 100vw;">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
</li> -->


      <li class="nav-item" id="businessid">
        <a class="fw-bold nav-link main__menu px-0 px-md-3" href="#">BUSINESS SERVICESS</a>
      </li>
      <li class="nav-item">
        <a class="fw-bold nav-link main__menu px-0 px-md-3" href="#" id="salestaxid">SALES TAX</a>
      </li>

      <li class="nav-item" id="usaservicesid">
        <a class="fw-bold nav-link main__menu px-0 px-md-3 " href="#"><img src="{{asset('images/usa-flag1.png')}}" class="usa-flag" alt="logo"> <span class="usa">USA SERVICESS</span></a>
      </li>

      
      
      <li class="nav-item px-0 px-md-3">
       <button class="btn  w-100 sign-up">Sign up</button>
           
       <button class="btn  signin px-0 w-100"> <i class=" fa-solid fa-lock"></i> Sign in</button>
      </li>
    </ul>
  </div>


</nav>
<hr class="hr3" id="hr3" style="display: none;">
<div class="alert al2  text-center" id="taxttoolsalert" role="alert">
<ul class="d-flex justify-content-center mx-5" style="list-style-type: none;">
<li class=" px-0 px-md-0">
<img src="{{asset('images/hoverimages/calculator.png')}}" onmouseleave="calculatorhoveronmouseleave()" onmouseenter="calculatorhoveronmouseenter()" class="playimage mx-5" id="calculator" alt="calculator">
<p><b>Calculator</b></p>
</li>

<li class=" px-0 px-md-4">
<img src="{{asset('images/hoverimages/ntn.png')}}" onmouseleave="ntnhoveronmouseleave()" onmouseenter="ntnhoveronmouseenter()" class="blogimage mx-1 " id="ntn" alt="ntn">
<p><b>NTN Status</b></p>
</li>

<li class=" px-0 px-md-4">
<img src="{{asset('images/hoverimages/atl.png')}}" onmouseleave="atlhoveronmouseleave()" onmouseenter="atlhoveronmouseenter()" class="blogimage mx-1" id="atl" alt="ntn">
<p><b class="">ATL Status</b></p>
</li>

<li class=" px-0 px-md-4">
<img src="{{asset('images/hoverimages/faq.png')}}" onmouseleave="faqhoveronmouseleave()" onmouseenter="faqhoveronmouseenter()" class="blogimage mx-1" id="faq" alt="ntn">
<p><b>FAQ</b></p>
</li>


<li class=" px-0 px-md-4">
<img src="{{asset('images/hoverimages/contact.png')}}" onmouseleave="conacthoveronmouseleave()" onmouseenter="conacthoveronmouseenter()" class="blogimage mx-1" id="contact" alt="contact">
<p><b>Conatct Us</b></p>
</li>
</ul>
</div>

<!-- resources data here -->

<hr class="hr2">
<div class="alert al " id="alertid" role="alert">

    <ul class="d-flex justify-content-center mx-5" style="list-style-type: none;">
        <li class="">
            <img src="{{asset('images/hoverimages/play.png')}}" onmouseleave="playhoveronmouseleave()" onmouseenter="playhoveronmouseenter()" class="playimage mx-1" id="playimage" alt="play">
            <p><b>Videos</b></p>
        </li>

        <li class="mx-4">
            <img src="{{asset('images/hoverimages/blog.png')}}" onmouseleave="bloghoveronmouseleave()" onmouseenter="bloghoveronmouseenter()" class="blogimage mx-1" id="blogimage" alt="blog">
            <p><b>Blogs</b></p>
        </li>
    </ul>


</div>

<hr class="hr2" id="hr2" style="display: none;">
<!-- navbar end -->

<!-- header star -->

<div class="alert  header " role="alert">

<div class="row  px-md-5">
<div class="col-md-12  col-lg-8  col-xl-8">
    <div class="header-content mt-md-5 ps-md-5 mx-md-2 px-2  mx-sm-5 my-sm-5 ">
    <p class="header-title ">Your Tax and Legal Partner, Befiler</p> 
    <div class="header-description ">Going beyond NTN and Income Tax Filing</div>
    <p class="header-text">Befiler now provides 360 solutions to all your Business needs, including Business Incorporation and Trademark Registration in Pakistan and USA.</p>
    
    <button class="btn welcome-btn   mt-3">
  Click to Start Tax-filing
</button>

    </div>
    </div>

    <div class="col-12  col-lg-4 col-xl-4 col-xxl-4  col-sm-12">
    <img src="{{asset('images/girlimage.png')}}"  class="girlimage">
    </div>
</div>
</div>

<!-- content start here -->

<div class="container main-content">
<div class="row">
<div class="col-md-3 col-6 col-sm-6">
<div class="card mt-4 content-card border-0">
  <img src="{{asset('images/maincontentimages/startup.png')}}" class="card-img-top mx-auto d-block star" alt="...">
  <div class="card-body content-card-body text-center">
  <h6 class="card-title content-card-title fw-bold">Won 2021 Startup</h6>
  <p class="card-text content-card-text">of the year award, from PDA Pakistan Digital Awards</p>
    
  </div>
</div>
</div>

<div class="col-md-3 col-6 col-sm-6">
<div class="card mt-4 content-card border-0">
  <img src="{{asset('images/maincontentimages/star.png')}}" class="card-img-top mx-auto d-block star" alt="...">
  <div class="card-body content-card-body text-center">
    <h6 class="card-title content-card-title fw-bold">Rated 4.6 Stars</h6>
    <p class="card-text content-card-text">12,000+ reviews by satisfied customers</p>
    
  </div>
</div>
</div>

<div class="col-md-3 col-6 col-sm-6">
<div class="card mt-4 content-card border-0">
  <img src="{{asset('images/maincontentimages/provider.png')}}" class="card-img-top mx-auto d-block star" alt="...">
  <div class="card-body content-card-body text-center">
  <h6 class="card-title content-card-title fw-bold">Online E-file Provider</h6>
  <p class="card-text content-card-text">who has completed sandbox testing with FBR-IRIS</p>
    
  </div>
</div>
</div>

<div class="col-md-3 col-6 col-sm-6">
<div class="card mt-4 content-card border-0">
  <img src="{{asset('images/maincontentimages/secure.png')}}" class="card-img-top mx-auto d-block star" alt="...">
  <div class="card-body content-card-body text-center">
  <h6 class="card-title content-card-title fw-bold">Safe & Secure</h6>
    <p class="card-text content-card-text">your information is private and secure on our site</p>
    
  </div>
</div>
</div>
</div>

<!-- app icons heading start -->
<div class="row mt-5">
<div class="col-md-12">
<h2 class="text-center app-title">Our Partners & Collaborators</h2>
</div>
</div>

<!-- app icons start -->
<div class="row mt-5">
<div class="col">
<img src="{{asset('images/maincontentimages/engro.png')}}" class="appicons" /> 
</div>

<div class="col">
<img src="{{asset('images/maincontentimages/moon.png')}}" class="appicons" /> 
</div>

<div class="col">
<img src="{{asset('images/maincontentimages/ubl.png')}}" class="appicons" /> 
</div>

<div class="col">
<img src="{{asset('images/maincontentimages/kcci.png')}}" class="appicons" /> 
</div>

<div class="col">
<img src="{{asset('images/maincontentimages/peb.png')}}" class="appicons" /> 
</div>

<div class="col">
<img src="{{asset('images/maincontentimages/telenor.png')}}" class="appicons" /> 
</div>

<div class="col">
<img src="{{asset('images/maincontentimages/js.png')}}" class="appicons" /> 
</div>
</div>


<!-- 2nd icons arro start -->
<div class="row mt-md-5 mt-sm-5 mb-5">
<div class="col">
<img src="{{asset('images/maincontentimages/acca.png')}}" class="appicons" /> 
</div>

<div class="col">
<img src="{{asset('images/maincontentimages/meezan.png')}}" class="appicons" /> 
</div>

<div class="col">
<img src="{{asset('images/maincontentimages/secp.png')}}" class="appicons" /> 
</div>

<div class="col">
<img src="{{asset('images/maincontentimages/pasha.png')}}" class="appicons" /> 
</div>

<div class="col">
<img src="{{asset('images/maincontentimages/ncc.png')}}" class="appicons" /> 
</div>

<div class="col">
<img src="{{asset('images/maincontentimages/hbl.png')}}" class="appicons" /> 
</div>

<div class="col">
<img src="{{asset('images/maincontentimages/aws.png')}}" class="appicons" /> 
</div>
</div>
</div>

<div class="container-fluid app-content">
<div class="container">
<div class="row ">
<div class="col-lg-4 ">
<img src="{{asset('images/maincontentimages/mobile.png')}}" class="app-content-image mt-4" /> 
</div>
<div class="col-lg-8 col-md-12">
  <div class="mobile-text">
  Say hello to the app that made everything even more convenient
  <p><span class="one">1</span> <span class="mobile-description">million app downloads by Pakistani's</span></p> 
  <li style="list-style-type: none;"><img src="{{asset('images/maincontentimages/googleplay.png')}}" class="googleplay  mt-4" /> 
  <img src="{{asset('images/maincontentimages/appstore.png')}}" class="appstore  mt-4" /> </li>
</div>

  
</div>
</div>
</div>
</div>

<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>

<script src="resource.js"></script>

<script>
    var taxttoolsid=document.getElementById("taxttoolsid");
    var resourcesid = document.getElementById("resourcesid");
var taxttoolsalert = document.getElementById("taxttoolsalert");
var hr3 = document.getElementById("hr3");
var alertid = document.getElementById("alertid");

taxttoolsid.addEventListener("mouseenter",function(){
if(taxttoolsalert.style.display="none" ){
    taxttoolsalert.style.display="block";
     hr3.style.display = "block";
     alertid.style.display="none";
}
});

taxttoolsid.addEventListener("mouseleave",function(){
if(taxttoolsalert.style.display="block" ){
    taxttoolsalert.style.display="block";
    hr3.style.display = "block";
    alertid.style.display="none";
}
});

taxttoolsalert.addEventListener("mouseleave", function() {
    if (taxttoolsalert.style.display = "block") {
        taxttoolsalert.style.display = "none";
        hr3.style.display = "none";
    }
});
</script>



<script>
    function calculatorhoveronmouseenter() {
  var calculator = document.getElementById("calculator");
    calculator.src = "{{ asset('images/hoverimages/calculatorhover.png') }}";
}

function calculatorhoveronmouseleave() {
  var calculator = document.getElementById("calculator");
    calculator.src = "{{ asset('images/hoverimages/calculator.png') }}";
}

function ntnhoveronmouseenter(){
    var ntn = document.getElementById("ntn");
   ntn.src = "{{ asset('images/hoverimages/ntnhover.png') }}";
}

function ntnhoveronmouseleave(){
    var ntn = document.getElementById("ntn");
   ntn.src = "{{ asset('images/hoverimages/ntn.png') }}";
}

function atlhoveronmouseenter(){
    var atl = document.getElementById("atl");
    atl.src = "{{ asset('images/hoverimages/atlhover.png') }}";
}

function atlhoveronmouseleave(){
    var atl = document.getElementById("atl");
    atl.src = "{{ asset('images/hoverimages/atl.png') }}";
}


function faqhoveronmouseenter(){
    var faq = document.getElementById("faq");
    faq.src = "{{ asset('images/hoverimages/faqhover.png') }}";
}

function faqlhoveronmouseleave(){
    var faq = document.getElementById("atl");
    faq.src = "{{ asset('images/hoverimages/faq.png') }}";
}

function conacthoveronmouseenter(){
    var conact = document.getElementById("contact");
    contact.src = "{{ asset('images/hoverimages/contacthover.png') }}";
}

function conacthoveronmouseleave(){
    var contact = document.getElementById("contact");
    contact.src = "{{ asset('images/hoverimages/contact.png') }}";
}

</script>
<!-- reosurce event -->
<script>
    
    function bloghoveronmouseenter() {
  var blogimage = document.getElementById("blogimage");
  var playimage = document.getElementById("playimage");
  blogimage.src = "{{ asset('images/hoverimages/bloghover.png') }}";
}

function bloghoveronmouseleave(){
    var blogimage = document.getElementById("blogimage");
  blogimage.src = "{{ asset('images/hoverimages/blog.png') }}";
}


function playhoveronmouseenter() {
  var playimage = document.getElementById("playimage");
  playimage.src = "{{ asset('images/hoverimages/playhover.png') }}";
}

function playhoveronmouseleave(){
    var playimage = document.getElementById("playimage");
    playimage.src = "{{ asset('images/hoverimages/play.png') }}";
}

</script>
</body>
</html>


<!-- <script></script> -->