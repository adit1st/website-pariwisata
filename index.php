<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Lombok Tour 1st</title>
</head>
<body>

<!-- Navbar -->
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Lombok Tour 1st</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house-door"></i> </i>Beranda</a>
        <a class="nav-link" href="#"><i class="bi bi-bicycle"></i> Lokasi Wisata</a>
        <a class="nav-link" href="#"><i class="bi bi-clipboard-check"></i> Versi Website</a>
      </div>
    </div>
  </div>
</nav>
</div>

<!-- Header -->
<Header>
<div class="">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/wall 1.jpg" class="d-block w-100" alt="Pantai Sekotong">
      <div class="carousel-caption d-none d-md-block">
        <h5>Tour Wisata Lombok</h5>
        <p>Perjalanan Anda Terjamin Aman</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/wall 2.jpg" class="d-block w-100" alt="Gunung Rinjani">
      <div class="carousel-caption d-none d-md-block">
        <h5>Cari Lokasi Tour Anda</h5>
        <p>Lakukan Perjalanan ke Tempat Wisata di Lombok</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/wall 3.jpg" class="d-block w-100" alt="Gili Trawangan">
      <div class="carousel-caption d-none d-md-block">
        <h5>Harga Bersahabat</h5>
        <p>Lakukan Perjalanan Tanpa Menguras Dompet Anda</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<div class="mt-4">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Cari Lokasi Wisata" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Pencarian</button>
        </form>
      </div>
    </div>
  </div>
</div>
</Header>

<!-- Content -->
<div class="mt-4">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
        <img src="image/Danau-Segara-Anak.jpg" class="card-img-top" alt="Danau Segara Anak">
        <div class="card-body">
        <h5 class="card-title">Danau Segara Anak</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalPersyaratan">
        Lakukan Tour
        </button>
        </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
        <img src="image/Gili-Nanggu.jpg" class="card-img-top" alt="Gili Nanggu">
        <div class="card-body">
        <h5 class="card-title">Gili Nanggu</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalPersyaratan">
        Lakukan Tour
        </button>
        </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
        <img src="image/Gunung-Rinjani.jpg" class="card-img-top" alt="Gunung Rinjani">
        <div class="card-body">
        <h5 class="card-title">Gunung Rinjani</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalPersyaratan">
        Lakukan Tour
        </button>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="mt-4">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
        <img src="image/Pantai-Sekotong.jpg" class="card-img-top" alt="Pantai Sekotong">
        <div class="card-body">
        <h5 class="card-title">Pantai Sekotong</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalPersyaratan">
        Lakukan Tour
        </button>
        </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
        <img src="image/Pantai-Senggigi.jpg" class="card-img-top" alt="Pantai Senggigi">
        <div class="card-body">
        <h5 class="card-title">Pantai Senggigi</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalPersyaratan">
        Lakukan Tour
        </button>
        </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
        <img src="image/Taman-Narmada.jpg" class="card-img-top" alt="Taman Narmada">
        <div class="card-body">
        <h5 class="card-title">Taman Narmada</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalPersyaratan">
        Lakukan Tour
        </button>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<Footer>
<div class="mt-4">
<div class="card text-center">
  <div class="card-body">
    <h5 class="card-title">Email <i class="bi bi-envelope"></i> : adityarizkypm@gmail.com</h5>
    <p class="card-text">Copyright &#169; Adit1st 2021</p>
  </div>
</div>
</div>
</Footer>

<!-- Modal -->
<div class="modal fade" id="ModalPersyaratan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Persyaratan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form>
         <div class="row">
          <div class="col">
            <input type="text" class="form-control" placeholder="Nama Depan" aria-label="First name">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Nama Belakang" aria-label="Last name">
          </div>
         </div>
         <div class="mt-3">
          <input type="email" class="form-control" placeholder="Alamat Email" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>