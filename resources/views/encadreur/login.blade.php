<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encadreur Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Connectez-vous à votre compte</h1>
                <p class="col-lg-10 fs-4">Veuillez entrer vos informations pour vous connecter. Assurez-vous que vos informations sont correctes.</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary" method="POST" action="{{ route('encadreur.authenticate') }}">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" name="email" placeholder="name@example.com" required>
                        <label for="floatingInput">Adresse e-mail</label>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" name="password" placeholder="Password" required>
                        <label for="floatingPassword">Mot de passe</label>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" name="remember" value="remember-me"> Se souvenir de moi
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Se connecter</button>
                    <div class="row">
                        <small>Vous n'avez pas de compte ? <a href="{{route('encadreur.inscription')}}">S'inscrire</a></small>
                    </div>

                    <hr class="my-4">
                    <small class="text-body-secondary">En vous connectant, vous acceptez les termes d'utilisation.</small>
                </form>
            </div>
        </div>
    </div>
</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>