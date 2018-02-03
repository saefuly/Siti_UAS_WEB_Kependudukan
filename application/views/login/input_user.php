<?php echo validation_errors(); ?>

<?php echo form_open('user/input_simpan'); ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/style-dashboard.css">
	<title></title>
</head>
<body>
	<div class="header">
		<div class="header-left">
			<h1 class="my-h1">Dashboard</h1>
		</div>
		<div class="header-right logout">
			<a href="<?php echo base_url('index.php/login/logout'); ?>">Logout</a>
		</div>
	</div>
	<div class="content-left">
		<img src="<?php echo base_url() ?>/assets/img/admin.png" class="img-admin">
		<h3 style="text-align: center;"><?php echo $this->session->userdata("nama"); ?></h3>
		<br>
		<ul>
			<li><?php echo anchor('user/input','Input Data User');?></li>
			<!--<li><a href="#">News</a></li>
			<li><a href="#">Contact</a></li>-->
		</ul>
	</div>
	<div class="content-right">
		<div class="box-medium">
			<h1 class="content-box">List Penduduk</h1>
			<table>
				<thead>
	                <tr>
	                    <th>USERNAME</th>
	                    <th>NIM</th>
	                    <th>NAMA</th>
	                    <th>EMAIL</th>
	                    <th colspan="3">AKSI</th>
	                </tr>
	            </thead>
	            
	            <?php
	            foreach ($user as $u){
	                echo "<tr>
	                        <td>$u->username</td>
	                        <td>$u->nim</td>
	                        <td>$u->nama</td>
	                        <td>$u->email</td>
	                        <td>".anchor('user/detail/'.$u->username,'Detail')."</td>
	                        <td>".anchor('user/edit/'.$u->username,'Edit')."</td>
	                        <td>".anchor('user/delete/'.$u->username,'Delete')."</td>
	                    </tr>";
	            }
	            ?>
			</table>
			<p class="button"><?php echo anchor('user/input','INPUT DATA USER');?></p>
		</div>
	</div>
</body>
</html>

<?php echo form_close(); ?>