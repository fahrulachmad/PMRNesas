<!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Pasien</a>
        </li>
        <li class="breadcrumb-item active">Data Pasien</li>
      </ol>
      <!-- Icon Cards-->
      <a href="<?php echo base_url('siswa/tambah'); ?>" class="btn btn-success">Tambah Data</a>
    
   	<div class="table-responsive">
          <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="margin-top: 10px;">
            <thead>
              <tr>
                <th>No</th>
                <th>NIS</th>
                <th>NISN</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Hari</th>

              </tr>
            </thead>
            <tbody>

                    <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
                <td>
                  <button class="btn btn-warning" data-toggle="modal" data-target="#modal-default" name="edit" >Edit</button>
                  <button class="btn btn-danger" name="hapus">Hapus</button>
                </td>
              </tr>

            </tbody>
          </table>
        </div>

     