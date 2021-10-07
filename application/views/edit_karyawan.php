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

        <div class="container my-4">
            <h4 class="mb-3">Edit Data Karyawan</h4>

            <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success');?>. <u><a href="<?php echo base_url();?>welcome" style="color: #155724">Lihat data mahasiswa</a></u>
            </div> 
            <?php endif;?>
            
            <?php foreach ($karyawan as $row) { ?>
            <form action="<?php echo base_url(). 'welcome/update' ?>" method="POST">

                <input type="hidden" name="id">

                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">NIP</label>
                    <div class="col-sm-10">
                        <input type="text" name="nip" value="<?php echo $row->nip ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" value="<?php echo $row->nama ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select name="jenis_kelamin" id="">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" name="jabatan" value="<?php echo $row->jabatan ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal Aktif Jabatan</label>
                    <div class="col-sm-10">
                        <input type="date" name="tanggal_aktif" value="<?php echo $row->tanggal_aktif ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Tangga Masuk</label>
                    <div class="col-sm-10">
                        <input type="date" name="tanggal_masuk" value="<?php echo $row->tanggal_masuk ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Status Karyawan</label>
                    <div class="col-sm-10">
                        <select name="status">
                            <option value="Aktif">Aktif </option>
                            <option value="Tidak Aktif">Tidak Aktif </option>
                        </select>
                    </div>
                </div>
    
                <button type="submit" class="btn btn-primary">Edit</button>
                <a href="<?php echo base_url();?>" class="btn btn-sm btn-danger"> Batal</a>
            </form>
            <?php } ?>
        </div>

         <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>