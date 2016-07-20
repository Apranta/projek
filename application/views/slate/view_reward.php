<style type="text/css">
	
	#gambar {
		background-image: url(http://localhost:8080/km/assets/img/sertifikat.jpg);
		width: 700px;
		height: 500px;
	}
	#nama {
    	padding-top: 31%;
		text-align: center;
	}

	#nip {
		padding: disabled;
		text-align: center;
		font-style: italic;
		font-size: 16px;
	}

	#sebagai {
		padding-top: 0%;
		text-align: center;
		font-style: italic;
		font-size: 20px;
	}

</style>
<body>
	<div id="gambar">
		<h2 id="nama"><?= $pegawai->nama ?></h2>
		<div id="nip"><?= $pegawai->nip ?></div>
		<p id="sebagai"><?= $reward->reward ?></p>
	</div>
	<a href="<?= base_url('index.php/pengguna/pegawai/download/'.$reward->id_reward) ?>">Download</a>
</body>