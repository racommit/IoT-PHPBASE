<?php
require "koneksi.php";

?>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Tabel data relay</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table text-nowrap">
          <thead>
            <tr>
              <th>No </th>
              <th>Relay</th>
              <th>Keterangan</th>
             
            </tr>
          </thead>
          <tbody>
           <?php
            $sql = mysqli_query($koneksi, "SELECT * FROM datakontrol ORDER BY id DESC"); //sesuaikan dengan database

            if (mysqli_num_rows($sql) == 0) {
                echo '<tr><td colspan="14">Data Tidak Ada.</td></tr>'; // jika tidak ada entri di database maka tampilkan 'Data Tidak Ada.'
            } else {
                // jika terdapat entri maka tampilkan datanya
                $no = 1; // mewakili data dari nomor 1
            
                while ($row = mysqli_fetch_assoc($sql)) { // fetch query yang sesuai ke dalam array
                   // sesuaikan dengan database
                  
                    echo '
                        <tr>
                        <td>' . $no . '</td>
                        <td>' . $row['relay'] . '</td> 
                        <td>' . $row['keterangan'] . '</td>
                        </tr>
                        ';
                    $no++; // mewakili data kedua dan seterusnya
                }
                
            }
            // ob_end_clean(); 
            ?>
            </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>


