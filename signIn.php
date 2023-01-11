<?php
include_once("./dbInput.php");
include_once("./header.php") ;
?>


<!-- header -->
<header>
  <a class="img-div" href="./">
    <img src="./images/familysearch-tree.dc22204d2135c739.svg" alt="" />
  </a>
</header>

<section class="form-body container">
    <div class="row card mx-auto" style="max-width: 360px ;padding:20px 10px;">
    <div class="form-section">
        <h3 class="fw-medium text-primary text-center">Log In</h3>
          <hr class="col-5 mx-auto my-0" style="border: 1px solid #3B71CA" />
          <br />
        <form action="" autocomplete="off">
          <!-- email input -->
              <div class="form-outline mb-4">
                <input type="email" id="email" class="form-control" />
                <label class="form-label" for="email">Enter Email Address</label>
              </div>
  
          <!-- Password input -->
              <div class="form-outline mb-2">
                <input type="password" id="password" class="form-control" />
                <label class="form-label" for="password">Enter your password</label>
                      <ion-icon name="eye-outline" id="hide" onclick="toggle()" style="display: none"></ion-icon>
                      <ion-icon name="eye-off-outline" id="show" onclick="toggle()" ></ion-icon>
              </div>
              <span>Don't have an account? <a href="./signup.php" class="text-primary" style="font-weight: 600; text-decoration: underline;">SignUp.</a></span>


           <!-- Submit button -->
            <div>
                <button id="signIn" class="btn btn-primary btn-block mt-4">Sign In</button>
            </div>
        </form>
    </div>
    </div>
    
    
</section>


<?php include_once("./footer.php")?>