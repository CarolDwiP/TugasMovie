<header class="navbar navbar-expand-lg bg-primary text-white">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand text-white" href="/">
            <i class="bi bi-film"></i> TugasMovie
        </a>
        <!-- Toggler Button -->
        <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!-- Role -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('roles.index') }}">
                        <i class="bi bi-people-fill"></i> Peran
                    </a>
                </li>
                <!-- User -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('users.index') }}">
                        <i class="bi bi-person-circle"></i> Pengguna
                    </a>
                </li>
                <!-- Cast -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('casts.index') }}">
                        <i class="bi bi-star-fill"></i> Pemeran
                    </a>
                </li>
                <!-- Genre -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('genres.index') }}">
                        <i class="bi bi-tags-fill"></i> Genre
                    </a>
                </li>
                <!-- Movie -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('movies.index') }}">
                        <i class="bi bi-film"></i> Film
                    </a>
                </li>
                <!-- Review -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('reviews.index') }}">
                        <i class="bi bi-chat-dots-fill"></i> Ulasan
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
