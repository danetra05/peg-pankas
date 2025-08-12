<!DOCTYPE html>
 <html><head>
 	<title>Laporan Data Asset</title>


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
   table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
  },

</style>
</head><body>
  <h4 style="font-weight:bold; margin-bottom: 10px; text-align: center;">PEMERINTAH KABUPATEN BREBES<br>
  DINAS KOMUNIKASI INFORMATIKA DAN STATISTIK</h4>
  <p style="font-style: italic; text-align: center;">Jl. MT Haryono No.76 Saditan Baru Kecamatan Brebes Kabupaten Brebes 52212</p>
  <hr>
  <h4 style="font-weight:bold; margin-bottom: 50px; text-align: center;">DATA ASET</h4>
  
  	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Kode</th>
				<th>Nama Aset</th>
				<th>Kategori</th>
				<th>Kualitas</th>
				<th>Lokasi Aset</th>
				<th>Harga</th>
				<th>Toko Pembelian</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; foreach($aset as $a): ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $a['kode'] ?></td>
				<td><?= $a['nama_aset'] ?></td>
				<td><?= $a['kategori'] ?></td>
				<td><?= $a['kualitas'] ?></td>
				<td><?= $a['lokasi_aset'] ?></td>
				<td><?= number_format($a['harga_pembelian'], 0, ',', '.') ?></td>
				<td><?= $a['toko_pembelian'] ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
  <br>
  <br>
  <div style="position: absolute;top: 95%">
   <hr >
   <p style="font-style: italic;">Dicetak pada tanggal <?= date('H M Y') ?>.
   </p>
 </div>
</p>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body></html>