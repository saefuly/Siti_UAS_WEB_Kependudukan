<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/style-admin.css">
    <title>CodeIgniter</title>
</head>
<body>
    <div class="header">
        <h3>Selamat Datang di Halaman Dashboard <?php echo $this->session->userdata("nama"); ?></h3>
        <a href="<?php echo base_url('index.php/login/logout'); ?>" style="color: white;">Logout</a>
    </div>
    <div class="form" style="max-width: 90%; margin-top: 50px; margin-left: 20px;">
        <h2 style="text-align: center;">LIST USER</h2>
        <table width="100%">
            <thead>
                <tr>
                    <th style="border-bottom: 1px solid #ffffff;">USERNAME</th>
                    <th style="border-bottom: 1px solid #ffffff;">NIM</th>
                    <th style="border-bottom: 1px solid #ffffff;">NAMA</th>
                    <th style="border-bottom: 1px solid #ffffff;">EMAIL</th>
                    <th colspan="4" style="border-bottom: 1px solid #ffffff;">AKSI</th>
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
                        <td>".anchor('user/cetakpdf/'.$u->username,'Print')"</td>
                    </tr>";
            }
            ?>
            <tr>
                <td><br><br><?php echo anchor('user/input','INPUT DATA USER');?></td>
            </tr>
        </table>
        <br>
        
        
    </div>
    
</body>
</html>
