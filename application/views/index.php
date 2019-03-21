<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-between" id="navbar2SupportedContent">
        <a class="p-2 text-secondary" href="#"><i class="fa fa-dot-circle-o fa-lg d-block pt-1"></i></a>
          <a class="p-2 text-primary" href="<?php echo base_url();?>login">Login / Register</a>
      </div>
    </div>
  </nav>
  <div class="py-5 text-center mx-3 mb-3" style="background-image: url('assets/img/bg_product.JPG');background-size:cover;">
    <div class="container">
      <div class="row">
        <div class="mx-auto p-5 my-5 col-md-8">
          <h1 class="display-4">PREMIUM RENTAL</h1>
          <p class="lead">Pilih Mobil Terbaik Anda dan rasakan kenyamanannya</p>
          <botton>Pesan Sekarang</button>          
        </div>
      </div>
    </div>
  </div>
  <div class="text-center">
    <div class="container-fluid">
      <div class="row px-2">
        <div class="col mx-2 bg-dark pt-5 px-5 mb-3">
          <h2 class="mt-3">New Toyota Avanza</h2>
          <?php
            $total = 0;
            foreach ($mobil->result() as $row) {
              if ($row->jenis==1){
                $total = $total + 1;
              }
            }
            echo "<h2 class='mt-3'>Total Unit ".$total." </h2>";
          ?>
          <img class="img-fluid d-block" src="<?php echo base_url();?>assets/img/Avanza1.png" width="" style="">
        </div>
        <div class="col mx-2 pt-5 px-5 bg-primary mb-3">
          <h2 class="mt-3"><b>New Toyota Avanza</b></h2>
          <?php
            $total = 0;
            foreach ($mobil->result() as $row) {
              if ($row->jenis==1){
                $total = $total + 1;
              }
            }
            echo "<h2 class='mt-3'>Total Unit ".$total." </h2>";
          ?>
          <img class="img-fluid d-block" src="<?php echo base_url();?>assets/img/Avanza2.png" width="">
        </div>
      </div>
      <div class="row px-2">
        <div class="col mx-2 pt-5 px-5 mb-3 bg-light">
          <h2 class="mt-3"><b>Honda HR-V</b></h2>
          <?php
            $total = 0;
            foreach ($mobil->result() as $row) {
              if ($row->jenis==2){
                $total = $total + 1;
              }
            }
            echo "<h2 class='mt-3'>Total Unit ".$total." </h2>";
          ?>
          <img class="img-fluid d-block" src="<?php echo base_url();?>assets/img/hrv2.png" width="">
        </div>
        <div class="col mx-2 pt-5 px-5 mb-3 bg-secondary">
          <h2 class="mt-3"><b>Honda HR-V</b></h2>
          <?php
            $total = 0;
            foreach ($mobil->result() as $row) {
              if ($row->jenis==2){
                $total = $total + 1;
              }
            }
            echo "<h2 class='mt-3'>Total Unit ".$total." </h2>";
          ?>
          <img class="img-fluid d-block" src="<?php echo base_url();?>assets/img/hrv1.png" width="">
        </div>
      </div>
      <div class="row px-2">
        <div class="col mx-2 pt-5 px-5 mb-3 bg-info">
          <h2 class="mt-3"><b>Suzuki Ertiga</b></h2>
          <?php
            $total = 0;
            foreach ($mobil->result() as $row) {
              if ($row->jenis==3){
                $total = $total + 1;
              }
            }
            echo "<h2 class='mt-3'>Total Unit ".$total." </h2>";
          ?>
          <img class="img-fluid d-block" src="<?php echo base_url();?>assets/img/ertiga2.png" width="">
        </div>
        <div class="col mx-2 pt-5 px-5 mb-3 bg-primary">
          <h2 class="mt-3">Suzuki Ertiga</h2>
          <?php
            $total = 0;
            foreach ($mobil->result() as $row) {
              if ($row->jenis==3){
                $total = $total + 1;
              }
            }
            echo "<h2 class='mt-3'>Total Unit ".$total." </h2>";
          ?>
          <img class="img-fluid d-block" src="<?php echo base_url();?>assets/img/ertiga1.png" width="">
        </div>
      </div>
    </div>
  </div>
  <footer></footer>
  <footer class="text-md-left text-center p-4">
    <div class="container">
      <div class="row">
        <div class="my-3 col-lg-4 col-md-6">
          <h3>Rental Mobil</h3>
          <p class="text-muted">November 3 2018</p>
          <p class="my-3">Pesona Bali</p>
          <a class="btn btn-lg btn-primary shadowed" href="<?php echo base_url();?>daftar">Register now</a>
        </div>
        <div class="my-3 col-lg-4 col-md-6">
          <h3>Contact us</h3>
          <form>
            <fieldset class="form-group my-3">
              <input type="email" class="form-control" id="Input Email" placeholder="Email"> </fieldset>
            <fieldset class="form-group my-3">
              <input type="message" class="form-control" id="Input Message" placeholder="Message"> </fieldset>
            <button type="submit" class="btn btn-outline-primary">Submit</button>
          </form>
        </div>
        <div class="col-lg-1"> </div>
        <div class="my-3 col-lg-3">
          <h3>Follow</h3>
          <a href="https://www.facebook.com" target="blank"><i class="fa fa-facebook-square text-muted fa-3x m-2"></i></a>
          <a href="https://www.instagram.com" target="blank"><i class="fa fa-3x fa-instagram text-muted m-2"></i></a>
          <a href="https://twitter.com" target="blank"><i class="fa fa-3x fa-twitter m-2 text-muted"></i></a>
          <a href="https://plus.google.com" target="blank"><i class="fa fa-3x fa-google-plus-official text-muted m-2"></i></a>
          <a href="https://pinterest.com" target="blank"><i class="fa fa-3x text-muted fa-pinterest-p m-2"></i></a>
          <a href="https://www.youtube.com" target="blank"><i class="fa fa-3x text-muted fa-youtube-play m-2"></i></a>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>