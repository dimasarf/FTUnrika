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
    <link href="/css/styles.css" rel="stylesheet">    
</head>
<body style="width: 100%">
    <nav class="nav justify-content-center bg-unrika-ungu nav-top" style="width: 100%">
      <a class="nav-link " href="#">Active link</a>
      <a class="nav-link" href="#">Link</a>
      <a class="nav-link " href="#">Disabled link</a>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-unrika-kuning sticky-top" id="nav-bottom" style="width: 100%">
        <a class="navbar-brand" href="/">
            <img src="/images/UNRIKALOGO.png" alt="" width="90em">          
           
            <span class="ml-3">FAKULTAS TEKNIK</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse p-4 ml-auto" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarFakultas" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fakultas <span class="sr-only">(current)</span></a>
              <div class="dropdown-menu bg-unrika-kuning" aria-labelledby="navbarFakultas" style="border: 0px">
                <a class="dropdown-item" href="/visi-misi">Visi Misi</a>
                <a class="dropdown-item" href="/struktur/6">Struktur Organisasi</a>
                <a class="dropdown-item" href="/struktur/7">Daftar Dosen</a>
            </div>
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
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarBerita" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Berita
                </a>
              <div class="dropdown-menu bg-unrika-kuning" aria-labelledby="navbarBerita" style="border: 0px">
                  <a class="dropdown-item" href="/more/1">Berita</a>
                  <a class="dropdown-item" href="/more/5">Pengumuman</a>
                  {{-- <div class="dropdown-divider"></div> --}}
              </div>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Kemahasiswaan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/more/8">Jurnal Dosen</a>
            </li>
          </ul>          
        </div>
    </nav>

    @section('carousel')
        @show
    

    <div class="container-fluid">
    @section('berita')
        @show
      

      {{-- FOOTER --}}
      <div class="row bg-unrika-ungu " >
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
        <div class="col-xs-4 col-lg-4 col-sm-4 col-md-4">
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
        <div class="col-xs-4 col-lg-4 col-sm-4 col-md-4">
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
          <hr class="hr-copyright mt-5">
          <p class="copyright ml-5">Copyright © 2019 Fakultas Teknik UNRIKA Batam. All Rights Reserved</p>   
        </div>
        
      </div>
      {{-- END Footer --}}
      
    </div>
</body>
</html>