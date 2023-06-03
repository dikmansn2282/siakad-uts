<html>

<head>
    <title>Tambah User</title>
</head>

<body>
    <a href="index.php">Kembali ke Home</a>
    <br /><br />

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>ID</td>
                <td><input type="text" name="ID"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="Nama"></td>
            </tr>
            <tr>
                <td>Kode Mata Kuliah</td>
                <td><input type="text" name="Kode Mata Kuliah"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="Deskripsi"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if (isset($_POST['Submit'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $kode_matakuliah = $_POST['kode_matakuliah'];
        $deskripsi = $_POST['deskripsi'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO matakuliah(id,nama,kode_matakuliah,deskripsi) VALUES('$id','$nama','$kode_matakuliah','$deskripsi')");

        // Show message when user added
        echo "Mata Kuliah berhasil ditambahkan. <a href='index.php'>Lihat Mata Kuliah</a>";
    }
    ?>
</body>

</html>