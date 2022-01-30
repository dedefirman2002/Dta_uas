<?php
include("koneksi.php");


if(isset($_POST['save'])){
	$query_input=mysqli_query($koneksi,"insert into transaksi(nama_transaksi,tgl_transaksi,harga,qty,id_barang,Diskon,id_pelanggan)
	values(
	'".$_POST['nama_transaksi']."',
    '".$_POST['tgl_transaksi']."',
    '".$_POST['harga']."',
    '".$_POST['qty']."',
    '".$_POST['id_barang']."',
    '".$_POST['Diskon']."',
	'".$_POST['id_pelanggan']."')");
	
	if($query_input){
	header('location:Tampil_transaksi.php');
	}else{
		echo mysqli_error();
	}
	}
include('header.php');
?>
<form method="POST">
<table class="table table-bordered" border="1">
	<tr>
		<td>Nama Transaksi</td>
		<td><input type="text" name="nama_transaksi class="form-control"></td>
	</tr>
    <tr>
		<td>Tanggal Transaksi</td>
		<td><input type="date" name="tgl_transaksi" class="form-control"></td>
	</tr>
    <tr>
    <td>Harga</td>
		<td><input type="text" name="harga" class="form-control"></td>
	</tr>	
    <td>Qty</td>
		<td><input type="text" name="qty" class="form-control"></td>
	</tr>
    <td>Barang</td>
		<td><input type="text" name="id_barang" class="form-control"></td>
	</tr>
    <td>Diskon</td>
		<td><input type="text" name="Diskon" class="form-control"></td>
	</tr>
    <td>Id_pelanggan</td>
		<td><input type="text" name="id_pelanggan" class="form-control"></td>
	</tr>
	<tr>
		<td><input type="submit" name="save" class="btn btn-danger"></td>
	</tr>
</table>
</form>
<?php
include('footer.php');