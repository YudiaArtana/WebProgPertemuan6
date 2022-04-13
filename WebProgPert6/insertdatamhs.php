<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h2>Tanbah Data Mahasiswa</h2>
    <form action="dbinsertdatamhs.php" method="post">
        NIM :
        <div>
            <input type="text" name="txNIM">
        </div>
        NAMA :
        <div>
            <input type="text" name="txNAMA">
        </div>
        Jenis Kelamin :
        <div>
            <select name="name" id="">
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        Tanggal Lahir :
        <div>
            <input type="date" name="txTGL">
        </div>
        Jurusan :
        <div>
            <select name="txJUR" id="">
                <option value="HUKUM">HUKUM</option>
                <option value="PERTANIAN">PERTANIAN</option>
                <option value="MANAJEMEN">MANAJEMEN</option>
            </select>
        </div>
        
    </form>
</body>
</html>