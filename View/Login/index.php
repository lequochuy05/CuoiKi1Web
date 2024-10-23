
<?php if (isset($message)): ?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            showModal("<?php echo $message; ?>");
        });
    </script>
<?php endif; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>OnixShop - Login</title>
  </head>
  <body>
 
  <?php
require_once 'vendor/autoload.php';

// init configuration
$clientID ='910282067487-tfn81757uhj5ghrpb96h5as72h6uvdta.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/CuoiKi1_2425/index.php?controller=login&action=login';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $client->setAccessToken($token['access_token']);

  // get profile info
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
  $email =  $google_account_info->email;
  $name =  $google_account_info->name;
?>
<div class="container">
  <div class="box">
    <div class="form-group">
      <label  for="email">Email: <?php echo $email;  ?> </label> <br>
      <label  for="name">Name: <?php echo $name;  ?> </label>
    </div>
  </div>
</div>
<?php
} else { ?>
    <div class="container">
      <header>
        <div id="head1">
          <img src="img/logo.png" alt="" />
          <div class="logo-text">
            <div class="logo-name">ONIX</div>
            <a href="index.php?controller=register&action=add_user">Register</a>
          </div>
        </div>
        <div id="head2">
          <a href="#">About - Onix</a>
        </div>
      </header>
      <main>
        <div class="main1"><img src="img/logo.png" alt="" /></div>
        <div class="main2">
          <form action="" method="POST">
            <div class="head">Login</div>
            <div class="middle">
              <input type="text" name="username" placeholder="Username" required />
              <br />
              <input type="password" name="password" placeholder="Password" required /> 
              <input type="submit" name="login" value="Login">
              <br />
              <div class="register-section">
                <div class="register">
                  <a href="index.php?controller=register&action=add_user">Register</a> 
                  <span>or</span>
                  <a href="index.php?controller=login&action=forgot_pass">Forgot Password</a>
                </div>
                <div class="social-buttons">
                  <button class="btn-facebook">
                    <i class="fab fa-facebook-f"></i> Sign in with Facebook
                  </button>
                  <button class="btn-google">
                    <i class="fab fa-google"></i><a href="<?php echo $client->createAuthUrl() ;?>">Sign in with Google</a>
                  </button>
                  <button class="btn-twitter">
                    <i class="fab fa-twitter"></i> Sign in with Twitter
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </main>

      <!-- Modal Structure -->
      <div id="myModal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <p id="modal-message"></p>
          <button onclick="modal.style.display='none'">Okay</button>
        </div>
      </div>

      <footer>
        <div id="footer">
          <div class="p1">
              <p>Name: Lê Quốc Huy</p>
              <p>Student-Code: 23IT.B075</p>
              <p>Phone: 0706 163 387</p>
              <p>Address: Quảng Đại - Đại Cường - Đại Lộc - Quảng Nam</p>
            </div>
            <div class="p1">
              <p>Name: Nguyễn Văn Hoàng</p>
              <p>Student-Code: 23IT.B</p>
              <p>Phone: </p>
              <p>Address: </p>
          </div>
        </div>
      </footer>
    </div>

    <script>
      var modal = document.getElementById("myModal");
      var modalMessage = document.getElementById("modal-message");
      var span = document.getElementsByClassName("close")[0];

      // Show the modal with the message
      function showModal(message) {
          modalMessage.innerHTML = message;
          modal.style.display = "block";
      }

      // Close the modal when 'x' is clicked
      span.onclick = function() {
          modal.style.display = "none";
      }

      // Close the modal if clicked outside the modal
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
    </script>
    <?php } ?>
  </body>
</html>
