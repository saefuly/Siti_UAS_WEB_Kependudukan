<!DOCTYPE html>
<html>
<head>
  <title>Report Table</title>
  
</head>
<body>
	<div id="outtable">
	  <table>
	  	<thead>
	  		<tr>
	  			<th class="short">#</th>
	  			<th class="normal">NIK</th>
	  			<th class="normal">Nama</th>
          <th class="normal">Email</th>
          <th class="normal">JK</th>
          <th class="normal">Agama</th>
          <th class="normal">Kota</th>
	  		</tr>
	  	</thead>
	  	<tbody>
	  		<?php $no=1; ?>
	  		<?php foreach($user as $u): ?>
	  		  <tr>
	  			<td><?php echo $no; ?></td>
	  			<td><?php echo $u->nik; ?></td>
          <td><?php echo $u->nama; ?></td>
          <td><?php echo $u->email; ?></td>
          <td><?php if ($u->jenis_kelamin == 'L'){ echo "Laki-laki"; } else { echo "Perempuan"; } ?></td>
          <td><?php echo $u->agama; ?></td>
          <td><?php echo $u->kota_asal; ?></td>
	  		  </tr>
	  		<?php $no++; ?>
	  		<?php endforeach; ?>
	  	</tbody>
	  </table>
	 </div>
</body>
</html>