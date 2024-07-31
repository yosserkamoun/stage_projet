<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postuler pour un Stage</title>
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


        <div class="container mt-5">
        <h1 class="my-4">Postuler à l'Offre: {{ $offre->titre }}</h1>

        <form action="{{ route('condidats.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="offre_id" value="{{ $offre->id }}">

            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>
            <div class="mb-3">
                <label for="telephone" class="form-label">Téléphone</label>
                <input type="text" class="form-control" id="telephone" name="telephone" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="cv" class="form-label">CV (PDF uniquement)</label>
                <input type="file" class="form-control" id="cv" name="cv" accept=".pdf" required>
            </div>
            <button type="submit" class="btn btn-primary">Postuler</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
