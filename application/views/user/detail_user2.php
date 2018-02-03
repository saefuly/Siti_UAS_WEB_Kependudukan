 <!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/styles.css">
	<title>Latihan</title>
</head>
<body>
	<div class="form">
		<h1>Detail User</h1>
		<br>
		<table style="width: 100%">
			<tr>
				<td style="width: 200px">NIK </td>
				<td style="width: 300px"><?php echo $user_detail['nik']; ?></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><?php echo $user_detail['nama']; ?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><?php echo $user_detail['email']; ?></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td><?php echo $user_detail['tempat_lahir']; ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><?php echo $user_detail['alamat']; ?></td>
			</tr>
			<tr>
				<td>Kota Asal</td>
				<td><?php echo $user_detail['kota_asal']; ?></td>
			</tr>
			<tr>
				<td>Agama</td>
				<td><?php echo $user_detail['agama']; ?></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><?php echo $user_detail['jenis_kelamin']; ?></td>
			</tr>
			<tr>
				<td>Status</td>
				<td><?php echo $user_detail['status']; ?></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td><?php echo $user_detail['pekerjaan']; ?></td>
			</tr>
			<tr>
				<td>Kewarganegaraan</td>
				<td><?php echo $user_detail['kewarganegaraan']; ?></td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td><?php echo $user_detail['hobi']; ?></td>
			</tr>
			<tr>
				<td>Deskripsi Pribadi</td>
				<td><?php echo $user_detail['deskripsi']; ?></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td><img src="<?php echo base_url() ?>/assets/upload/<?php echo $user_detail['foto']; ?>" class="img-admin" width="200px"></td>
			</tr>
			<tr>
				<td style="padding-top: 40px; font-size: 20px;"><a href="<?php echo site_url() ?>/user/index">Back</a></td>
				<!--<td style="padding-top: 40px; font-size: 20px;"><a href="<?php echo site_url() ?>/user/cetakpdf">Print</a></td>-->
			</tr>
		</table>
	</div>
</body>
</html>