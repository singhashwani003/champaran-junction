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
        <link rel="stylesheet" href="css/champaran.css?ver=24"/>

        <!-- title -->
        <title>Champaran Junction</title>
      
        <!-- favicon -->
        <link rel="shortcut icon" href="images/logo1.jpg">
    </head>

    <body>

<!-- Banner area start-->
<nav class="navbar navbar-expand-md navbar-dark sticky-top">
        <div class="container-fluid sider px-4">
            <a class="navbar-brand" href="index.php"><img src="images/logo2.png" class="ms-4" style="width:150px; height:70px;"><br>
            <span class="text-light fw-bolder cuisine">"Authentic Bihari Cuisine"</span></a>
                        <form class="ms-4">
                            <div class="form-group">
                                <select class="form-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Champaran Junction (Bangalore)</option>
                                </select>
                            </div>
                        </form>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <div class="ms-auto d-flex justify-content-center align-items-center">
                    <form class="mx-4">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search here...." aria-label="" aria-describedby="basic-addon1">
                            <button class="btn btn-warning text-dark font-weight-bold" type="button">Go!</button>
                        </div>
                    </form>
                    <div class="form-check form-check-inline mx-3 veg">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Veg</label>
                    </div>
                    <div class="form-check form-check-inline mx-3 veg">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Non-Veg</label>
                    </div>
                    <a class="btn btn-warning text-dark font-weight-bold mx-3" href="menu.php">Back to Menu</a>
                </div>

            </div>
        </div>
</nav>
<!-- header Area end -->

<!-- vertical navbar area start -->
<!-- <div class="vertical">
    <ul class="position p-0">
      <li class="nav-item mt-5">
        <a class="veg" href="#">Meal For One</a>
      </li>
      <li class="nav-item mt-4">
        <a class="veg" href="#">Champaran Special</a>
      </li>
      <li class="nav-item mt-4">
        <a class="veg" href="#">Thali</a>
      </li>
      <li class="nav-item mt-4">
        <a class="veg" href="#">Mithai</a>
      </li>
      <li class="nav-item mt-4">
        <a class="veg" href="#">Thanda Garam</a>
      </li>
      <li class="nav-item mt-4">
        <a class="veg" href="#">Alag Alag</a>
      </li>
    </ul>
  </div> -->
    <!-- vertical navbar area end -->

    <!-- section booking area start -->
    <div class="container-fluid" style="position:relative;">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xl-2 col-lg-2" style="background-color: #281326;padding: 5px 0px;">
                  <div class="vertical">
                        <ul class="position p-0">
                          <li class="nav-item mt-5" style="border-bottom:3px solid #e7c854;">
                            <a class="veg" href="#">Meal For One</a>
                          </li>
                          <li class="nav-item mt-4">
                            <a class="veg" href="#">Champaran Special</a>
                          </li>
                          <li class="nav-item mt-4">
                            <a class="veg" href="#">Thali</a>
                          </li>
                          <li class="nav-item mt-4">
                            <a class="veg" href="#">Mithai</a>
                          </li>
                          <li class="nav-item mt-4">
                            <a class="veg" href="#">Thanda Garam</a>
                          </li>
                          <li class="nav-item mt-4">
                            <a class="veg" href="#">Alag Alag</a>
                          </li>
                        </ul>
                  </div>
            </div>
            <div class="col-sm-12 col-md-12 col-xl-10 col-lg-10 px-5 my-5 py-3">
              <h2 class="category-title"><span>Meal For One</span></h2>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12">
                    <div class="card-booking">
                        <div class="booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <p class="menu-item-text mb-0 more">egg curries + tawa roti</p>
                            <div class="d-flex flex-row align-items-center justify-content-between">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <h2 class="category-title mt-5"><span>Champaran Special</span></h2>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 pe-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/100.jpg" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 ps-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/100.jpg" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 pe-4 mt-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/101.jpg" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 ps-4 mt-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/102.jpg" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 pe-4 mt-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/a$.jpg" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 ps-4 mt-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/a1.jpg" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 pe-4 mt-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/a2.jpg" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 ps-4 mt-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/a3.jpg" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 pe-4 mt-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/a5.jpg" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 ps-4 mt-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/a6.jpg" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 pe-4 mt-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/a7.jpg" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 ps-4 mt-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/a8.png" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 pe-4 mt-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/a9.jpg" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 ps-4 mt-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/a10.png" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 pe-4 mt-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/a11.jpg" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 ps-4 mt-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/a12.png" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 pe-4 mt-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/a13.jpg" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 ps-4 mt-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/a14.jpg" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 pe-4 mt-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/a15.jpg" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 ps-4 mt-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/a16.jpg" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 pe-4 mt-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/a17.jpg" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 ps-4 mt-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/a18.jpg" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 pe-4 mt-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/a19.png" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 ps-4 mt-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/100.jpg" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                
              </div> 
              <h2 class="category-title mt-5"><span>Thali</span></h2>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 pe-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/b1.jpg" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 ps-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/b2.jpg" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                
              </div> 
              <h2 class="category-title mt-5"><span>Mithai</span></h2>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 pe-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/b3.jpg" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 ps-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/b4.jpg" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                
              </div>
              <h2 class="category-title mt-5"><span>Thanda Garam</span></h2>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 pe-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/b5.png" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 ps-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/b6.png" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 pe-4 mt-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/b7.png" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 ps-4 mt-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/b8.jpg" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 pe-4 mt-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/b9.jpg" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 ps-4 mt-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/b10.png" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 pe-4 mt-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/b11.png" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 ps-4 mt-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/b12.png" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 pe-4 mt-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/b13.jpg" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div> 
              </div> 
              <h2 class="category-title mt-5"><span>Alag Alag</span></h2>
              <div class="row">
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 pe-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/b14.png" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 ps-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/b15.png" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 pe-4 mt-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/b16.png" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 ps-4 mt-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/b17.jpg" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 pe-4 mt-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/b18.jpg" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-6 col-lg-12 pe-4 mt-4">
                    <div class="row card-booking">
                      <div class="p-0 d-flex flex-row justify-content-between">
                        <div class="col-3">
                          <img src="images/b19.jpg" style="width:100%; height:120px;border-radius: 6px">
                        </div>
                        <div class="col-9 ps-4 booking-menu">
                            <h4 class="veg-egg order-1">MFO Egg Curry Combo</h4>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-5">
                              <h3 class="rupees">Rs 224.00</h3>
                                <button class="btn btn-sm waves-effect waves-light colorcodeclass additem colorcodeclass menu-item-price-wrap" style="" data-id="121179167" data-type="IT_" data-title="MFO Egg Curry Combo" data-price="224.00" data-category="Meal For One" data-curreny="INR">Add</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div> 
              </div>
            </div>
        </div>
    </div>
    

    <!-- section booking area end -->

