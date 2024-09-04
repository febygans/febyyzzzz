<table border="1">
<tr>
<th>no</th>
<th>nama</th>
<th>tempat lahir</th>
<th>tgl. lahir</th>
<th>alamat</th>  
<th>gender</th>
</tr>
<?php
include 'koneksi.php';
$no = 1;
$data = mysqli_query($koneksi,"select ' from biodata");
while($d = mysqli_fetch_array($data)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $d['nama']; ?></td>
<td><?php echo $d['tempat_lahir']; ?></td>
<td><?php echo $d['tgl_lahir']; ?></td>
<td><?php echo $d['alamat']; ?></td>
<td><?php echo $d['gender']; ?></td>
<td>
<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
</td>
</tr>
<?php
}
?>