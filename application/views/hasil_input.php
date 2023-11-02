<html>
<head>
    <title>Hasil Input Data Siswa</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styles.css'); ?>">
</head>
<body>
    <h1>Hasil Input Data Siswa</h1>
    <p>Nama Siswa: <?php echo $nama; ?></p>
    <p>NIS: <?php echo $nis; ?></p>
    <p>Kelas: <?php echo $kelas; ?></p>
    <p>Tanggal Lahir: <?php echo $tanggal_lahir; ?></p>
    <p>Tempat Lahir: <?php echo $tempat_lahir; ?></p>
    <p>Alamat: <?php echo $alamat; ?></p>
    <p>Jenis Kelamin: <?php echo $jenis_kelamin; ?></p>
    <p>Agama: <?php echo $agama; ?></p>
    <a href="<?php echo site_url('siswa/input'); ?>">Kembali ke Form Input</a>
</body>
</html>
