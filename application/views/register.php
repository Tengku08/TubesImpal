<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link href="<?php echo base_url();?>assets/css/SignUpCSS.css" rel="stylesheet" />
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
                <b>SIGN UP</b>
              </h5>
              <div class="row mt-4 pt-2">
                <div class="col">
                  <form action="<?php echo base_url(). 'daftar/tambah_aksi'; ?>" method="post">
                    <div class="form-group mb-2">
                      <div class="input-group border-0">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">
                            <i class="now-ui-icons users_circle-08 lg"></i>
                          </span>
                        </div>
                        <input class="form-control" id="inlineFormInputGroup" placeholder="NAMA" style="background-color:#efeded; font-size:12px" type="text" name="nama">
                      </div>
                    </div>
                    <div class="form-group mb-2">
                      <div class="input-group border-0">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">
                            <i class="now-ui-icons users_circle-08 lg"></i>
                          </span>
                        </div>
                        <input class="form-control" id="inlineFormInputGroup" placeholder="ALAMAT" style="background-color:#efeded; font-size:12px" type="text" name="alamat">
                      </div>
                    </div>
                    <div class="form-group mb-2">
                      <div class="input-group border-0">
                        <div class="input-group-prepend ">
                          <span class="input-group-text" id="basic-addon1">
                            <i class="now-ui-icons text_caps-small lg"></i>
                          </span>
                        </div>
                        <input class="form-control" id="inlineFormInputGroup" placeholder="NO SIM/KTP/PASSPORT" style="background-color:#efeded; font-size:12px" type="text" name="sim">
                      </div>
                    </div>
                    <div class="form-group mb-2">
                      <div class="input-group border-0">
                        <div class="input-group-prepend ">
                          <span class="input-group-text" id="basic-addon1">
                            <i class="now-ui-icons ui-1_email-85 lg"></i>
                          </span>
                        </div>
                        <input type="email" class="form-control" id="inlineFormInputGroup" placeholder="EMAIL" style="background-color:#efeded; font-size:12px" name="email">
                      </div>
                    </div>
                    <div class="form-group mb-2">
                      <div class="input-group border-0">
                        <div class="input-group-prepend ">
                          <span class="input-group-text" id="basic-addon1">
                            <i class="now-ui-icons text_caps-small lg"></i>
                          </span>
                        </div>
                        <input style="background-color:#efeded; font-size:12px" type="password" class="form-control" id="inlineFormInputGroup" placeholder="PASSWORD" name="password">
                      </div>
                    </div>
                    <div class="form-group mb-2">
                      <div class="input-group border-0">
                        <div class="input-group-prepend ">
                          <span class="input-group-text" id="basic-addon1">
                            <i class="now-ui-icons text_caps-small lg"></i>
                          </span>
                        </div>
                        <input type="password" class="form-control" id="inlineFormInputGroup" placeholder="CONFIRM PASSWORD" style="background-color:#efeded; font-size:12px">
                      </div>
                    </div>
                    <button class="btn mt-4 mb-3 btn-light rounded btn-lg text-light" style="background-color:#1f58ba; font-color:#ffffff" type="submit">SIGN UP</button>
                    <button style="background-color:#db0d0d; font-color:#ffffff" type="submit" class="btn mt-4 mb-3 btn-light rounded btn-lg text-light">CANCEL</button>
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

</html>