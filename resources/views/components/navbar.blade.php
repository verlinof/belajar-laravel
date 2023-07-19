<nav class="navbar px-2 bg-danger container-fluid navbar-dark navbar-expand-lg">
    <div class="container-md">
      <a class="navbar-brand" href="/">VernoBlog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            {{-- Jadi disini pake ternary buat ngecek sedang dihalaman mana, jika halaman sama dengan navlink maka akan ditambahkan class active --}}
            <a class="nav-link {{ ($title === 'home') ? 'active' : ''}}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'about') ? 'active' : ''}}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'blog') ? 'active' : ''}}" href="/blog">Blog</a>
          </li>
        </ul>
    </div>
    </div>
  </nav>

