<?php echo validation_errors(); ?>

<?php echo form_open_multipart('user/edit_simpan'); ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/styles.css">
	<title>Latihan</title>
</head>
<body>
	<div class="form">
		<h1>Edit Penduduk</h1>
		<br>
		<?php foreach($user as $edit_user){ ?>
		<form>
			<div class="field-wrap">
				<label>
	              NIK<span class="req">*</span>
	            </label>
	            <input type="text" name="nik" value="<?php echo $edit_user->nik ?>" size="30" style="height: 30px;">
			</div>
			<div class="field-wrap">
				<label>
	              Nama<span class="req">*</span>
	            </label>
	            <input type="text" name="nama" value="<?php echo $edit_user->nama ?>" size="30" style="height: 30px;">
			</div>
			<div class="field-wrap">
				<label>
	              Email<span class="req">*</span>
	            </label>
	            <input type="email" name="email" value="<?php echo $edit_user->email ?>" size="30" style="height: 30px;">
			</div>
			<div class="field-wrap">
				<label>
	              Tempat Lahir<span class="req">*</span>
	            </label>
	            <input type="text" name="tempat_lahir" value="<?php echo $edit_user->tempat_lahir ?>" size="30" style="height: 30px;">
			</div>
			<div class="field-wrap">
				<label>
	              Alamat
	            </label>
	            <input type="text" name="alamat" value="<?php echo $edit_user->alamat ?>" size="30" style="height: 30px;">
			</div>
			<div class="field-wrap">
				<label>
	              Kota Asal
	            </label>
	            <input type="text" name="kota_asal" value="<?php echo $edit_user->kota_asal ?>" size="30" style="height: 30px;">
			</div>
			<div class="field-wrap">
				<label>
	              Agama
	            </label>
	            <div class="selected">
	            	<select name="agama" style="background: rgba(19, 35, 47, 0.9); width: 620px; height: 30px; color: #ffffff; padding: 5px 10px;">
						<option value="<?php echo $edit_user->agama ?>"><?php echo $edit_user->agama ?></option>
						<option value="islam">Islam</option>
						<option value="kristen">Kristen</option>
						<option value="hindu">Hindu</option>
						<option value="budha">Budha</option>
						<option value="konghucu">Konghucu</option>
					</select>
	            </div>
			</div>
			<div class="field-wrap">
				<label>
	              Jenis Kelamin
	            </label>
	            <input type="text" name="jenis_kelamin" value="<?php echo $edit_user->jenis_kelamin ?>" size="30" style="height: 30px;">
			</div>
			<div class="field-wrap">
				<label>
	              Status
	            </label>
	            <div class="selected">
	            	<select name="status" style="background: rgba(19, 35, 47, 0.9); width: 620px; height: 30px; color: #ffffff; padding: 5px 10px;">
						<option value="<?php echo $edit_user->status ?>"><?php echo $edit_user->status ?></option>
						<option value="kawin">Kawin</option>
						<option value="belum kawin">Belum Kawin</option>
					</select>
	            </div>
			</div>
			<div class="field-wrap">
				<label>
	              Pekerjaan<span class="req">*</span>
	            </label>
	            <input type="text" name="pekerjaan" value="<?php echo $edit_user->pekerjaan ?>" size="30" style="height: 30px;">
			</div>
			<div class="field-wrap">
				<label>
	              Kewarganegaraan
	            </label>
	            <input type="text" name="kewarganegaraan" value="<?php echo $edit_user->kewarganegaraan ?>" size="30" style="height: 30px;">
			</div>
			
			<div class="field-wrap">
				<label>
					Hobi
				</label>
				<input type="text" name="hobi" value="<?php echo $edit_user->hobi ?>" size="30" style="height: 30px;">
			</div>
			<div class="field-wrap">
				<label>Deskripsi Pribadi</label>
				<textarea rows="7" cols="30" name="deskripsi" value="<?php echo $edit_user->hobi ?>" style="height: 100px;"></textarea>
			</div>
			<div class="field-wrap">
				<label>Select image to upload:</label>
				<input type="file" name="foto" id="fileToUpload" style="border:0px; height: 50px;">
			</div>
			<div class="field-wrap">
				<table>
					<tr>
						<td style="width: 250px;">
							<button class="button button-block" type="submit" name="submit" value="kirim">Kirim</button>
						</td>
						<td style="width: 250px;">
							<button class="button button-block" type="reset">Hapus</button>
						</td>
					</tr>
				</table>
			</div>
		</form>
		<?php } ?>
	</div>
</body>
</html>

<?php echo form_close(); ?>