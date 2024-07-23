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
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                <span class="fs-4">Gestion des Stagiaires</span>
            </a>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="{{ url('/') }}" class="nav-link active" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link">À propos</a></li>
                <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
            </ul>
        </header>

        <main>
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        @foreach($offres as $offre)
                            <div class="col">
                                <div class="card shadow-sm">
                                <img src="{{ asset('images/666.jpg') }}" class="card-img-top"  width="100%" height="225">
                                <div class="card-body">
                                        <h5 class="card-title">{{ $offre->titre }}</h5>
                                        <p class="card-text">{{ $offre->description }}</p>
                                        <p class="card-text"> {{ $offre->date_debut }}</p>
                                        <p class="card-text">{{ $offre->date_fin }}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="/some-fixed-url" class="btn btn-sm btn-outline-secondary">Postuler</a>
                                        </div>   
                                            <small class="text-muted">9 mins</small>
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
