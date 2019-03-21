      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo base_url();?>orderan">Orderan</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Orderan</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Tanggal</th>
                      <th>Pelanggan</th>
                      <th>Plat Kendaraan</th>
                      <th>Lama sewa</th>
                      <th>Sisah waktu</th>
                      <th>Harga</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                        foreach ($orderan->result() as $row) {
                        echo '<tr>';
                        echo '<td>'.$row->tgl_transaksi.'</td>';
                        echo '<td>'.$row->nama.'</td>';
                        echo '<td>'.$row->noplat.'</td>';
                        echo '<td>'.$row->lama.' Hari</td>';
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
            </div>
            <div class="card-footer small text-muted"></div>
          </div>

        </div>
      </div>

    </div>

