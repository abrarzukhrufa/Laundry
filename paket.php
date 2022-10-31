<!DOCTYPE html>
<html>
<?php
include "header.php";
?>

<div class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="intro-wrap">
                <h3 class="judul_halaman" align="center"><strong>Data Paket</strong></h3>
   
              <a class="btn btn-warning" aria-current="page" href="tambah_paket.php">Tambah Paket</a>
            
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th><th>JENIS PAKET</th><th>HARGA</th><th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
$qry_paket=mysqli_query($conn,"select * from paket");
            $no=0;
            while($data_paket=mysqli_fetch_array($qry_paket)){
            $no++;?>
            <tr>              
                <td><?=$no?></td>
                 <td><?=$data_paket['jenis_paket']?></td>
                 <td><?=$data_paket['harga']?> </td>
                   <td><a href="ubah_paket.php?id_paket=<?=$data_paket['id_paket']?>" class="btn btn-success">Ubah</a> | <a href="hapus_paket.php?id_paket=<?=$data_paket['id_paket']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
 
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>

                </div>
            </div>
        </div>
    </div>
</div>
