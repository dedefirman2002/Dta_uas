<?php
include("koneksi.php");


if(isset($_POST['save'])){
	$query_input=mysqli_query($koneksi,"insert into barang(nama,kategori_id,satuan_id)
	values(
	'".$_POST['nama']."',
	'".$_POST['kategori_id']."',
	'".$_POST['satuan_id']."')");
	
	if($query_input){
	header('location:Tampil_barang.php');
	}else{
		echo mysqli_error();
	}
	}
include('header.php');
?>
<form method="POST">
<table border="1" class="table table-bordered">
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" class="form-control"></td>
	</tr>
    <tr>
		<td>Kategori_Id</td>
		<td><input type="text" name="kateori_id" class="form-control"></td>
	</tr>
  <tr>
    <td>Satuan_Id</td>
		<td><input type="text" name="satuan_id" class="form-control"></td>
	</tr>	
	<tr>
		<td><input type="submit" name="save" class="btn btn-danger"></td>
	</tr>
</table>
</form>
<?php
include('footer.php');
