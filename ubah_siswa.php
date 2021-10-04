<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php
    include "koneksi.php";
    $qry_siswa=mysqli_query($koneksi, "select * from siswa where id_siswa = '".$_GET['id_siswa']."'");
    $dt_siswa=mysqli_fetch_array($qry_get_siswa);
    ?>
    <h3>Tambah Siswa</h3>
    <form action="proses_tambah_siswa.php" method="POST">
        <input type="hidden" name="id_siswa" value= "<?=$dt_siswa['id_siswa']?>">
        Nama siswa :
        <input type="text" name="nama_siswa" value="<?=$dt_siswa['nama_siswa']?>" class="form-control">
        Tanggal Lahir :
        <input type="date" name="tanggal_lahir" value="<?=$dt_siswa['tanggal_lahir']?>" class="form-control">
        Gender :
        <select name="gender" class="form-control">
            <option></option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
        </select>
        Alamat :
        <textarea name="alamat" class="form-control" rows="4"><?=$dt_siswa['alamat']?></textarea>
        Kelas : 
        <select name="id_kelas" class="form-control">
            <option></option>
            <?php
            include "koneksi.php";
            $qry_kelas=mysqli_query($koneksi, "select * from kelas");
            while($data_kelas=mysqli_fetch_array($qry_kelas)){
                echo '<option
                value="'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas'].'<option>';
            }
            ?>
        </select>
        Username :
        <input type="text" name="username"
        value="<?=$dt_siswa['username']?>" class="form-control">
        Password :
        <input type="password" name="password" value=""
        class="form-control">
        <input type="submit" name="simpan" value="Ubah Siswa" class="btn btn-primary">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>