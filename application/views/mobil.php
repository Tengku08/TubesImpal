  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <script type="text/javascript">
var maxDate = year + '-' + month + '-' + day;
    alert(maxDate);
    $('#txtDate').attr('min', maxDate);
$(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;
    alert(maxDate);
    $('#txtDate').attr('min', maxDate);
});
  </script>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-between" id="navbar2SupportedContent">
        <a class="p-2 text-secondary" href="#"><i class="fa fa-dot-circle-o fa-lg d-block pt-1"></i></a>
        <a class="p-2 text-secondary" href="<?php echo base_url();?>logout">Logout</a>
      </div>
    </div>
  </nav>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="text-center col-md-12">
          <h1>SILAHKAN MEMILIH MOBIL DAN TANGGAL</h1>
        </div>
      </div>
      <form action="<?php echo base_url(). 'mobil/tambahm_aksi'; ?>" method="post">
      <div class="row">
        <div class="col-lg-12 col-md-12 p-12">
          <div class="card bg-light">
            <div class="card-body p-4">
              <div class="row">
                <div class="col-8 col-md-6">
                    <table>
                      <tr width="100%">
                        <td width="50%">Tanggal pakai</td>
                        <td width="50%"><input type="date" name="tanggal1" required id="txtDate"></td>
                      </tr>
                      <tr>
                        <td>Lama Pemakaian</td>
                        <td><input type="number" name="lama" required id="number"></td>
                      </tr>
                    </table> 
                </div>
                <div class="col-8 col-md-4" >
                  <center>
                    <button class="btn btn-light rounded btn-lg text-light" style="background-color:#1f58ba; font-color:#ffffff; width: 100%" type="submit" >SEWA</button>
                  </center>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php              
    $Ja = 0;
    $Jb = 0;
    $Jc = 0;           
    foreach ($mobil->result() as $row) {
      if (($row->status = 1) && ($row->kondisi = 1)){
        if ($row->jenis == 1){
            $Ja = $Ja + 1;
            $ida = $row->id_kendaraan;
        }else if ($row->jenis == 2){
            $Jb = $Jb + 1;
            $ida = $row->id_kendaraan;

        } else{                        
            $Jc = $Jb + 1;
            $ida = $row->id_kendaraan;

        }
      }

      }
      ?>
      <div class="row">
        <div class="col-lg-4 col-md-6 p-3">
          <div class="card bg-light">
            <div class="card-body p-4">
              <div class="row">
                <div class="col-8 col-md-12">
                  <h3 class="mb-0">AVANZA</h3>
                  <br>
                </div>
              </div>
              <img class="img-fluid d-block rounded-circle" src="<?php echo base_url();?>assets/img/Avanza1.png">
              <p class="my-3">Toyota Avanza 1.5L M/T Veloz 2018</p>
              <ul class="pl-3">
                <li>Engine Type : 4 Cylinder, 16 V, DOHC, Dual VVT-i 1496CC</li>
                <li>kursi untuk 7 orang</li>
                <li>Rp. 300.000</li>
              </ul><?php if($Ja > 0){ ?> <input type="radio" name="mobil" value="<?php echo $ida; ?>" required sty><strong> SEWA</strong><?php }else{echo "stok habis";} ?>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 p-3">
          <div class="card bg-light">
            <div class="card-body p-4">
              <div class="row">
                <div class="col-8 col-md-12">
                  <h3 class="mb-0">HR-V</h3>
                  <br>
                </div>
              </div>
              <img class="img-fluid d-block rounded-circle" src="<?php echo base_url();?>assets/img/hrv2.png">
              <p class="my-3">Honda HR-V  M/T Mugen 2018 1799cc </p>
              <ul class="pl-3">
                <li>Engine Type : 1.8 L, Inline SOHC, 16 V, i-VTEC + DBW </li>
                <li>kursi untuk 5 orang</li>
                <li>Rp. 400.000</li>
              </ul><?php if($Jb > 0){ ?> <input type="radio" name="mobil" value="<?php echo $ida; ?>" required sty><strong> SEWA</strong><?php }else{echo "stok habis";} ?>
            </div>
          </div>
        </div>
        <div class="col-lg-4 p-3">
          <div class="card bg-light">
            <div class="card-body p-4">
              <div class="row">
                <div class="col-8 col-md-12">
                  <h3 class="mb-0">ERTIGA</h3>
                  <br>
                </div>
              </div>
              <img class="img-fluid d-block rounded-circle" src="<?php echo base_url();?>assets/img/ertiga2.png">
              <p class="my-3">Suzuki Ertiga M/T 2017 1462cc</p>
              <ul class="pl-3">
                <li>Engine Type : 1.5 L, DOHC, 16 V, K15B </li>
                <li>kursi untuk 7 orang</li>
                <li>Rp. 300.000</li>
              </ul><?php if($Jc > 0){ ?> <input type="radio" name="mobil" value="3" required sty><strong> SEWA</strong><?php }else{echo "stok habis";} ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </form>
   <footer class="text-md-left text-center p-4">
    <div class="container">
      <div class="row">
        <div class="my-3 col-lg-4 col-md-6">
          <h3>Rental Mobil</h3>
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
            <a data-toggle="modal" data-target="#logoutModal"><button type="submit" class="btn btn-outline-primary" >Submit</button></a>
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
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Apakah anda yakin?</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
            <a class="btn btn-primary" href="<?php echo base_url();?>logout">Yakin</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>

</html>