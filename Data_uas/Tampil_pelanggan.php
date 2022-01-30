<?php 
include("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from pelanggan");
include('header.php');
?>
<h1><center> LAPORAN PELANGGAN </center></h1>
<?php
echo '<a href="input_pelanggan.php" class="btn btn-primary btn-sm">Tambah Pelanggan</a>';?>
</br>
</br>

<table class="table table-bordered" border="1">
	<tr>
        <td>Id Pelanggan</td>
		<td>Nama Pelanggan</td>
		<td>No Telepon</td>
		<td>Status</td>
	</tr>
<?php 
$no=1;
while($tampil=mysqli_fetch_array($query_view)){?>
	<tr>
		<td><?php echo $no++;?></td>
		<td><?php echo $tampil['nama_pelanggan'];?></td>
		<td><?php echo $tampil['no_tlp'];?></td>
        <td><?php echo $tampil['status'];?></td>
<?php }?>

</table>
<?php
include('footer.php');