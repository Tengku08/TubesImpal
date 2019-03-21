<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link href="<?php echo base_url();?>assets/css/SignUpCSS.css" rel="stylesheet" />
    <script type="text/javascript">
    $('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});
  </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>



<body style="background-color:#efeded">
  <div style="margin-top:">
    <div class="container">
      <div class="row my-4">
        <div class="mx-auto col-md-6 col-10 col-xl-4 px-4">
          <div class="card bg-primary">
            <div class="card-body text-center" style="background-color:#ffffff">
              <div class="row mt-5">
              </div>
              <h5 class="mb-4">
                <b>UBAH PASSWORD</b>
              </h5>
              <div class="row mt-4 pt-2">
                <div class="col">
                  <form action="<?php echo base_url(). 'daftar/editp'; ?>" method="post">
                    <div class="form-group mb-2">
                      <div class="input-group border-0">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">
                            <i class="now-ui-icons users_circle-08 lg"></i>
                          </span>
                        </div>
                        <input class="form-control" id="" placeholder="Password Lama" style="background-color:#efeded; font-size:12px" type="password" name="" required="">
                      </div>
                    </div>
               <div class="col">
                    <div class="form-group mb-2">
                      <div class="input-group border-0">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">
                            <i class="now-ui-icons users_circle-08 lg"></i>
                          </span>
                        </div>
                        <input class="form-control" id="password" placeholder="password" style="background-color:#efeded; font-size:12px" type="password" name="password" required>
                      </div>
                    </div>
                    <div class="form-group mb-2">
                      <div class="input-group border-0">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">
                            <i class="now-ui-icons users_circle-08 lg"></i>
                          </span>
                        </div>
                        <input class="form-control" id="confirm_password" placeholder="confirm password" style="background-color:#efeded; font-size:12px" type="password" name="confirm_password" required>
                      </div>
                    </div>
                    <span id='message'></span>

                    <button class="btn mt-4 mb-3 btn-light rounded btn-lg text-light" style="background-color:#1f58ba; font-color:#ffffff" type="submit" onclick="return Validate()">UBAH PASSWORD</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("Password").value;
        var confirmPassword = document.getElementById("confirm_password").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>
</html>