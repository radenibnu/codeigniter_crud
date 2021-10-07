<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>CRUD Data Karyawan</title>
    </head>
    
    <body>
        <div class="container mt-4">
            <h4 class="mb-3">CRUD Data Karyawan</h4>
            <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success');?>
            </div> 
            <?php endif;?>   
            <?php if ($this->session->flashdata('delete')): ?>
            <div class="alert alert-danger" role="alert">
            <?php echo $this->session->flashdata('delete');?>
            </div> 
            <?php endif;?> 
            
            <?php echo anchor('welcome/tambah',"<h5 class='btn btn-sm btn-primary'>Tambah Data</h4>"); ?> 
            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Tanggal Aktif Jabatan</th>
                        <th scope="col">Tanggal Masuk</th>
                        <th scope="col">Status Karyawan</th>
                        <th scope="col">Action</th> 
                    </tr>
                </thead>
                <tbody>
                   <?php 
                        $no = 1;
                        foreach($karyawan as $data){ 
                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data->nip ?></td>
                            <td><?php echo $data->nama ?></td>
                            <td><?php echo $data->jenis_kelamin ?></td>
                            <td><?php echo $data->jabatan ?></td>
                            <td><?php echo $data->tanggal_aktif ?></td>
                            <td><?php echo $data->tanggal_masuk ?></td>
                            <td><?php echo $data->status ?></td>
                            <td>
                                <a href="<?php echo base_url();?>welcome/edit/<?php echo $data->id;?>" class="btn btn-primary btn-sm">Edit</a>
                  
                                <a href="<?php echo base_url();?>mahasiswa/hapusdata/<?php echo $data->id;?>" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>