<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Offres de Stage</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

<header class="mb-auto">
    <div>
    
        <h3 class="float-md-start mb-0">Gestion des Stagiaires</h3>
    <nav class="nav nav-masthead justify-content-center float-md-end">
       <a class="btn btn-light rounded-pill px-3  "aria-current="page"  href="{{ route('home.index') }}"  >Accueil</a>
       <a class="btn btn-light rounded-pill px-3"href="{{ route('offre_stage.index') }}" >Nos Offres</a>
       <a class="btn btn-light rounded-pill px-3"href="{{ url('/contact') }}" >Contact</a>
       <li class="nav-item dropdown">
                <li class="nav-item dropdown">
                  <a class="btn btn-light rounded-pill px-3" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Login As..</a>
                  <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{ url('/admin/login') }}">Admin</a>
                  <a class="dropdown-item" href="{{ route('encadreur.login') }}">Encadreur</a>
                   
                </li>
              </li>
        
    </nav>
</div>
</header>


        <main>
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach($offres as $offre)
                            <div class="col">
                                <div class="card shadow-sm">
                                <img src="{{ asset('images/03.jpg') }}" class="card-img-top"  width="100%" height="260">
                                <div class="card-body">
                                        <h5 class="card-title">{{ $offre->titre }}</h5>
                                        <p class="card-text">{{ $offre->description }}</p>
                                        
                                        <p class="card-text">{{ $offre->context }}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="{{ route('condidats.index', $offre->id) }}" class="btn btn-sm btn-outline-secondary">Postuler</a>
                                        </div>   
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </main>
        
        <footer class="text-muted py-5">
            <div class="container">
                <p class="float-end mb-1">
                    <a href="#">Back to top</a>
                </p>
                
            </div>
        </footer>
    </div>

    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
