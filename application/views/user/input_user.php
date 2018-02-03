<?php echo validation_errors(); ?>

<?php echo form_open('user/input_simpan'); ?>

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
		<form>
			<div class="field-wrap">
				<label>
	              Username<span class="req">*</span>
	            </label>
	            <input type="text" name="username" size="30" style="width: 420px; height: 30px;">
			</div>
			<div class="field-wrap">
				<label>
	              Password<span class="req">*</span>
	            </label>
	            <input type="password" name="pass" size="30" style="width: 420px; height: 30px;>
			</div>
			<div class="field-wrap">
				<label>
	              Re-type Password<span class="req">*</span>
	            </label>
	            <input type="password" name="retype" size="30" style="width: 420px; height: 30px;>
			</div>
			<div class="field-wrap">
				<label>
	              E-mail<span class="req">*</span>
	            </label>
	            <input type="email" name="email" size="30" style="width: 420px; height: 30px;>
			</div>
			<div class="field-wrap">
				<label>
	              Nama<span class="req">*</span>
	            </label>
	            <input type="text" name="nama" size="30" style="width: 420px; height: 30px;>
			</div>
			<div class="field-wrap">
				<label>
	              NIM
	            </label>
	            <input type="text" name="nim" size="30" style="width: 420px; height: 30px;>
			</div>
			<div class="field-wrap">
				<label>
	              Alamat
	            </label>
	            <input type="text" name="alamat" size="30" style="width: 420px; height: 30px;>
			</div>
			<div class="field-wrap">
				<label>
	              Kota Asal
	            </label>
	            <div class="selected">
	            	<select name="kota" style="background: rgba(19, 35, 47, 0.9); width: 420px; height: 30px; color: #ffffff; padding: 5px 10px;">
						<option value="0">---Pilih Kota---</option>
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
	              Jenis Kelamin
	            </label>
	            <table>
	            	<tr>
	            		<td>
	            			<input type="radio" name="gender" value="P" style="border-radius: 100%; border:5px solid; height: 25px; width: 25px; z-index: 5; transition: border .25s linear; -webkit-transition: border .25s linear;">
	            		</td>
	            		<td>
	            			<label>Perempuan</label>
	            		</td>
	            		<td>
	            			<input type="radio" name="gender" value="L" style="border-radius: 100%; border:5px solid; height: 25px; width: 25px; z-index: 5; transition: border .25s linear; -webkit-transition: border .25s linear;">
	            		</td>
	            		<td>
	            			<label>Laki - Laki</label>
	            		</td>
	            	</tr>
	            </table>
			</div>
			<div class="field-wrap">
				<label>
					Hobi
				</label>
				<table>
					<tr>
						<td>
							<input type="checkbox" name="hobi" value="Coding" style="border-radius: 100%; border:5px solid; height: 25px; width: 25px; z-index: 5; transition: border .25s linear; -webkit-transition: border .25s linear;">
						</td>
						<td>
							<label>Coding</label>
						</td>
					</tr>
					<tr>
						<td>
							<input type="checkbox" name="hobi" value="PSan" style="border-radius: 100%; border:5px solid; height: 25px; width: 25px; z-index: 5; transition: border .25s linear; -webkit-transition: border .25s linear;">
						</td>
						<td>
							<label>PSan</label>
						</td>
					</tr>
					<tr>
						<td>
							<input type="checkbox" name="hobi" value="Bilyard" style="border-radius: 100%; border:5px solid; height: 25px; width: 25px; z-index: 5; transition: border .25s linear; -webkit-transition: border .25s linear;">
						</td>
						<td>
							<label>Bilyard</label>
						</td>
					</tr>
				</table>
			</div>
			<div class="field-wrap">
				<label>Deskripsi Pribadi</label>
				<textarea rows="7" cols="30" name="deskripsi" style="width: 420px; height: 100px;"></textarea>
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
	</div>
</body>
</html>

<?php echo form_close(); ?>