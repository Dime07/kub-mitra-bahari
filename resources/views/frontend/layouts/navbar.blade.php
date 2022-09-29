<nav class="menu d-flex flex-column text-center pt-3">
  <div class="top-section">
    <p class="small-title">
      KUB Mitra Bahari
    </p>
  </div>

  <div class="bottom-section d-lg-flex d-none">
    <ul class="d-flex flex-row mx-auto p-0">
      <li>
        <a href=" {{ route('beranda') }} " class="me-4 {{ (request()->is('/')) ? 'active' : '' }} ">
          Beranda
        </a>
      </li>
      <li>
        <a href=" {{ route('jasa-kub') }} " class="mx-4 {{ (request()->is('jasa-kub')) ? 'active' : '' }} ">
          Jasa
        </a>
      </li>
      <li>
        <a href=" {{ route('produk-kub') }} " class="mx-4 {{ (request()->is('produk-kub')) ? 'active' : '' }} ">
          Produk
        </a>
      </li>
      <li>
        <a href=" {{ route('tentang-kub') }} " class="mx-4 {{ (request()->is('tentang-kub')) ? 'active' : '' }} ">
          Tentang
        </a>
      </li>
      <li>
        <a href=" {{ route('informasi-kub') }} " class="mx-4 {{ (request()->is('informasi-kub')) ? 'active' : '' }} ">
          Informasi
        </a>
      </li>
    </ul>
  </div>

  <div class="d-lg-none d-inine">
      <div>
        <p id="btn-menu" class="text-white">
          - Menu -
        </p>
      </div>
      <div class="menu-mobile p-4">
        <ul class="d-flex flex-column mx-auto p-0 mb-0">
          <li class="mb-3">
            <a href=" {{ route('beranda') }} " class="{{ (request()->is('/')) ? 'active' : '' }} ">
              Beranda
            </a>
          </li>
          <li class="mb-3">
            <a href=" {{ route('jasa-kub') }} " class="{{ (request()->is('jasa-kub')) ? 'active' : '' }} ">
              Jasa
            </a>
          </li>
          <li class="mb-3">
            <a href=" {{ route('produk-kub') }} " class="{{ (request()->is('produk-kub')) ? 'active' : '' }} ">
              Produk
            </a>
          </li>
          <li class="mb-3">
            <a href=" {{ route('tentang-kub') }} " class="{{ (request()->is('tentang-kub')) ? 'active' : '' }} ">
              Tentang
            </a>
          </li>
          <li class="mb-3">
            <a href=" {{ route('informasi-kub') }} " class="{{ (request()->is('informasi-kub')) ? 'active' : '' }} ">
              Informasi
            </a>
          </li>
        </ul>
      </div>
  </div>
</nav>