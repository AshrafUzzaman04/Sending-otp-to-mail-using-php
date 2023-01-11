<script src="https://code.jquery.com/jquery-3.6.3.min.js" ></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  $(document).ready(function () {

    // signup form alert
    $('#submit').click(function (e) {
      e.preventDefault();
       $('#submit').html('<i style="font-size:20px;" class="fas fa-cog fa-spin">');
        setTimeout(function(){ $('#submit').html('Submit'); }, 1500);

      var first_name = $('#first_name').val();
      var last_name = $('#last_name').val();
      var month = $('#month').val();
      var day = $('#day').val();
      var year = $('#year').val();
      var gender = $('#gender').val();
      var address = $('#address').val();
      var country = $('#myInput').val();
      var username = $('#username').val();
      var number = $('#number').val();
      var email = $('#email').val();
      var password = $('#password').val();


$.ajax({ type: "POST", url: "fu.php",
   data: { "create": "signup", "first_name": first_name, "last_name": last_name, "month": month, "day": day, "year": year, "gender": gender, "address": address, "country": country, "username": username, "number": number, "email": email, "password": password},
   success: function (data) { 
  if (data != 'ok') {
swal({ text: data, icon: "error", button: "Close", });
  } else {

  window.location.href = "varification.php";
  <?php unset($_SESSION['post']) ?>
  }
          }
        });

    });


    // otp alert
    $('#submitOTP').click(function (e) {
      e.preventDefault();
       $('#submitOTP').html('<i style="font-size:20px;" class="fas fa-cog fa-spin">');
        setTimeout(function(){ $('#submitOTP').html('Submit'); }, 1300);

        var otp = $('#OTP').val();

$.ajax({ type: "POST", url: "fu.php",
   data: { "confirm": "varification", "OTP": otp},
   success: function (data) { 
  if (data != 'ok') {
swal({ text: data, icon: "error", button: "Close", });
  } else {

    <?php 
if(isset($_SESSION['status']) && $_SESSION['status'] != ''){
?>
       swal({
        title: "<?= $_SESSION['status'] ?>",
        //   text: "You clicked the button!",
        icon: "<?= $_SESSION['status_code']  ?>",
        buttons: {
        confirm : {text:'ok',className:'bg-success'},
    },
        }).then(function() {
    window.location = "./";
});;         

<?php
unset($_SESSION['status']);
}
?>
  }
          }
        });
    });



    // login form alert
    $('#signIn').click(function (e) {
      e.preventDefault();
       $('#signIn').html('<i style="font-size:20px;" class="fas fa-cog fa-spin">');
        setTimeout(function(){ $('#signIn').html('Submit'); }, 1500);

        var email = $('#email').val();
        var password = $('#password').val();

$.ajax({ type: "POST", url: "fu.php",
   data: { "signIn": "signIn", "email": email, "password": password},
   success: function (data) {
  if (data != 'ok') {
swal({ text: data, icon: "error", button: "Close", });
  } else {

    <?php 
if(isset($_SESSION['status']) && $_SESSION['status'] != ''){
?>
       swal({
        title: "<?= $_SESSION['status'] ?>",
        //   text: "You clicked the button!",
        icon: "<?= $_SESSION['status_code']  ?>",
        buttons: {
        confirm : {text:'ok',className:'bg-success'},
    },
        }).then(function() {
    window.location = "./";
});;         

<?php
unset($_SESSION['status']);
}
?>
  }
          }
        });
    });

  });
</script>


    <!-- boostarp  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <!-- plugins mdb -->
    <script type="text/javascript" src="./js/Plugins.js"></script>
    <!-- auto complecte -->
    <script type="text/javascript" src="./js/autoComplecte.js"></script>
    <!-- ionicons -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <!-- password show and hide  -->
    <script type="text/javascript" src="./js/showHidePass.js"></script>
  </body>
</html>