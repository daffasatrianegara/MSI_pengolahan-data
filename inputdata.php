<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>From Input Data</title>
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
    <form action="controllers/tambahdata.php" method="POST">
        <div class="container-fluid mt-5 mb-2">
            <h1 class="judul text-center">Form Input Data</h1>
        </div>
        <div class="container-fluid">
            <div class="row row mt-3 justify-content-center">
                <div class="form-floating col-sm-5">
                    <input name="nama" type="text" class="form-control" id="nama" placeholder="name" />
                    <label for="nama" class="ms-2">Nama</label>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row row mt-3 justify-content-center">
                <div class="form-floating col-sm-5">
                    <input name="umur" type="number" class="form-control" id="umur" placeholder="age" />
                    <label for="umur" class="ms-2">Umur</label>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row mt-3 justify-content-center">
                <div class="col-sm-5">
                    <select name="jk" class="form-select w-100">
                        <option disabled selected>Jenis Kelamin</option>
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row row mt-3 justify-content-center">
                <div class="form-floating col-sm-5">
                    <input name="telepon" type="number" class="form-control" id="uangsk" placeholder="salary" />
                    <label for="uangsk" class="ms-2">Nomor Telepon</label>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row mt-3 justify-content-center">
                <div class="col-sm-5">
                    <select name="olahraga" class="form-select w-100">
                        <option disabled selected>Pilihlah olahraga yang paling anda sukai</option>
                        <option value="bola basket">Bola basket</option>
                        <option value="sepak bola">Sepak bola</option>
                        <option value="bulutangkis">Bulutangkis</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row row mt-3 justify-content-center">
                <div class="col col-sm-2">
                    <button name="tambah" id="submit" type="submit" class="btn btn-dark px-5 py-2">
                        Submit Data
                    </button>
                </div>
            </div>
        </div>
    </form>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
</body>

</html>