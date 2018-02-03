<?php echo form_open_multipart('user/input_simpan'); ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/styles.css">
	<title>Latihan</title>
</head>
<body>
	<div class="form">
		<h1>Input Penduduk</h1>
		<br>
		<form>
			<div class="field-wrap">
				<label>
	              NIK<span class="req">*</span>
	            </label>
	            <input type="number" name="nik" max="9999999999999999" size="30" style=" height: 30px;" requirement>
			</div>
			<div class="field-wrap">
				<label>
	              Nama<span class="req">*</span>
	            </label>
	            <input type="text" name="nama" size="30" style="height: 30px;">
			</div>
			<div class="field-wrap">
				<label>
	              Email<span class="req">*</span>
	            </label>
	            <input type="email" name="email" size="30" style=" height: 30px;">
			</div>
			<div class="field-wrap">
				<label>
	              Tempat Lahir<span class="req">*</span>
	            </label>
	            <input type="text" name="tempat_lahir" size="30" style=" height: 30px;">
			</div>
			<div class="field-wrap">
				<label>
	              Tanggal Lahir<span class="req">*</span>
	            </label>
	            <input type="date" name="tanggl_lahir" size="30" style=" height: 30px;">
			</div>
			<div class="field-wrap">
				<label>
	              Alamat
	            </label>
	            <input type="text" name="alamat" size="30" style=" height: 30px;">
			</div>
			<div class="field-wrap">
				<label>
	              Kota Asal
	            </label>
	            <input type="text" name="kota_asal" size="30" style=" height: 30px;">
			</div>
			<div class="field-wrap">
				<label>
	              Agama
	            </label>
	            <div class="selected">
	            	<select name="agama" style="background: rgba(19, 35, 47, 0.9); width: 620px; height: 30px; color: #ffffff; padding: 5px 10px;">
						<option value="0">---Pilih Agama---</option>
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
	            <table>
	            	<tr>
	            		<td>
	            			<input type="radio" name="jenis_kelamin" value="P" style="border-radius: 100%; border:5px solid; height: 25px; width: 25px; z-index: 5; transition: border .25s linear; -webkit-transition: border .25s linear;">
	            		</td>
	            		<td>
	            			<label>Perempuan</label>
	            		</td>
	            		<td>
	            			<input type="radio" name="jenis_kelamin" value="L" style="border-radius: 100%; border:5px solid; height: 25px; width: 25px; z-index: 5; transition: border .25s linear; -webkit-transition: border .25s linear;">
	            		</td>
	            		<td>
	            			<label>Laki - Laki</label>
	            		</td>
	            	</tr>
	            </table>
			</div>
			<div class="field-wrap">
				<label>
	              Status
	            </label>
	            <div class="selected">
	            	<select name="status" style="background: rgba(19, 35, 47, 0.9); width: 620px; height: 30px; color: #ffffff; padding: 5px 10px;">
						<option value="0">---Pilih Status---</option>
						<option value="kawin">Kawin</option>
						<option value="belum kawin">Belum Kawin</option>
					</select>
	            </div>
			</div>
			<div class="field-wrap">
				<label>
	              Pekerjaan<span class="req">*</span>
	            </label>
	            <input type="text" name="pekerjaan" size="30" style=" height: 30px;">
			</div>
			<div class="field-wrap">
				<label>
	              Kewarganegaraan
	            </label>
	            <input type="text" name="kewarganegaraan" size="30" style=" height: 30px;">
			</div>
			
			<div class="field-wrap">
				<label>
					Hobi
				</label>
				<input type="text" name="hobi" size="30" style=" height: 30px;">
			</div>
			<div class="field-wrap">
				<label>Deskripsi Pribadi</label>
				<textarea rows="7" cols="30" name="deskripsi" style=" height: 100px;"></textarea>
			</div>
			<div class="field-wrap">
				    Select image to upload:
				    <input type="file" name="foto" id="fileToUpload" style="border:0px; height: 50px;">
				</form>
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