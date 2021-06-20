<?php
require_once "app/keranjang.php";
require_once "app/user.php";
require_once "app/produk.php";
$kat = new keranjang();
$user = new user();
$pro = new produk();
$dat1 = $user->tampil();
$dat2 = $pro->tampil();

if (isset($_POST['tsimpan'])) {
	$kat = new keranjang();
	$kat->input();
}

?>
<h2>INPUT DATA KERANJANG</h2>
	<table>
<form action="" method="POST">
		<tr>
			<th>USER</th>
			<td>
				<select name="iuser">
					<?php foreach ($dat1 as $row ) { ?>
					<option value="<?php echo $row['user_id']; ?>"><?php echo $row['user_nama']; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<th>PRODUK</th>
			<td>
				<select name="ipro">
					<?php foreach ($dat2 as $row ) { ?>
					<option value="<?php echo $row['produk_id']; ?>"><?php echo $row['produk_nama']; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<th>HARGA</th>
			<td><input type="text" name="iharga"></td>
		</tr>
		<tr>
			<th>JUMLAH</th>
			<td><input type="text" name="ijumlah"></td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" name="tsimpan" value="TAMBAH"></td>
		</tr>
	</table>
</form>
