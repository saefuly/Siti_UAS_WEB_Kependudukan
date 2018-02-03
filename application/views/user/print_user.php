<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        table{
            border-collapse: collapse;
            width: 50%;
            margin: 0 auto;
        }
        table th{
            border: 1px solid #000;
            padding: 3px;
            font-weight: bold;
            text-align: center;
        }
        table td{
            border: 1px solid #000;
            padding: 3px;
            vertical-align: top;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Data User</h1>
    <table>
        <tr>
            <td>Username </td>
            <td><?php echo $user_detail['username']; ?></td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td><?php echo $user_detail['email']; ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?php echo $user_detail['nama']; ?></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td><?php echo $user_detail['nim']; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><?php echo $user_detail['alamat']; ?></td>
        </tr>
        <tr>
            <td>Kota Asal</td>
            <td><?php echo $user_detail['alamat']; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $user_detail['jenis_kelamin']; ?></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td><?php echo $user_detail['hobi']; ?></td>
        </tr>
        <tr>
            <td>Deskripsi Pribadi</td>
            <td><?php echo $user_detail['deskripsi']; ?></td>
        </tr>
    </table>
</body>
</html>