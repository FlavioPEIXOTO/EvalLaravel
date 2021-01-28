<header>
    <section class="sect_Header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index"><img class="logo" src="img/book.jpg" alt="logo du site Story"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Mon compte
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @if(auth()->check())
                                <a class="dropdown-item" href="/dashboard">Mon Compte</a>
                                <a class="dropdown-item" href="/Storyboard">Mes posts</a>
                            @else
                                <a class="dropdown-item" href="/connexion">Se Connecter</option>
                            @endif
                            <a class="dropdown-item" href="index">Accueil</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/signout">Se déconnecter</a>
                        </div>
                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" id="search_head" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </nav>
    </section>

</header>