<?php echo validation_errors(); ?>

<?php echo form_open('user/edit_simpan'); ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/styles.css">
	<title>Latihan</title>
</head>
<body>
	<div class="form">
		<h1>Sign Up</h1>
		<br>
		<?php foreach($user as $edit_user){ ?>
		<form>
			<div class="field-wrap">
				<label>
	              Username<span class="req">*</span>
	            </label>
	            <input type="text" name="username" value="<?php echo $edit_user->username ?>" style="width: 420px; height: 30px;">
			</div>
			<div class="field-wrap">
				<label>
	              E-mail<span class="req">*</span>
	            </label>
	            <input type="email" name="email" size="30" value="<?php echo $edit_user->email ?>" style="width: 420px; height: 30px;">
			</div>
			<div class="field-wrap">
				<label>
	              Nama<span class="req">*</span>
	            </label>
	            <input type="text" name="nama" value="<?php echo $edit_user->nama ?>" size="30" style="width: 420px; height: 30px;">
			</div>
			<div class="field-wrap">
				<label>
	              NIM
	            </label>
	            <input type="text" name="nim" value="<?php echo $edit_user->nim ?>" size="30" style="width: 420px; height: 30px;">
			</div>
			<div class="field-wrap">
				<label>
	              Alamat
	            </label>
	            <input type="text" name="alamat" value="<?php echo $edit_user->alamat ?>" size="30" style="width: 420px; height: 30px;">
			</div>
			<div class="field-wrap">
				<label>
	              Kota Asal
	            </label>
	            <div class="selected">
	            	<select name="kota" style="background: rgba(19, 35, 47, 0.9); width: 420px; height: 30px; color: #ffffff; padding: 5px 10px;">
						<option value="<?php echo $edit_user->kota_asal ?>"><?php echo $edit_user->kota_asal ?></option>
						<option value="jakarta">Jakarta</option>
						<option value="bandung">Bandung</option>
						<option value="bogor">Bogor</option>
						<option value="bekasi">Bekasi</option>
						<option value="depok">Depok</option>
					</select>
	            </div>
			</div>
			<div class="field-wrap">
				<label>
					Hobi
				</label>
				<input type="text" name="hobi" value="<?php echo $edit_user->hobi ?>" size="30" style="width: 420px; height: 30px;">
			</div>
			<div class="field-wrap">
				<label>Deskripsi Pribadi</label>
				<textarea rows="7" cols="30" name="deskripsi" value="<?php echo $edit_user->deskripsi ?>" style="width: 420px; height: 100px;"><?php echo $edit_user->deskripsi ?></textarea>
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