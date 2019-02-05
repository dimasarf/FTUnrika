<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fakultas Teknik - Universitas Riau Kepulauan</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Goudy+Bookletter+1911" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet">    
</head>
<body style="width: 100%">
    <nav class="nav justify-content-center bg-unrika-ungu nav-top" style="width: 100%">
      <a class="nav-link " href="#">Active link</a>
      <a class="nav-link" href="#">Link</a>
      <a class="nav-link " href="#">Disabled link</a>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-unrika-kuning sticky-top" id="nav-bottom" style="width: 100%">
        <a class="navbar-brand" href="#">
            <img src="/images/UNRIKALOGO.png" alt="" width="90em">          
           
            <span class="ml-3">FAKULTAS TEKNIK</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse p-4 ml-auto" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="#">Profil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarProdi" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Prodi
                  </a>
                <div class="dropdown-menu bg-unrika-kuning" aria-labelledby="navbarProdi" style="border: 0px">
                    <a class="dropdown-item" href="#">Teknik Mesin</a>
                    <a class="dropdown-item" href="#">Teknik Industri</a>
                    <a class="dropdown-item" href="#">Teknik Arsitektur</a>
                    <a class="dropdown-item" href="#">Teknik Sipil</a>
                    <a class="dropdown-item" href="#">Teknik Elektro</a>
                    {{-- <div class="dropdown-divider"></div> --}}
                    
                </div>
            </li>
            {{-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link" href="#">Kemahasiswaan</a>
            </li>
          </ul>          
        </div>
    </nav>

    {{-- Carousel --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="/images/gambar 1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/images/gambar 2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/images/gambar 3.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    {{-- End Carousel --}}

    <div class="container-fluid">
      {{--BERITA PILIHAN  --}}
      <div class="row mt-3 " style="width: 100%">
        <div class="col-xs-12 col-lg-12 col-sm-12 col-md-12 align">
          <div class="d-flex justify-content-center">
              <h3 class="header-section ">BERITA PILIHAN</h3>              
          </div>
          <hr>
        </div>
      </div>

      <div class="row kumpulan-berita d-flex justify-content-center">
          <div class="col-lg-3 col-xs-3 col-sm-3 col-md-3 berita">
              <div class="card" style="width: 18rem; border-width: 0px;">
                <img class="card-img-top" src="/images/gambar 2.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
          </div>
          <div class="col-lg-3 col-xs-3 col-sm-3 col-md-3 berita">
              <div class="card" style="width: 18rem; border-width: 0px;">
                <img class="card-img-top" src="/images/gambar 3.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
          </div>
          <div class="col-lg-3 col-xs-3 col-sm-3 col-md-3 berita">
              <div class="card" style="width: 18rem; border-width: 0px;">
                <img class="card-img-top" src="/images/gambar 1.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
          </div>
          <hr>
          <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 ">
            <button type="button" class="btn btn-outline-warning btn-block btn-lebih mb-4">Lebih banyak berita</button>  
          </div>
      </div>
      {{-- End BERITA PILIHAN --}}

      {{--PROFIL --}}
      <div class="row bg-unrika-ungu d-flex justify-content-center" >
        <div class="col-xs-12 col-lg-12 col-sm-12 col-md-12 align">
          <div class="d-flex justify-content-center mt-5 ml-3">
            <h3 class="title" style="color: white;">Profil Fakultas Teknik</h3>
          </div>
          <hr class="hr-profil">
        </div>
      </div>
      <div class="row bg-unrika-ungu d-flex justify-content-center" >
        <div class="col-lg-3 col-xs-3 col-sm-3 col-md-3">
          <img src="/images/teknikunrika.jpg" class="mb-5" alt="">
        </div>
        <div class="col-lg-8 col-xs-8 col-sm-8 col-md-8 mt-3">
          <br>
          <p class=" isi-visi">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi bibendum, leo et vulputate sagittis, 
            sem neque porttitor urna, non semper orci ligula eu nisl. Proin tincidunt at risus nec gravida. 
          </p>
          <a name="" id="" class="btn btn-outline-warning  btn-lebih mb-4" href="#" role="button" style="color: white;">Pelajari lebih lanjut</a>
        </div>        
      </div>
      {{-- END PROFIL --}}

      {{-- Pengumuman --}}
      <div class="row mt-3 " style="width: 100%">
        <div class="col-xs-12 col-lg-12 col-sm-12 col-md-12 align">
          <div class="d-flex justify-content-center">
              <h3 class="header-section ">Pengumuman</h3>              
          </div>
          <hr>
        </div>
      </div>
      <div class="row kumpulan-berita d-flex justify-content-center">
        <div class="col-lg-3 col-xs-3 col-sm-3 col-md-3 berita">
            <div class="card" style="width: 18rem; border-width: 0px;">
              <img class="card-img-top" src="/images/gambar 2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
        </div>
        <div class="col-lg-3 col-xs-3 col-sm-3 col-md-3 berita">
            <div class="card" style="width: 18rem; border-width: 0px;">
              <img class="card-img-top" src="/images/gambar 3.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
        </div>
        <div class="col-lg-3 col-xs-3 col-sm-3 col-md-3 berita">
            <div class="card" style="width: 18rem; border-width: 0px;">
              <img class="card-img-top" src="/images/gambar 1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
        </div>
        <hr>
        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 ">
          <button type="button" class="btn btn-outline-warning btn-block btn-lebih mb-4">Lebih banyak berita</button>  
        </div>
      </div>
      {{-- END Pengumuman --}}

      {{-- FOOTER --}}
      <div class="row bg-unrika-ungu " style="height: 20em" >
        <div class="col-xs-4 col-lg-4 col-sm-4 col-md-4">
          <img src="/images/UNRIKALOGO.png" alt="" width="90em" class="ml-4 mt-5">
          <table class="ml-5 mt-3">
            <tr>
              <td style="color: white"><i class="fas fa-phone"></i></td>
              <td style="color: white" class="ml-5 footer">0778 392752</td>
            </tr>
            <tr>
              <td style="color: white"><i class="fas fa-envelope-square mr-4"></i></td>
              <td style="color: white" class="ml-5 footer">info@unrika.ac.id</td>
            </tr>
          </table>
        </div>
        <div class="col-xs-2 col-lg-4 col-sm-2 col-md-4">
          <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
            <h5 class=" mt-3" style="color: white;">Layanan</h5>
            <table class="mt-3">
              <tr>
                <td style="color: white" class="footer">Link 1</td>
              </tr>
              <tr>
                <td style="color: white" class="footer">Link 2</td>
              </tr>
            </table>
          </div>
        </div>
        <div class="col-xs-2 col-lg-4 col-sm-2 col-md-4">
          <div class="col-sm-5 col-md-5 col-lg-5 col-xs-5">
            <h5 class=" mt-3" style="color: white;">Penerimaan</h5>
            <table class="mt-3">
              <tr>
                <td style="color: white" class="footer">Link 1</td>
              </tr>
              <tr>
                <td style="color: white" class="footer">Link 2</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="row bg-unrika-ungu">
        <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
          <hr class="hr-copyright">
          <p class="copyright ml-5">Copyright © 2019 Fakultas Teknik UNRIKA Batam. All Rights Reserved</p>   
        </div>
        
      </div>
      {{-- END Footer --}}
      
    </div>
</body>
</html>