<!-- footer area start -->
<!-- <a href="#" class="mad-back-to-top animated mad-inview zoomIn d-flex align-items-center justify-content-center"><span class="fas fa-angle-up"></span></a> -->
<!-- section article area start-->
<div class="mad-colorizer-bg-image">
              <div class="article-body p-0">
                      <div class="article-text d-flex flex-column align-items-center justify-content-center" >
                        <h2 data-aos="fade-up" data-aos-delay="300">We Offer You an Unforgettable <br>Food Experience</h2>
                        <!-- <a href="#" class="mad-read-order">Order Now</a> -->
                      </div>
                  </div>
</div>
<!-- section article area end-->

<footer id="mad-footer" class="mad-footer">
      <!--================ Footer row ================-->
      <div class="mad-footer-main">
        <div class="container wide-style-2">
          <div class="content-element-8">
            <div class="row vr-size-1">
              <div class="col-lg-4">
                <!--================ Widget ================-->
                <section class="mad-widget">
                  <h5 class="mad-widget-title">Contact Us</h5>
                  <p>
                  Champaran Junction <br><span class="fw-bolder" >Shop number 5 , <br> Little India Food Court , <br> Bhartiya city Road ,<br> Thanisandra , Bangalore <br> Karnataka, India 560064 </span>
                  </p>
                  
                  <p>
                  <i class="fas fa-phone"></i><a href="#" style="margin-left: 10px;color:#fff;">09717312123</a>
                  </p>
                 
                 
                </section>
                <!--================ End of Widget ================-->
              </div>
              <div class="col-lg-4">
                <!--================ Widget ================-->
                <section class="mad-widget">
                  <div class="content-element-3">
                    <h5 class="mad-widget-title">Stay Connected</h5>
                    <p>Follow us on social media channels</p>
                  </div>
                  <div class="mad-social-icons style-3 size-big">
                    <ul class="justify-content-center p-0">
                      <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                     
                      
                      <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                      
                      
                      
                    </ul>
                  </div>
                </section>
                <!--================ End of Widget ================-->
              </div>
              <div class="col-lg-4">
                <!--================ Widget ================-->
                <section class="mad-widget">
                  <h5 class="mad-widget-title mt">Timings</h5>
                  <p>Monday : 12:30 PM to 10:30 PM (Last order)</p>
                  <p>Tuesday to Sunday : 11:00 AM to 10:30 PM (Last Order)</p>
                </section>
                <!--================ End of Widget ================-->
              </div>
            </div>
          </div>
          <!--================ Widget ================-->
          <section class="mad-widget">
          
            <p class="copyrights">Copyright © 2023 Champaran Junction
                All Rights Reserved  Designed & Developed :- <a href="http://geniesoftsystem.com/"  class="text-light" target="_blank">Genie Softsystem Pvt. Ltd.</a>.</p>
            
          </section>
          <!--================ End of Widget ================-->
        </div>
      </div>
      <!--================ End of Footer row ================-->
    </footer>
<!-- footer area end --> 
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