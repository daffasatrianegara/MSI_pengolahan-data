<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Data User</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand fs-3 ms-3" href="inputdata.php">DataMatica</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-2">
                    <a class="nav-link mt-1 text-light me-2" href="inputdata.php">Input Data</a>
                    <a class="nav-link mt-1 text-light me-2" href="datauser.php">Data User</a>
                    <a class="nav-link mt-1 text-light" href="datagrafis.php">Data Grafis</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid mt-3 mb-2">
        <h1 class="text-center">List Data Pendaftaran</h1>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover w-auto mx-auto">
            <thead class="table-dark text-center">
                <tr>
                    <th>Nomor</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Jenis Kelamin</th>
                    <th>Nomor Telepon</th>
                    <th>Olahraga Favorit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="text-center text-capitalize">
                <?php
                include './controllers/koneksi.php';
                $users = mysqli_query($con, "SELECT * FROM data_user ORDER BY id");
                $no = 1;
                foreach ($users as $row) {
                    echo "<tr>
                            <td>$no</td>
                            <td>" . $row['nama'] . "</td>
                            <td>" . $row['umur'] . "</td>
                            <td>" . $row['jenis_kelamin'] . "</td>
                            <td>" . $row['hp'] . "</td>
                            <td>" . $row['olahraga'] . "</td>
                            <td>
                            <a href='./controllers/delete.php?id=$row[id]'>Delete</a>
                            </td>
                        </tr>";
                    $no++;
                } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
</body>


</html>