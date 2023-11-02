<html>
<head>
    <title>Input Data Siswa</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styles.css'); ?>">
</head>
<body>
    <h1>Form Input Data Siswa</h1>
    <?php echo form_open('siswa/proses_input'); ?>
    Nama Siswa: <input type="text" name="nama"><br>
    NIS: <input type="text" name="nis"><br>
    Kelas: <input type="text" name="kelas"><br>
    Tanggal Lahir: <input type="date" name="tanggal_lahir"><br>
    Tempat Lahir: <input type="text" name="tempat_lahir"><br>
    Alamat: <input type="text" name="alamat"><br>
    Jenis Kelamin: 
    <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
    Agama: 
    <?php echo form_dropdown('agama', $agama_options, '', 'id="agama"'); ?>
    <br>
    <input type="submit" value="Submit">
    <?php echo form_close(); ?>
</body>
</html>
