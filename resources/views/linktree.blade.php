<html>
  <head>
    <title>SAKINAHMART</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <style>
      .body {
        background-color: #b2afaf;
      }
      .logo-sakinah {
        border-radius: 50%;
        height: 95px;
        display: block;
        margin: auto;
      }
      .btn {
        display: flex;
        margin: auto;
        width: 600px;
        border-color: white;
        border-radius: 10px;
      }
      .social-wrapper {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px; /* optional spacing */
      }
      .btn-t {
        display: block;
        margin: auto;
        width: 10px;
        border-color: white;
        border-radius: 10px;
        background-color: #ffffff;
      }
      .catalog {
        height: 45px;
      }
      .hover-grow {
        transition: transform 0.3s ease;
      }
      .hover-grow:hover {
        transform: scale(1.01);
        background-color: white;
      }
      .text {
        color: #9c9b9b;
      }
      .btn-bottom {
        display: block;
        margin: auto;
        width: 275px;
        height: 50px;
        border-color: white;
        border-radius: 30px;
        background-color: #e4e4e4;
      }
      .icon-btn {
        background-color: transparent;
        border: none;
        font-size: 30px;
        margin: 0 5px;
      }
      .hover-grow-i {
        transition: transform 0.3s ease;
      }
      .hover-grow-i:hover {
        transform: scale(1.1);
        background-color: #b2afaf;
      }
      .hover-grow-b {
        transition: transform 0.3s ease;
      }
      .hover-grow-b:hover {
        background-color: #ffffff;
      }
      .cookie {
        font-size: 9px;
        padding-bottom: 10px;
        padding-left: 10px;
        color: black;
        text-decoration: none;
      }
    </style>
  </head>
  <body class="body">
    <img src="{{ asset('logo-sakinah.webp') }}" alt="Logo Sakinah" class="logo-sakinah mt-5" />
    <h5 class="text-white text-center mt-3"><b>SAKINAHMART</b></h5>
    <h6 class="text-white text-center mt-2 small">
      <b>Sahabat Belanja Keluarga Indonesia Lengkap, Murah dan Bersahabat</b>
    </h6>
    <div class="d-flex justify-content-center flex-wrap mt-4">
      <a
        href="https://www.instagram.com/sakinah_mart"
        target="_blank"
        style="text-decoration: none"
      >
        <button class="icon-btn hover-grow-i">
          <i class="fab fa-instagram" style="color: #ffffff"></i>
        </button>
      </a>
      <a
        href="mailto:sakinahmart93@gmail.com"
        target="_blank"
        style="text-decoration: none"
      >
        <button class="icon-btn hover-grow-i">
          <i class="far fa-envelope" style="color: #ffffff"></i>
        </button>
      </a>
      <a
        href="https://www.facebook.com/Sakinahritelsyariah"
        target="_blank"
        style="text-decoration: none"
      >
        <button class="icon-btn hover-grow-i">
          <i class="fab fa-facebook" style="color: #ffffff"></i>
        </button>
      </a>
      <a
        href="https://www.youtube.com/channel/UCBNk6rIvyuUp2xiTukUS8MQ"
        target="_blank"
        style="text-decoration: none"
      >
        <button class="icon-btn hover-grow-i">
          <i class="fab fa-youtube" style="color: #ffffff"></i>
        </button>
      </a>
      <a
        href="https://tiktok.com/@sakinah.mart"
        target="_blank"
        style="text-decoration: none"
      >
        <button class="icon-btn hover-grow-i">
          <i class="fab fa-tiktok" style="color: #ffffff"></i>
        </button>
      </a>
      <a
        href="https://api.whatsapp.com/send?phone=6281232150935"
        target="_blank"
        style="text-decoration: none"
      >
        <button class="icon-btn hover-grow-i">
          <i class="fab fa-whatsapp" style="color: #ffffff"></i>
        </button>
      </a>
    </div>

    <div>
      <!-- KATALOG -->
      <h6 class="text-white text-center mt-5">KATALOG</h6>
      <div class="mt-3">
        <div
          class="btn btn-light shadow hover-grow px-3 py-2 d-flex align-items-center justify-content-between text-left social-wrapper"
        >
          <a
            href="https://sakinahmart.com/katalog-promo/"
            target="_blank"
            rel="noopener noreferrer"
            class="d-flex align-items-center flex-grow-1 text-decoration-none text-dark"
          >
            <img
              src="{{ asset('catalog-sakinah.webp') }}"
              alt="Catalog-Sakinah"
              class="catalog mr-3"
            />
            <div class="flex-grow-1">
              <h6 class="text mb-0 text-center">
                E-Katalog Edisi 80 Periode 16-31 Maret 2025
              </h6>
            </div>
          </a>
          <div class="ml-3">
            <button
              class="p-0 bg-transparent border-0"
              type="button"
              id="menuButton"
              data-toggle="dropdown"
            >
              ⋮
            </button>
            <div
              class="dropdown-menu dropdown-menu-right"
              aria-labelledby="menuButton"
            >
              <a class="dropdown-item" href="#">Bingung bikin pop up pak</a>
            </div>
          </div>
        </div>
      </div>
      <!-- MEMBER SAKINAHKU -->
      <h6 class="text-white text-center mt-5">MEMBER SAKINAHKU</h6>
      <div class="mt-3">
        <div
          class="btn btn-light shadow hover-grow px-3 py-2 d-flex align-items-center justify-content-between text-left"
        >
          <a
            href="https://sakinahmart.com/form-member/"
            target="_blank"
            rel="noopener noreferrer"
            class="d-flex align-items-center flex-grow-1 text-decoration-none text-dark"
          >
            <img
              src="{{ asset('daftar-member-sakinah.webp') }}"
              alt="Member-Sakinah"
              class="catalog mr-3"
            />
            <div class="flex-grow-1">
              <h6 class="text mb-0 text-center">Daftar Member</h6>
            </div>
          </a>
          <div class="ml-3">
            <button
              class="p-0 bg-transparent border-0"
              type="button"
              id="menuButton"
              data-toggle="dropdown"
            >
              ⋮
            </button>
            <div
              class="dropdown-menu dropdown-menu-right"
              aria-labelledby="menuButton"
            >
              <a class="dropdown-item" href="#">Bingung bikin pop up pak</a>
            </div>
          </div>
        </div>
      </div>
      <!-- DELIVERY ORDER -->
      <h6 class="text-white text-center mt-5">DELIVERY ORDER</h6>
      <div class="mt-3">
        <div
          class="btn btn-light shadow hover-grow px-3 py-2 d-flex align-items-center justify-content-between text-left"
        >
          <a
            href="https://linktr.ee/sakinahmartdelivery"
            target="_blank"
            rel="noopener noreferrer"
            class="d-flex align-items-center flex-grow-1 text-decoration-none text-dark"
          >
            <img
              src="{{ asset('sakinah-delivery.webp') }}"
              alt="Delivery-Order"
              class="catalog mr-3"
            />
            <div class="flex-grow-1">
              <h6 class="text mb-0 text-center">Minimarket</h6>
            </div>
          </a>
          <div class="ml-3">
            <button
              class="p-0 bg-transparent border-0"
              type="button"
              id="menuButton"
              data-toggle="dropdown"
            >
              ⋮
            </button>
            <div
              class="dropdown-menu dropdown-menu-right"
              aria-labelledby="menuButton"
            >
              <a class="dropdown-item" href="#">Bingung bikin pop up pak</a>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-3">
        <div
          class="btn btn-light shadow hover-grow px-3 py-2 d-flex align-items-center justify-content-between text-left"
        >
          <a
            href="https://api.whatsapp.com/send?phone=6289624190003&text=Assalamu%27alaikum..%0A%0ASaya%20dapat%20info%20nomor%20ini%20dari%20Instagram%20%40sakinah_mart%20%0A%0ASaya%20ingin%20melakukan%20pemesanan%20delivery%20order%20di%20*Sakinah%20Supermarket%20Keputih*%2C%20bagaimana%20teknis%20untuk%20pemesanan%20delivery%20ordernya%20kak%3F"
            target="_blank"
            rel="noopener noreferrer"
            class="d-flex align-items-center flex-grow-1 text-decoration-none text-dark"
          >
            <img
              src="{{ asset('sakinah-delivery.webp') }}"
              alt="Delivery-Order"
              class="catalog mr-3"
            />
            <div class="flex-grow-1">
              <h6 class="text mb-0 text-center">Supermarket Keputih</h6>
            </div>
          </a>
          <div class="ml-3">
            <button
              class="p-0 bg-transparent border-0"
              type="button"
              id="menuButton"
              data-toggle="dropdown"
            >
              ⋮
            </button>
            <div
              class="dropdown-menu dropdown-menu-right"
              aria-labelledby="menuButton"
            >
              <a class="dropdown-item" href="#">Bingung bikin pop up pak</a>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-3">
        <div
          class="btn btn-light shadow hover-grow px-3 py-2 d-flex align-items-center justify-content-between text-left"
        >
          <a
            href="https://api.whatsapp.com/send?phone=6287788038417&text=Assalamu%27alaikum..%0A%0ASaya%20dapat%20info%20nomor%20ini%20dari%20Instagram%20%40sakinah_mart%20%0A%0ASaya%20ingin%20melakukan%20pemesanan%20delivery%20order%20di%20*Sakinah%20Supermarket%20Kedinding*%2C%20bagaimana%20teknis%20untuk%20pemesanan%20delivery%20ordernya%20kak%3F"
            target="_blank"
            rel="noopener noreferrer"
            class="d-flex align-items-center flex-grow-1 text-decoration-none text-dark"
          >
            <img src="{{ asset('putih.png') }}" alt="Delivery-Order" class="catalog mr-3" />
            <div class="flex-grow-1">
              <h6 class="text mb-0 text-center">Supermarket Kedinding</h6>
            </div>
          </a>
          <div class="ml-3">
            <button
              class="p-0 bg-transparent border-0"
              type="button"
              id="menuButton"
              data-toggle="dropdown"
            >
              ⋮
            </button>
            <div
              class="dropdown-menu dropdown-menu-right"
              aria-labelledby="menuButton"
            >
              <a class="dropdown-item" href="#">Bingung bikin pop up pak</a>
            </div>
          </div>
        </div>
      </div>
      <!-- MARKETPLACE -->
      <h6 class="text-white text-center mt-5">MARKETPLACE</h6>
      <div class="mt-3">
        <div
          class="btn btn-light shadow hover-grow px-3 py-2 d-flex align-items-center justify-content-between text-left"
        >
          <a
            href="https://shopee.co.id/sakinahsupermarket"
            target="_blank"
            rel="noopener noreferrer"
            class="d-flex align-items-center flex-grow-1 text-decoration-none text-dark"
          >
            <img src="{{ asset('shopee-logo.webp') }}" alt="Shopee" class="catalog mr-3" />
            <div class="flex-grow-1">
              <h6 class="text mb-0 text-center">SHOPEE</h6>
            </div>
          </a>
          <div class="ml-3">
            <button
              class="p-0 bg-transparent border-0"
              type="button"
              id="menuButton"
              data-toggle="dropdown"
            >
              ⋮
            </button>
            <div
              class="dropdown-menu dropdown-menu-right"
              aria-labelledby="menuButton"
            >
              <a class="dropdown-item" href="#">Bingung bikin pop up pak</a>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-3">
        <div
          class="btn btn-light shadow hover-grow px-3 py-2 d-flex align-items-center justify-content-between text-left"
        >
          <a
            href="https://www.lazada.co.id/shop/sakinah-supermarket/"
            target="_blank"
            rel="noopener noreferrer"
            class="d-flex align-items-center flex-grow-1 text-decoration-none text-dark"
          >
            <img src="{{ asset('lazada-logo.webp') }}" alt="Lazada" class="catalog mr-3" />
            <div class="flex-grow-1">
              <h6 class="text mb-0 text-center">LAZADA</h6>
            </div>
          </a>
          <div class="ml-3">
            <button
              class="p-0 bg-transparent border-0"
              type="button"
              id="menuButton"
              data-toggle="dropdown"
            >
              ⋮
            </button>
            <div
              class="dropdown-menu dropdown-menu-right"
              aria-labelledby="menuButton"
            >
              <a class="dropdown-item" href="#">Bingung bikin pop up pak</a>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-3">
        <div
          class="btn btn-light shadow hover-grow px-3 py-2 d-flex align-items-center justify-content-between text-left"
        >
          <a
            href="https://www.tokopedia.com/sakinah-mart"
            target="_blank"
            rel="noopener noreferrer"
            class="d-flex align-items-center flex-grow-1 text-decoration-none text-dark"
          >
            <img
              src="{{ asset('tokopedia-logo.webp') }}"
              alt="Tokopedia"
              class="catalog mr-3"
            />
            <div class="flex-grow-1">
              <h6 class="text mb-0 text-center">TOKOPEDIA</h6>
            </div>
          </a>
          <div class="ml-3">
            <button
              class="p-0 bg-transparent border-0"
              type="button"
              id="menuButton"
              data-toggle="dropdown"
            >
              ⋮
            </button>
            <div
              class="dropdown-menu dropdown-menu-right"
              aria-labelledby="menuButton"
            >
              <a class="dropdown-item" href="#">Bingung bikin pop up pak</a>
            </div>
          </div>
        </div>
      </div>
      <!-- WEBSITE -->
      <h6 class="text-white text-center mt-5">WEBSITE</h6>
      <div class="mt-3">
        <div
          class="btn btn-light shadow hover-grow px-3 py-2 d-flex align-items-center justify-content-between text-left"
        >
          <a
            href="https://sakinahmart.com/"
            target="_blank"
            rel="noopener noreferrer"
            class="d-flex align-items-center flex-grow-1 text-decoration-none text-dark"
          >
            <img
              src="{{ asset('globe-internet.webp') }}"
              alt="Official-Web"
              class="catalog mr-3"
            />
            <div class="flex-grow-1">
              <h6 class="text mb-0 text-center">Official Web Sakinahmart</h6>
            </div>
          </a>
          <div class="ml-3">
            <button
              class="p-0 bg-transparent border-0"
              type="button"
              id="menuButton"
              data-toggle="dropdown"
            >
              ⋮
            </button>
            <div
              class="dropdown-menu dropdown-menu-right"
              aria-labelledby="menuButton"
            >
              <a class="dropdown-item" href="#">Bingung bikin pop up pak</a>
            </div>
          </div>
        </div>
      </div>
      <!-- BUTTON JOIN ON LINKTREE -->
      <div class="mt-5 mb-5">
        <div
          class="btn-bottom btn-light shadow hover-grow-b d-flex align-items-center justify-content-between text-left"
        >
          <a
            href="https://linktr.ee/?utm_source=linktree&utm_medium=profile&utm_campaign=footer_logo_cta&utm_content=Sakinahmart"
            target="_blank"
            rel="noopener noreferrer"
            class="d-flex align-items-center flex-grow-1 text-decoration-none text-dark"
          >
            <img
              src="{{ asset('linktree-logo.png') }}"
              alt="logo-linktree"
              class="mr-2 ml-3"
              style="width: 15px; height: 15px"
            />
            <div class="flex-grow-1">
              <h6 class="mb-0">
                <b>Join Sakinahmart on Linktree</b>
              </h6>
            </div>
          </a>
        </div>
      </div>
    </div>
    <a href="https://cookiepedia.co.uk/giving-consent-to-cookies">
      <h6 class="cookie">Cookie Preferences</h6>
    </a>
  </body>
</html>
