<?php 
include("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from kategori");
include('header.php');
?>
<h1><center> LAPORAN KATEGORI</center></h1>
<?php
echo '<a href="input_kategori.php" class="btn btn-primary btn-sm">Tambah kategori</a>';?>
</br>
</br>

<table class="table table-bordered" border="1">
	<tr>
        <td>Id_Kategori</td>
		<td>Nama</td>
	</tr>
<?php 
$no=1;
while($tampil=mysqli_fetch_array($query_view)){?>
	<tr>
		<td><?php echo $no++;?></td>
		<td><?php echo $tampil['nama_kategori'];?></td>
	</tr>
<?php }?>

</table>
<?php
include('footer.php');
