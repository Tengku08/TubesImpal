
<body>

  <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3" >
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-between" id="navbar2SupportedContent">
        <a class="p-2 text-secondary" href="<?php echo base_url();?>edit" data-toggle="modal1" data-target="#logoutModal1">Ganti Password</a>
        <a class="p-2 text-secondary" href="<?php echo base_url();?>logout" data-toggle="modal" data-target="#logoutModal">Logout</a>
      </div>
    </div>
  </nav>
  <div class="py-5 text-center mx-3 mb-3" style="background-image: url('assets/img/bg_product.JPG');background-size:cover;">
    <div class="container">
      <div class="row">
        <div class="mx-auto p-5 my-5 col-md-12">
          <h1 class="display-4">SELAMAT DATANG <?php foreach ($result->result() as $row)  { echo strtoupper($row->nama); $data=$row->email; $_SESSION["eml"] = $data; } ?>&nbsp;</h1><a class="btn btn-dark" href="<?php echo base_url();?>mobil ">SEWA MOBIL SEKARANG</a>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center">
    <div class="container-fluid">
      <div class="row px-2">
        <div class="col mx-2 bg-dark pt-5 px-5 mb-3">
          <h2 class="mt-3"><b>MOBIL YANG ANDA SEWA</b></h2>
          <div class="row">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>TANGGAL SEWA</th>
                      <th>JENIS MOBIL</th>
                      <th>PLAT MOBIL</th>
                      <th>LAMA SEWA</th>
                      <th>SISAH WAKTU</th>
                      <th>BIAYA SEWA</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        foreach ($sewa->result() as $row) {
                        echo '<tr>';
                        echo '<td>'.$row->tgl_sewa.'</td>';
                        if ($row->jenis == 1){
                          echo '<td>'.'AVANZA'.'</td>';
                        }else if ($row->jenis == 2){
                          echo '<td>'.'ERTIGA'.'</td>';
                        } else{                        
                          echo '<td>'.'HRV'.'</td>';
                        }
                        echo '<td>'.$row->noplat.'</td>';
                        echo '<td>'.$row->lama.' Hari </td>';
                        $date1 = new DateTime();
                        $date2 = new DateTime($row->tgl_sewa);
                        echo '<td>'.$date2->diff($date1)->format("%d days, %h hours and %i minuts").'</td>';
                        echo '<td> Rp. '. number_format($row->harga,2).'</td>';
                        echo '</tr>';
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            <div class="col-md-12">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12"><br></div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </a>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">siap logout?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Apakah anda yakin untuk logout?</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo base_url();?>logout">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
   <footer class="text-md-left text-center p-4">
    <div class="container">
      <div class="row">
        <div class="my-3 col-lg-4 col-md-6">
          <h3>Rental Mobil </h3>
          <p class="text-muted">November 3 2018</p>
          <p class="my-3">Pesona Bali</p>
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
    <script src="<?php echo base_url();?>assets/js/sb-admin.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>