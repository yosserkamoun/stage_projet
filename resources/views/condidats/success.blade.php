<!-- resources/views/condidats/success.blade.php -->

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

<div class="container my-5">
    <div class="position-relative p-5 text-center text-muted bg-body border border-dashed rounded-5">
        <button type="button" class="position-absolute top-0 end-0 p-3 m-3 btn-close bg-secondary bg-opacity-10 rounded-pill" aria-label="Close"></button>
        <svg class="bi mt-5 mb-3" width="48" height="48"><use xlink:href="#check2-circle"/></svg>
        <h1 class="text-body-emphasis">Votre demande a été soumise avec succès !!</h1>
        <p class="col-lg-6 mx-auto mb-4">
            Vous pouvez retourner à la page des offres en cliquant sur le bouton ci-dessous.
        </p>
        <a href="{{ route('offre_stage.index') }}" class="btn btn-primary px-5 mb-5">
            Retourner à la page des offres
        </a>
    </div>
</div>
</body>
</html>
