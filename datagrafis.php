<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="./styles/style.css">
    <title>Grafis Data</title>
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
    <div>
        <h1 class="text-center mt-3">Grafis Pie Chart</h1>
        <p class="text-center fs-3">Rata-rata Jenis Kelamin</p>
    </div>
    <div class="chart-container">
        <canvas id="myChart"></canvas>
    </div>
    <div class="mt-5">
        <h1 class="text-center">Grafis Bar Chart</h1>
        <p class="text-center fs-3">Rata-rata Olahraga Favorit</p>
    </div>
    <div class="chart-container2">
        <canvas id="myChart2"></canvas>
    </div>

    <?php
    include './controllers/koneksi.php';
    $pria = mysqli_query($con, "SELECT COUNT(*) as jumlah_pengguna_pria
    FROM data_user
    WHERE jenis_kelamin = 'pria'");
    $wanita = mysqli_query($con, "SELECT COUNT(*) as jumlah_pengguna_wanita
    FROM data_user
    WHERE jenis_kelamin = 'wanita'");
    $sepakbola = mysqli_query($con, "SELECT COUNT(*) as jumlah_pengguna_sepakbola
    FROM data_user WHERE olahraga = 'sepak bola'");
    $basket = mysqli_query($con, "SELECT COUNT(*) as jumlah_pengguna_basket
    FROM data_user WHERE olahraga = 'bola basket'");
    $bulutangkis = mysqli_query($con, "SELECT COUNT(*) as jumlah_pengguna_badminton
    FROM data_user WHERE olahraga = 'bulutangkis'");

    $pria_result = mysqli_fetch_assoc($pria);
    $wanita_result = mysqli_fetch_assoc($wanita);
    $sepakbola_result = mysqli_fetch_assoc($sepakbola);
    $basket_result = mysqli_fetch_assoc($basket);
    $bulutangkis_result = mysqli_fetch_assoc($bulutangkis);

    ?>
    <script>
        const ctx = document.getElementById("myChart").getContext("2d");
        const ctx2 = document.getElementById("myChart2").getContext("2d");

        const myChart = new Chart(ctx, {
            type: "pie",
            data: {
                labels: ["Pria", "Wanita"],
                datasets: [{
                    label: "Jumlah data jenis kelamin",
                    data: [<?php echo $pria_result['jumlah_pengguna_pria']; ?>, <?php echo $wanita_result['jumlah_pengguna_wanita']; ?>],
                    borderWidth: 1
                }],
            },
        });

        const myChart2 = new Chart(ctx2, {
            type: "bar",
            data: {
                labels: ["Sepak Bola", "Basket", "Bulutangkis"],
                datasets: [{
                    label: "Jumlah data olahraga favorit",
                    data: [<?php echo $sepakbola_result['jumlah_pengguna_sepakbola']; ?>, <?php echo $basket_result['jumlah_pengguna_basket']; ?>, <?php echo $bulutangkis_result['jumlah_pengguna_badminton']; ?>],
                    borderWidth: 1,
                }],
            },
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
</body>


</html>