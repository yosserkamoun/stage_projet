<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
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
<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="{{ asset('images/444.jpg') }}" class="d-block mx-lg-auto img-fluid"  width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Bienvenue sur notre plateforme de gestion des stagiaires</h1>
        <p class="lead"> Une solution innovante pour simplifier la gestion des stages pour les entreprises et les étudiants. 
    Notre mission est de faciliter la recherche de stages pour les étudiants et le recrutement pour les entreprises, 
    tout en offrant des outils complets pour gérer les candidatures et évaluer les performances. Rejoignez-nous pour 
    transformer l'expérience de stage.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-secondary rounded-pill px-3">Nos Offres</button>
          <button type="button" class="btn btn-light rounded-pill px-3">Contact</button>
          
        </div>
      </div>
    </div>
  </div>


</body>
</html>
