<html>
  <head>
    <title>Pengajuan Kontak</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <div class="d-flex">
      <!-- Sidebar -->
      <div class="bg-secondary text-white p-3 vh-100%" style="width: 200px">
        <h5 class="text-center">User</h5>
        <ul class="nav flex-column mt-3">
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Helperlog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Helperfind</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Helperassist</a>
          </li>
        </ul>
      </div>

      <!-- Grid Konten -->
      <div class="p-4 flex-grow-1">
        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <h4 class="card-text">Pengajuan Kontrak</h4>
                <img src="{{ asset('gambarorang.png') }}" class="img-thumbnail" alt="Cinque Terre">
                <h5 class="card-text"> Nagisa Natsumi</h5>
                <p>Perawat Lansia</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-text text-center"> Form Pengajuan Kontrak</h5>
                <form action="/action_page.php">
                  <div class="form-group">
                    <label for="text">Nama Pengaju</label>
                    <input type="text" class="form-control" placeholder="Masukkan nama pengaju" id="text">
                  </div>
                  <div class="form-group">
                    <label for="text">Alamat Pengaju</label>
                    <input type="text" class="form-control" placeholder="Masukkan alamat lengkap anda" id="text">
                  </div>
                  <div class="form-group">
                    <label for="text">Penempatan Kerja</label>
                    <input type="text" class="form-control" placeholder="Masukkan saran penempatan kerja" id="text">
                  </div>
                  <div class="form-group form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox"> Ajukan Penempatan diluar domisili
                    </label>
                  </div>
                  <div class="dropdown">
                    <label for="dropdown">Rencana Masa Kontrak</label>
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                      Masa Kontrak
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">1 Bulan</a>
                      <a class="dropdown-item" href="#">2 Bulan</a>
                      <a class="dropdown-item" href="#">3 Bulan</a>
                      <a class="dropdown-item" href="#">6 Bulan</a>
                      <a class="dropdown-item" href="#">1 Tahun</a>
                    </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
