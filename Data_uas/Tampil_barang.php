<?php 
include("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from barang");
include('header.php');
?>
<h1><center> LAPORAN BARANG </center></h1>
<?php
echo '<a href="input_barang.php" class="btn btn-primary btn-sm">Tambah Barang</a>';?>
</br>
</br>

<table class="table table-bordered" border="1">
	<tr>
    <td>No</td>
    <td>Nama Barang</td>
    <td>Kategori</td>
    <td>Satuan</td>
</tr>
  
  <?php
  include("koneksi.php");
  $query =mysqli_query($koneksi, "SELECT * FROM barang INNER JOIN kategori ON barang.id_barang = kategori.id_kategori INNER JOIN satuan ON barang.id_barang = satuan.id_satuan");
  $no=1;
  while($tampil=mysqli_fetch_array($query)){?>
    <tr>
      <td><?php echo $no++;?></td>
      <td><?php echo $tampil ['nama'];?></td>
      <td><?php echo $tampil ['nama_kategori'];?></td>
      <td><?php echo $tampil ['nama_satuan'];?></td>
    <?php }?>
 </table>
</body>
<?php
include('footer.php');
