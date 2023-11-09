<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/home" class="nav-link {{ ($slug === "home") ? 'active' : '' }}"
                    aria-current="page">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/profil" class="nav-link {{ ($slug === "profil") ? 'active' : '' }}"
                    >Profil</a>
                </li>              
                <li class="nav-item">
                    <a href="/mahasiswa" class="nav-link {{ ($slug === "mahasiswa") ? 'active' : '' }}"
                    >Mahasiswa</a>
                </li>              
                <li class="nav-item">
                    <a href="/prodi" class="nav-link {{ ($slug === "prodi") ? 'active' : '' }}"
                    >Prodi</a>
                </li>     
            </ul>
        </div>
    </div>
</nav>