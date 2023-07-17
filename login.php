<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="theme-color" content="#000000" />
        <link href="https://fonts.googleapis.com/css?family=Gentium+Basic&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- animation -->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <!-- Sick slider -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- external css -->
        <link rel="stylesheet" href="css/champaran.css?ver=19"/>

        <!-- title -->
        <title>Champaran Junction</title>
      
        <!-- favicon -->
        <link rel="shortcut icon" href="images/logo1.jpg">
    </head>

    <body>

<!-- Banner area start-->
<section class="banner indexing">
    <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
  <!-- <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button> -->
</div>

<!-- The slideshow/carousel -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/banner2.jpg" alt="Los Angeles" class="d-block" style="width:100%; height:900px">
        </div>
        <div class="carousel-item">
            <img src="images/food4.jpg" alt="Los Angeles" class="d-block" style="width:100%; height:900px">
        </div>
        <div class="carousel-item">
            <img src="images/food2.jpg" alt="Los Angeles" class="d-block" style="width:100%; height:900px">
        </div>
        <div class="carousel-item">
            <img src="images/food7.jpg" alt="Los Angeles" class="d-block" style="width:100%; height:900px">
        </div>
        <div class="carousel-item">
            <img src="images/banner6.jpg" alt="Los Angeles" class="d-block" style="width:100%; height:900px">
        </div>
        <div class="carousel-item">
            <img src="images/food9.jpg" alt="Los Angeles" class="d-block" style="width:100%; height:900px">
        </div>
        <div class="carousel-item">
            <img src="images/banner5.jpg" alt="Los Angeles" class="d-block" style="width:100%; height:900px">
        </div>
    </div>
  </div>
</section>
<div class="container order-form">
    <a href="index.php" class="d-flex align-items-center justify-content-center"><img src="images/logo2.png" style="width:150px; height:70px;"></a>
    <h4 class="mt-4 mb-2 text-center letter-space">FILL OUR FORM</h4>
    <div class="mt-4">
        <form action="/action_page.php">
            <div class="form-group mb-4">
                <input type="text" class="form-control" id="nametext" aria-describedby="name" placeholder="Name" required>
            </div>
            <div class="form-group mb-4">
                <input type="tel" class="form-control" placeholder="Tel No." required>
            </div>
            <div class="form-group mb-4">
                <input type="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group mb-4">
                <input type="date" class="form-control" placeholder="DATE" required>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" required>
                    <label class="form-check-label" for="inlineCheckbox1">Remember me</label>
                </div>
                <input type="reset" value="Reset ?" class="text-primary btn-primary reset">
            </div>
                <div class="row justify-content-center slider-button">
                    <button type="sumbit"  class="btn ml-2 mr-4 colorcodeclass waves-effect waves-light" id="ordernowbtn"> 
                        <span class="text">Submit</span>
                    </button>
                </div>
        </form>
    </div>
</div>
<!-- Banner area end-->
</body>

<!-- our js area -->
<script type="text/javascript">
function openTab(event, tabId) {
  // Hide all tab content
  const tabContents = document.getElementsByClassName("tab-content");
  for (let i = 0; i < tabContents.length; i++) {
    tabContents[i].style.display = "none";
  }

  // Deactivate all tab buttons
  const tabBtns = document.getElementsByClassName("tab-btn");
  for (let i = 0; i < tabBtns.length; i++) {
    tabBtns[i].classList.remove("active");
  }

  // Show the selected tab content
  document.getElementById(tabId).style.display = "block";

  // Activate the clicked tab button
  event.currentTarget.classList.add("active");
}

// Set the first tab as active by default
document.getElementById("tab1").style.display = "block";
document.getElementsByClassName("tab-btn")[0].classList.add("active");
</script>

<!-- boostrap bundel -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- fontawesome -->
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

 <!-- animation -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        offset: 100,
        duration: 2000,
    });
  </script>
  
 <!-- sick slider -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript">
    $('.slider').slick({
  dots: true,
  infinite:true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
  </script>
</html>