<?php 
include("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from satuan");
include('header.php');
?>
<h1><center> LAPORAN SATUAN </center></h1>
<?php
echo '<a href="input_satuan.php" class="btn btn-primary btn-sm">Tambah satuan</a>';?>
</br>
</br>

<table class="table table-bordered" border="1">
	<tr>
        <td>Id Satuan</td>
		<td>Nama</td>
	</tr>
<?php 
$no=1;
while($tampil=mysqli_fetch_array($query_view)){?>
	<tr>
		<td><?php echo $no++;?></td>
		<td><?php echo $tampil['nama_satuan'];?></td>
	</tr>
<?php }?>

</table>
<?php
include('footer.php');
