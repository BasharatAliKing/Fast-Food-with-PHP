<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Burgers</title>
   <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

       
  <!--Bootstrap link-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
    integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
    crossorigin="anonymous"></script>
  <!--Google Fonts Link-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <!--Css File-->
  <link rel="stylesheet" href="./assets/css/style.css">
  <!--Icons link-->
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
  <!--Header section start Here-->
  <section id="header">
    <div class="container">
      <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light ">
          <a class="navbar-brand" href="#"><img src="./assets/pics/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Products</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                  data-toggle="dropdown" aria-expanded="false">
                  Blog
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                  data-toggle="dropdown" aria-expanded="false">
                  Contact
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li><a href=""><img src="./assets/pics/" alt=""></a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </section>

  <!--Home Section Start Here-->
  <section id="home">
    <div class="container-fluid">
      <div class="w3-content w3-section" style="max-width:100%">
        <img class="mySlides" src="./assets/pics/slider1.jpg" style="width:100%">
        <img class="mySlides" src="./assets/pics/slider2.jpg" style="width:100%">
        <img class="mySlides" src="./assets/pics/slider3.jpg" style="width:100%">
      </div>
      <div class="upper">
        <h1 class="w3-center">Combo <span>Burger</span><br> with Cold Drink</h1>
        <p class="para">Praese feugiat placerat levolut pavehicula placerat <br> raese feugiat</p>
        <button class="btn">Discover Mode</button>
      </div>


    </div>
  </section>

  <!-- Choose section start here-->
  <section id="choose">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h6>Choose & Enjoy</h6>
          <h1>What Do You Want <br>To Eat Today ?</h1>
        </div>
        <div class="col-md-12 mt-5">
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6"  id="bor">
             <a href="#modal1" class="modal-trigger">
              <div class="card">
                <img src="./assets/pics/choose-img1.png" class="card-img-top" alt="">
                <div class="card-body">
                  <div class="card-title">
                    <h3>Pizza's</h3>
                  </div>
                  <div class="card-text">Praese feugiat placerat levolutpat vehicula.</div>
                </div>
              </div>
             </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6"  id="bor">
             <a href="#modal2" class="modal-trigger">
              <div class="card">
                <img src="./assets/pics/choose-img2.png" class="card-img-top" alt="">
                <div class="card-body">
                  <div class="card-title">
                    <h3>Burgers</h3>
                  </div>
                  <div class="card-text">Praese feugiat placerat levolutpat vehicula.</div>
                </div>
              </div>
             </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6"  id="bor">
              <a href="#modal3" class="modal-trigger">
                <div class="card">
                  <img src="./assets/pics/choose-img3.png" class="card-img-top" alt="">
                  <div class="card-body">
                    <div class="card-title">
                      <h3>Fries</h3>
                    </div>
                    <div class="card-text">Praese feugiat placerat levolutpat vehicula.</div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6" >
             <a href="#modal4" class="modal-trigger">
              <div class="card">
                <img src="./assets/pics/choose-img4.png" class="card-img-top" alt="">
                <div class="card-body">
                  <div class="card-title">
                    <h3>Desserts</h3>
                  </div>
                  <div class="card-text">Praese feugiat placerat levolutpat vehicula.</div>
                </div>
              </div>
             </a>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!--Fast Food Section start Here.....-->
  <section id="fast-food">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="upper-pic">
            <img src="./assets/pics//menu-price-bg.png" alt="">
            <h4>Best Offer</h4>
            <h6>$4.99</h6>
          </div>

          <img src="./assets/pics/welcome-burger-img.png" alt="">
        </div>
        <div class="col-md-6 ">
          <h5>Welcome to Fast Food</h5>
          <h1>Real Delicious Food <br>Straight To Your Door</h1>
          <p class="para">Duis variurna id convallis elementu exerat tincidunt magna, sed pharetra est purus aceleo.
            Vivamus iny
            pellentesque arcu.</p>
          <div class="col-md-12 mt-5">
            <div class="row">
              <div class="col-md-6">
                <span><i class=" fa fa-check"></i>Premium Quality</span><br>
                <span><i class=" fa fa-check"></i>Always Fresh</span>
              </div>
              <div class="col-md-6">
                <span><i class=" fa fa-check"></i>Variety Of Dishes</span><br>
                <span><i class=" fa fa-check"></i>Fastest Delivery</span>
              </div>
              <div class="col-md-6">
                <button class="btn">Discover More</button>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- Tasty Menu Start Here....-->
  <section id="tasty">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h6>Tasty Menu</h6>
          <h1>Choose & Enjoy</h1>
        </div>
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-4">
              <div class="upper-pic">
                <img src="./assets/pics//menu-price-bg.png" alt="">
                <h5>$4.99</h5>
              </div>
             <a href="#beefburger" class="modal-trigger">
              <div class="card">
                <img src="./assets/pics/menu-img1.png" class="card-img-top" alt="">
                <div class="card-body">
                  <div class="card-title">
                    <h3>Beef Burger</h3>
                  </div>
                  <div class="card-text">Praese feugiat placerat levolutpat vehicula.</div>
                </div>
              </div>
             </a>
            </div>
            <div class="col-md-4">
              <div class="upper-pic">
                <img src="./assets/pics//menu-price-bg.png" alt="">
                <h5>$4.99</h5>
              </div>
             <a href="#chickenburger" class="modal-trigger">
              <div class="card">
                <img src="./assets/pics/menu-img1.png" class="card-img-top" alt="">
                <div class="card-body">
                  <div class="card-title">
                    <h3>Chicken Burger</h3>
                  </div>
                  <div class="card-text">Praese feugiat placerat levolutpat vehicula.</div>
                </div>
              </div>
             </a>
            </div>
            <div class="col-md-4">
              <div class="upper-pic">
                <img src="./assets/pics//menu-price-bg.png" alt="">
                <h5>$4.99</h5>
              </div>
             <a href="#vegonburger" class="modal-trigger">
              <div class="card">
                <img src="./assets/pics/menu-img1.png" class="card-img-top" alt="">
                <div class="card-body">
                  <div class="card-title">
                    <h3>Vegan Options</h3>
                  </div>
                  <div class="card-text">Praese feugiat placerat levolutpat vehicula.</div>
                </div>
              </div>
             </a>
            </div>
            <div class="col-md-4">
              <div class="upper-pic">
                <img src="./assets/pics//menu-price-bg.png" alt="">
                <h5>$4.99</h5>
              </div>
            <a href="#nuggets" class="modal-trigger">
              <div class="card">
                <img src="./assets/pics/menu-img2.png" class="card-img-top" alt="">
                <div class="card-body">
                  <div class="card-title">
                    <h3>Nuggets</h3>
                  </div>
                  <div class="card-text">Praese feugiat placerat levolutpat vehicula.</div>
                </div>
              </div>
            </a>
            </div>
            <div class="col-md-4">
              <div class="upper-pic">
                <img src="./assets/pics//menu-price-bg.png" alt="">
                <h5>$4.99</h5>
              </div>
           <a href="#frenchfries" class="modal-trigger">
            <div class="card">
              <img src="./assets/pics/menu-img3.png" class="card-img-top" alt="">
              <div class="card-body">
                <div class="card-title">
                  <h3>French Fries</h3>
                </div>
                <div class="card-text">Praese feugiat placerat levolutpat vehicula.</div>
              </div>
            </div>
           </a>
            </div>
            <div class="col-md-4">
              <div class="upper-pic">
                <img src="./assets/pics//menu-price-bg.png" alt="">
                <h5>$4.99</h5>
              </div>
             <a href="#desserts" class="modal-trigger">
              <div class="card">
                <img src="./assets/pics/menu-img4.png" class="card-img-top" alt="">
                <div class="card-body">
                  <div class="card-title">
                    <h3>Desserts</h3>
                  </div>
                  <div class="card-text">Praese feugiat placerat levolutpat vehicula.</div>
                </div>
              </div>
             </a>
            </div>

          </div>
          <div class=" offset-md-4 col-md-4">
            <button class="btn">View All Menu</button>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--nature Section Start Here....-->
  <section id="nature">
    <div class="container-fluid">
      <div class="row" id="natures">
        <div class="col-md-4">
          <h6>Nature deal of the day</h6>
          <h1>We Make the Best Burger in Town</h1>
          <p>Duis variurna id convallis elementu exerat tincidunt magna, sed pharetra est purusa celeo. Vivamus iny
            pellen.</p>
          <button class="btn">Discover More</button>
        </div>
        <div class="col-md-8">
          <img src="./assets/pics/food-combo1.png" alt="">
        </div>
      </div>
    </div>
    <!--Menu Section start Here...-->
    <div id="menu" class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="upper-menu">
            <h6>Tasty Menu</h6>
            <h1>Burger <br> Delights</h1>
            <h4>Mouth Watering<br>
              deliciousness </h4>
            <a href="#modal2" class="modal-trigger"><button class="btn">Order Now</button></a>
          </div>
          <img src="./assets/pics/menu-column-img1.jpg" alt="">
        </div>
        <div class="offset-md-2 col-md-4">
          <div class="pic-upper">
            <h1>The New Steak<br> Burger</h1>
            <h4>$12.99</h4>
         <a href="#beefburger" class="modal-trigger"><button class="btn">Order Now</button></a>
          </div>
          <img src="./assets/pics/menu-column-img2.jpg" alt="">
          <div class="pic-upper">
            <h5>Super Delicious</h5>
            <h1>CHICKEN</h1>
           <a href="#chickenburger" class="modal-trigger"> <button class="btn">Order Now</button></a>
          </div>
          <img class="mt-4" src="./assets/pics/menu-column-img3.jpg" alt="">
        </div>
      </div>
    </div>

    <!-- Menu Offers Section Start Here....-->
    <div id="menu-offers" class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Menu Offers</h1>
        </div>
        <div class="row">

          <div class="col-md-6" id="side">
            <div class="borders">
              <button class="btn">BRUNCH LIST</button>

             <a href="#modal2" class="modal-trigger">
              <div class="row" id="box">
                <div class="col-2"> <img src="./assets/pics/brunch-1.png" alt=""></div>
                <div class="col-7">
                  <h3>Grilled Burger</h3>
                  <p>Praese feugiat placer levolut</p>
                </div>
                <div class="col-2">
                  <h5>$13.50</h5>
                </div>
              </div>
             </a>
             <a href="#pizza" class="modal-trigger">
              <div class="row" id="box">
                <div class="col-2"> <img src="./assets/pics/brunch-2.png" alt=""></div>
                <div class="col-7">
                  <h3>Pizza Time</h3>
                  <p>Praese feugiat placer levolut</p>
                </div>
                <div class="col-2">
                  <h5>$13.50</h5>
                </div>
              </div>
             </a>
             <a href="#frenchfries" class="modal-trigger">
              <div class="row" id="box">
                <div class="col-2"> <img src="./assets/pics/brunch-3.png" alt=""></div>
                <div class="col-7">
                  <h3>French Fries</h3>
                  <p>Praese feugiat placer levolut</p>
                </div>
                <div class="col-2">
                  <h5>$13.50</h5>
                </div>
              </div>
             </a>
             <a href="#chickenpopcorn" class="modal-trigger">
              <div class="row" id="box">
                <div class="col-2"> <img src="./assets/pics/brunch-4.png" alt=""></div>
                <div class="col-7">
                  <h3>Chicken Popcorn</h3>
                  <p>Praese feugiat placer levolut</p>
                </div>
                <div class="col-2">
                  <h5>$13.50</h5>
                </div>
              </div>
             </a>
             <a href="#nuggets" class="modal-trigger">
              <div class="row" id="box">
                <div class="col-2"> <img src="./assets/pics/brunch-5.png" alt=""></div>
                <div class="col-7">
                  <h3>Nuggets</h3>
                  <p>Praese feugiat placer levolut</p>
                </div>
                <div class="  col-2">
                  <h5>$13.50</h5>
                </div>
              </div>
             </a>
            </div>

          </div>
          <div class="col-md-6 " id="side">
            <div class="borders">
              <button class="btn">DESSERTS LIST</button>
             <a href="#chocolatemilkshake" class="modal-trigger">
              <div class="row" id="box">
                <div class="col-2"> <img src="./assets/pics/dessert-1.png" alt=""></div>
                <div class="col-6">
                  <h3>Chocolate Milkshake</h3>
                  <p>MilkShakes</p>
                </div>
                <div class="col-2">
                  <h5>$4.50</h5>
                </div>
              </div>
             </a>
             <a href="#fruitjuice" class="modal-trigger">
              <div class="row" id="box">
                <div class="col-2"> <img src="./assets/pics/dessert-2.png" alt=""></div>
                <div class="col-6">
                  <h3>Fruit Juice</h3>
                  <p>Soft Drinks</p>
                </div>
                <div class="col-2">
                  <h5>$13.50</h5>
                </div>
              </div>
             </a>

            <a href="#frenchfries" class="modal-trigger">
              <div class="row" id="box">
                <div class="col-2"> <img src="./assets/pics/dessert-3.png" alt=""></div>
                <div class="col-6">
                  <h3>French Fries</h3>
                  <p>Praese feugiat placer levolut</p>
                </div>
                <div class="col-2">
                  <h5>$13.50</h5>
                </div>
              </div>
            </a>

            <a href="#icecream" class="modal-trigger">
              <div class="row" id="box">
                <div class="col-2"> <img src="./assets/pics/dessert-4.png" alt=""></div>
                <div class="col-6">
                  <h3>Ice Cream</h3>
                  <p>Praese feugiat placer levolut</p>
                </div>
                <div class="col-2">
                  <h5>$13.50</h5>
                </div>
              </div>

            </a>
             <a href="#nuggetsjuice" class="modal-trigger">
              <div class="row" id="box">
                <div class="col-2"> <img src="./assets/pics/dessert-5.png" alt=""></div>
                <div class="col-6">
                  <h3>Nuggets Juice</h3>
                  <p>Praese feugiat placer levolut</p>
                </div>
                <div class="col-2">
                  <h5>$13.50</h5>
                </div>
              </div>
             </a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container" id="mobile">
      <div class="row">
        <div class="offset-md-1 col-md-4"><img src="./assets/pics/mobile-img.png" alt=""></div>
        <div class="offset-md-1 col-md-6">
          <h6>Download the App</h6>
          <h1>Best App For <br>
            Fast Food Delivery</h1>
          <div class="row">
            <div class="col-md-5" id="btn-1">
              <div class="row">
                <div class="col-3"><i class="fa fa-apple"></i></div>
                <div class="col-8">
                  <h8>Download on the</h8>
                  <h3>Apps Store</h3>
                </div>
              </div>
            </div>
            <div class="col-md-5" id="btn-2">
              <div class="row">
                <div class="col-3"><img src="./assets/pics/playstore.png" alt=""></div>
                <div class="col-8">
                  <h8>Android app on</h8>
                  <h3>Google Play</h3>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!--Latest Section Start here...-->
    <div class="container" id="latest">
      <div class="row">
        <div class="col-md-12">
          <h6>Latest from the blog</h6>
          <h1>What Do You Want <br>To Eat Today ?</h1>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <img src="./assets/pics/post-thumb1.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <div class="card-title">Chicken Strips With New Ingridents Made.</div>
                <div class="card-text">June 16, 2022</div>
                <p class="para">Nam varius tempor sapien, sit amet ullamcorper…</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="./assets/pics/post-thumb2.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <div class="card-title">The Ultimate Hangover Burger: Egg in a Hole Burger</div>
                <div class="card-text">June 16, 2022</div>
                <p class="para">Nam varius tempor sapien, sit amet ullamcorper…</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="./assets/pics/post-thumb3.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <div class="card-title">Do You Think About Cheese Pizza Recipes?</div>
                <div class="card-text">June 16, 2022</div>
                <p class="para">Nam varius tempor sapien, sit amet ullamcorper…</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div id="book-now">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5">
            <h6>Latest from the blog</h6>
            <h1>Have Questions? Reach Out To Us</h1>
            <div class="media ">
              <img src="./assets/pics/contact-icon1.png" class="mr-2" alt="">
              <div class="media-body">
                <h3>Address</h3>
                <p>Street 057 Phase malesua
                  imusex, efficitur
                </p>
              </div>
            </div>
            <div class="media ">
              <img src="./assets/pics/contact-icon2.png" class="mr-2" alt="">
              <div class="media-body">
                <h3>Our Phone</h3>
                <p>Phone: +92300 00 00 000</p>
                <p>Phone: +92300 00 00 000</p>
              </div>
            </div>
            <div class="media ">
              <img src="./assets/pics/contact-icon3.png" class="mr-2" alt="">
              <div class="media-body">
                <h3>Email</h3>
                <p>bdking@gmail.com</p>
                <p>bdking@gmail.com</p>

              </div>
            </div>

          </div>
          <div class="col-md-6" id="table">
            <h1>BOOK YOUR TABLE</h1>
          <form action="">
            <input type="text" placeholder="Name" class="text"><br>
            <input type="email" placeholder="Email" class="text"><br>
            <input type="number" placeholder="Phone" class="text"><br>
            <select name="" id="" class="text"><br>
              <option value="1">Selcet Person</option>
              <option value="1">1</option>
              <option value="1">2</option>
              <option value="1">3</option>
              <option value="1">4</option>
              <option value="1">5</option>
              <option value="1">6</option>
              <option value="1">7</option>
              <option value="1">8</option>
              <option value="1">9</option>
              <option value="1">10</option>
            </select><br>
            <input type="time" placeholder="Time" class="text"><br>
            <input type="date" class="text"><br>
            <button class="btn">BOOK A TABLE</button>
          </form>
          </div>
        </div>
      </div>
    </div>

    <div id="footer-logos">
      <div class="container">
        <div class="row">
          <div class="col-md-2"><img src="./assets/pics/footer-logo.png" alt=""></div>
          <div class="offset-md-6 col-md-4" id="i-logos">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-youtube"></i>
            <i class="fa fa-linkedin"></i>
          </div>
        </div>
        <hr>
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-3">
              <h2>About Us</h2>
              <p class="mt-4">Suspendisse interdum, nisi nec effiitur auctor, odio lcongue ligula, se sodales tortor turpis at elit.
                Aliquam iacipsum ut odio variusid interdum lac dictum. Mauris a maximusey dolovestibulum. Morbi non
                vestibulum.</p>
            </div>
            <div class="col-md-3">
              <h2>Our Menu</h2>
                    <ul class="navbar-nav mt-4">
                      <li class="nav-item"><i class="fa fa-chevron-right"></i> <a class="nav-link" href="">Beef Burger</a></li>
                      <li class="nav-item"><i class="fa fa-chevron-right"></i> <a class="nav-link" href="">Chicken Burger</a></li>
                      <li class="nav-item"><i class="fa fa-chevron-right"></i> <a class="nav-link" href="">Vegan Options</a></li>
                      <li class="nav-item"><i class="fa fa-chevron-right"></i> <a class="nav-link" href="">Nuggets</a></li>
                      <li class="nav-item"><i class="fa fa-chevron-right"></i> <a class="nav-link" href="">French Fries</a></li>
                      <li class="nav-item"><i class="fa fa-chevron-right"></i> <a class="nav-link" href="">Nuggets</a></li>
                    </ul>
            </div>
            <div class="col-md-3">
              <h2>Our Links</h2>
                    <ul class="navbar-nav mt-4">
                      <li class="nav-item"><i class="fa fa-chevron-right"></i> <a class="nav-link" href="">Home</a></li>
                      <li class="nav-item"><i class="fa fa-chevron-right"></i> <a class="nav-link" href="">About</a></li>
                      <li class="nav-item"><i class="fa fa-chevron-right"></i> <a class="nav-link" href="">Menu</a></li>
                      <li class="nav-item"><i class="fa fa-chevron-right"></i> <a class="nav-link" href="">Products</a></li>
                      <li class="nav-item"><i class="fa fa-chevron-right"></i> <a class="nav-link" href="">Blog</a></li>
                      <li class="nav-item"><i class="fa fa-chevron-right"></i> <a class="nav-link" href="">Contacts</a></li>
                    </ul>
            </div>
            <div class="col-md-3">
              <h2>Contact Info</h2>
                    <ul class="navbar-nav mt-4">
                      <p>Street 238,52 tempor
                        Donec ultricies mattis nulla
                        risus tristique ut.</p>
                      <li class="nav-item"><a class="nav-link" href="">Phone: +92300 00 00 000</a></li>
                      <li class="nav-item"><a class="nav-link" href="">E-Mail: king1432@gmail.com</a></li>
                      <li class="nav-item"><a class="nav-link" href="bdking-portfolio.netlify.app">Website: bdking-portfolio</a></li>
                    </ul>
            </div>
            <hr>
            <footer>&copy; Copyright basharatalidogar14@gmail.com. All Right Reversed</footer>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Models Strat Here...-->
  <!-- Modal-1 Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
        <div class="row">
            <h2>Pizza</h2>
            <div class="col-md-6"> <img src="./assets/pics/choose-img1.png" alt="My-Pic" width="100%"></div>
         <div class="col-md-6"><h4>Rs:1000/_</h4>
         <form action="connect.php" method="post">
            <input type="text"  value="Pizza"  name="item" class="form-control" >
            <input type="text" placeholder="Enter Name" name="name" class="form-control">
            <input type="Number" placeholder="Enter Phone" name="phone" class="form-control">
            <input type="text" placeholder="Enter Address" name="address" class="form-control">
            <input type="submit" value="submit" name="submit" class="form-control btn ">
        </form>
        </div>
        </div>  
    </div>
  </div>
  <!-- Modal-2 Structure -->
  <div id="modal2" class="modal">
    <div class="modal-content">
        <div class="row">
            <h2>Burger</h2>
            <div class="col-md-6"> <img src="./assets/pics/choose-img2.png" alt="My-Pic" width="100%"></div>
         <div class="col-md-6"><h4>Rs:200/_</h4>
         <form action="connect.php" method="post">
            <input type="text"  value="Burger"  name="item" class="form-control" >
            <input type="text" placeholder="Enter Name" name="name" class="form-control">
            <input type="Number" placeholder="Enter Phone" name="phone" class="form-control">
            <input type="text" placeholder="Enter Address" name="address" class="form-control">
            <input type="submit" value="Order Now" class="form-control btn ">
        </form>
        </div>
        </div>  
    </div>
  </div>
  <!-- Modal-3 Structure -->
  <div id="modal3" class="modal">
    <div class="modal-content">
        <div class="row">
            <h2>Fries</h2>
            <div class="col-md-6"> <img src="./assets/pics/choose-img3.png" alt="My-Pic" width="100%"></div>
         <div class="col-md-6"><h4>Rs:400/_</h4>
         <form action="connect.php" method="post">
            <input type="text"  value="Fries"  name="item" class="form-control" >
            <input type="text" placeholder="Enter Name" name="name" class="form-control">
            <input type="Number" placeholder="Enter Phone" name="phone" class="form-control">
            <input type="text" placeholder="Enter Address" name="address" class="form-control">
            <input type="submit" value="Order Now" class="form-control btn ">
        </form>
        </div>
        </div>  
    </div>
  </div>
  <!-- Modal-4 Structure -->
  <div id="modal4" class="modal">
    <div class="modal-content">
        <div class="row">
            <h2>Desserts</h2>
            <div class="col-md-6"> <img src="./assets/pics/choose-img4.png" alt="My-Pic" width="100%"></div>
         <div class="col-md-6"><h4>Rs:300/_</h4>
         <form action="connect.php" method="post">
            <input type="text"  value="Desserts"  name="item" class="form-control" >
            <input type="text" placeholder="Enter Name" name="name" class="form-control">
            <input type="Number" placeholder="Enter Phone" name="phone" class="form-control">
            <input type="text" placeholder="Enter Address" name="address" class="form-control">
            <input type="submit" value="Order Now" class="form-control btn ">
        </form>
        </div>
        </div>  
    </div>
  </div>
  <!-- Beef Burger Structure -->
  <div id="beefburger" class="modal">
    <div class="modal-content">
        <div class="row">
            <h2>Beef Burger</h2>
            <div class="col-md-6"> <img src="./assets/pics/brunch-1.png" alt="My-Pic" width="100%"></div>
         <div class="col-md-6"><h4>Rs:550/_</h4>
         <form action="connect.php" method="post">
            <input type="text"  value="Beef Burger"  name="item" class="form-control" >
            <input type="text" placeholder="Enter Name" name="name" class="form-control">
            <input type="Number" placeholder="Enter Phone" name="phone" class="form-control">
            <input type="text" placeholder="Enter Address" name="address" class="form-control">
            <input type="submit" value="Order Now" class="form-control btn ">
        </form>
        </div>
        </div>  
    </div>
  </div>
  <!-- Chicken Burger Structure -->
  <div id="chickenburger" class="modal">
    <div class="modal-content">
        <div class="row">
            <h2>Chicken Burger</h2>
            <div class="col-md-6"> <img src="./assets/pics/brunch-1.png" alt="My-Pic" width="100%"></div>
         <div class="col-md-6"><h4>Rs:450/_</h4>
         <form action="connect.php" method="post">
            <input type="text"  value="Chicken Burger"  name="item" class="form-control" >
            <input type="text" placeholder="Enter Name" name="name" class="form-control">
            <input type="Number" placeholder="Enter Phone" name="phone" class="form-control">
            <input type="text" placeholder="Enter Address" name="address" class="form-control">
            <input type="submit" value="Order Now" class="form-control btn ">
        </form>
        </div>
        </div>  
    </div>
  </div>
  <!-- Vegan Burger Structure -->
  <div id="vegonburger" class="modal">
    <div class="modal-content">
        <div class="row">
            <h2>Vegon Burger</h2>
            <div class="col-md-6"> <img src="./assets/pics/brunch-1.png" alt="My-Pic" width="100%"></div>
         <div class="col-md-6"><h4>Rs:450/_</h4>
         <form action="connect.php" method="post">
            <input type="text"  value="Vegon Burger"  name="item" class="form-control" >
            <input type="text" placeholder="Enter Name" name="name" class="form-control">
            <input type="Number" placeholder="Enter Phone" name="phone" class="form-control">
            <input type="text" placeholder="Enter Address" name="address" class="form-control">
            <input type="submit" value="Order Now" class="form-control btn ">
        </form>
        </div>
        </div>  
    </div>
  </div>
  <!-- Nuggets Structure -->
  <div id="nuggets" class="modal">
    <div class="modal-content">
        <div class="row">
            <h2>Nuggets</h2>
            <div class="col-md-6"> <img src="./assets/pics/menu-img2.png" alt="My-Pic" width="100%"></div>
         <div class="col-md-6"><h4>Rs:750/_</h4>
         <form action="connect.php" method="post">
            <input type="text"  value="Nuggets"  name="item" class="form-control" >
            <input type="text" placeholder="Enter Name" name="name" class="form-control">
            <input type="Number" placeholder="Enter Phone" name="phone" class="form-control">
            <input type="text" placeholder="Enter Address" name="address" class="form-control">
            <input type="submit" value="Order Now" class="form-control btn ">
        </form>
        </div>
        </div>  
    </div>
  </div>
  <!-- French Fries Structure -->
  <div id="frenchfries" class="modal">
    <div class="modal-content">
        <div class="row">
            <h2>French Fries</h2>
            <div class="col-md-6"> <img src="./assets/pics/menu-img3.png" alt="My-Pic" width="100%"></div>
         <div class="col-md-6"><h4>Rs:750/_</h4>
         <form action="connect.php" method="post">
            <input type="text"  value="French Fries"  name="item" class="form-control" >
            <input type="text" placeholder="Enter Name" name="name" class="form-control">
            <input type="Number" placeholder="Enter Phone" name="phone" class="form-control">
            <input type="text" placeholder="Enter Address" name="address" class="form-control">
            <input type="submit" value="Order Now" class="form-control btn ">
        </form>
        </div>
        </div>  
    </div>
  </div>
  <!-- Desserts Structure -->
  <div id="desserts" class="modal">
    <div class="modal-content">
        <div class="row">
            <h2>Desserts</h2>
            <div class="col-md-6"> <img src="./assets/pics/menu-img4.png" alt="My-Pic" width="100%"></div>
         <div class="col-md-6"><h4>Rs:850/_</h4>
         <form action="connect.php" method="post">
            <input type="text"  value="Desserts"  name="item" class="form-control" >
            <input type="text" placeholder="Enter Name" name="name" class="form-control">
            <input type="Number" placeholder="Enter Phone" name="phone" class="form-control">
            <input type="text" placeholder="Enter Address" name="address" class="form-control">
            <input type="submit" value="Order Now" class="form-control btn ">
        </form>
        </div>
        </div>  
    </div>
  </div>
  <!-- Pizza Structure -->
  <div id="pizza" class="modal">
    <div class="modal-content">
        <div class="row">
            <h2>Pizza</h2>
            <div class="col-md-6"> <img src="./assets/pics/pizza.avif" alt="My-Pic" width="100%"></div>
         <div class="col-md-6"><h4>Rs:1250/_</h4>
         <form action="connect.php" method="post">
            <input type="text"  value="Pizza"  name="item" class="form-control" >
            <input type="text" placeholder="Enter Name" name="name" class="form-control">
            <input type="Number" placeholder="Enter Phone" name="phone" class="form-control">
            <input type="text" placeholder="Enter Address" name="address" class="form-control">
            <input type="submit" value="Order Now" class="form-control btn ">
        </form>
        </div>
        </div>  
    </div>
  </div>
  <!-- Chicken popcorn Structure -->
  <div id="chickenpopcorn" class="modal">
    <div class="modal-content">
        <div class="row">
            <h2>Chicken PopCorn</h2>
            <div class="col-md-6"> <img src="./assets/pics/chickenpopcorn.webp" alt="My-Pic" width="100%"></div>
         <div class="col-md-6"><h4>Rs:950/_</h4>
         <form action="connect.php" method="post">
            <input type="text"  value="Chicken PopCorn"  name="item" class="form-control" >
            <input type="text" placeholder="Enter Name" name="name" class="form-control">
            <input type="Number" placeholder="Enter Phone" name="phone" class="form-control">
            <input type="text" placeholder="Enter Address" name="address" class="form-control">
            <input type="submit" value="Order Now" class="form-control btn ">
        </form>
        </div>
        </div>  
    </div>
  </div>
  <!-- Chocolate MilkShake Structure -->
  <div id="chocolatemilkshake" class="modal">
    <div class="modal-content">
        <div class="row">
            <h2>Chocolate MilkShake</h2>
            <div class="col-md-6"> <img src="./assets/pics/chocolatemilkshake.webp" alt="My-Pic" width="100%"></div>
         <div class="col-md-6"><h4>Rs:350/_</h4>
         <form action="connect.php" method="post">
            <input type="text"  value="Chocolate MilkShake"  name="item" class="form-control" >
            <input type="text" placeholder="Enter Name" name="name" class="form-control">
            <input type="Number" placeholder="Enter Phone" name="phone" class="form-control">
            <input type="text" placeholder="Enter Address" name="address" class="form-control">
            <input type="submit" value="Order Now" class="form-control btn ">
        </form>
        </div>
        </div>  
    </div>
  </div>
  <!-- Fruit Juice Structure -->
  <div id="fruitjuice" class="modal">
    <div class="modal-content">
        <div class="row">
            <h2>Fruit Juice</h2>
            <div class="col-md-6"> <img src="./assets/pics/fruitjuice.avif" alt="My-Pic" width="100%"></div>
         <div class="col-md-6"><h4>Rs:299/_</h4>
         <form action="connect.php" method="post">
            <input type="text"  value="Fruit Juice"  name="item" class="form-control" >
            <input type="text" placeholder="Enter Name" name="name" class="form-control">
            <input type="Number" placeholder="Enter Phone" name="phone" class="form-control">
            <input type="text" placeholder="Enter Address" name="address" class="form-control">
            <input type="submit" value="Order Now" class="form-control btn ">
        </form>
        </div>
        </div>  
    </div>
  </div>
  <!-- French Fries Structure -->
  <div id="frenchfries" class="modal">
    <div class="modal-content">
        <div class="row">
            <h2>French Fries</h2>
            <div class="col-md-6"> <img src="./assets/pics/frenchfries.avif" alt="My-Pic" width="100%"></div>
         <div class="col-md-6"><h4>Rs:199/_</h4>
         <form action="connect.php" method="post">
            <input type="text"  value="French Fries"  name="item" class="form-control" >
            <input type="text" placeholder="Enter Name" name="name" class="form-control">
            <input type="Number" placeholder="Enter Phone" name="phone" class="form-control">
            <input type="text" placeholder="Enter Address" name="address" class="form-control">
            <input type="submit" value="Order Now" class="form-control btn ">
        </form>
        </div>
        </div>  
    </div>
  </div>
  <!-- Ice Cream Structure -->
  <div id="icecream" class="modal">
    <div class="modal-content">
        <div class="row">
            <h2>IceCream</h2>
            <div class="col-md-6"> <img src="./assets/pics/icecream.avif" alt="My-Pic" width="100%"></div>
         <div class="col-md-6"><h4>Rs:249/_</h4>
         <form action="connect.php" method="post">
            <input type="text"  value="IceCream"  name="item" class="form-control" >
            <input type="text" placeholder="Enter Name" name="name" class="form-control">
            <input type="Number" placeholder="Enter Phone" name="phone" class="form-control">
            <input type="text" placeholder="Enter Address" name="address" class="form-control">
            <input type="submit" value="Order Now" class="form-control btn ">
        </form>
        </div>
        </div>  
    </div>
  </div>
  <!-- nuggets Juice Structure -->
  <div id="nuggetsjuice" class="modal">
    <div class="modal-content">
        <div class="row">
            <h2>Nuggets Juice</h2>
            <div class="col-md-6"> <img src="./assets/pics/nuggetsjuice.avif" alt="My-Pic" width="100%"></div>
         <div class="col-md-6"><h4>Rs:349/_</h4>
         <form action="connect.php" method="post">
            <input type="text"  value="Nuggets Juice"  name="item" class="form-control" >
            <input type="text" placeholder="Enter Name" name="name" class="form-control">
            <input type="Number" placeholder="Enter Phone" name="phone" class="form-control">
            <input type="text" placeholder="Enter Address" name="address" class="form-control">
            <input type="submit" value="Order Now" class="form-control btn ">
        </form>
        </div>
        </div>  
    </div>
  </div>



 <!-- Compiled and minified JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
   <script>
     document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
  });
   </script>
  <script>
    var myIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) { myIndex = 1 }
      x[myIndex - 1].style.display = "block";
      setTimeout(carousel, 3000); // Change image every 2 seconds
    }
  </script>
</body>

</html>