<nav class="menu d-flex flex-column text-center pt-3">
  <div class="top-section">
    <p class="small-title">
      KUB Mitra Bahari
    </p>
  </div>

  <div class="bottom-section d-flex">
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
        <a href="#" class="mx-4">
          Tentang
        </a>
      </li>
      <li>
        <a href="#" class="mx-4">
          Timeline
        </a>
      </li>
    </ul>
  </div>
</nav>