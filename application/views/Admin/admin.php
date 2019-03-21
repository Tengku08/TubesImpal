      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo base_url();?>Dashboard">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-comments"></i>
                  </div>
                  <div class="mr-5">26 Orderan!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url();?>orderan">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-money-check-alt"></i>
                  </div>
                  <div class="mr-5">26 Menunggu Pembayaran!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url();?>pembayaran">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-car"></i>
                  </div>
                  <div class="mr-5">11 Kendaraan!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url();?>kendaraan">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>


          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              User Rental Premium</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>No Sim</th>
                      <th>Email</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                        foreach ($result->result() as $row) {
                        echo '<tr>';
                        echo '<td>'.$row->nama.'</td>';
                        echo '<td>'.$row->alamat.'</td>';
                        echo '<td>'.$row->nosim.'</td>';
                        echo '<td>'.$row->email.'</td>';
                        echo '</tr>';
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted"></div>
          </div>

        </div>
 
      </div>

    </div>