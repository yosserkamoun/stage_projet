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
    
<section class="vh-100 bg-image">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="form-container">
                            <h1 class="text-center mb-4">Inscription</h1>
                            <form action="{{ route('encadreur.store') }}" method="POST">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom" required>
                                    <label for="nom">Nom</label>
                                    @error('nom')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="form-floating mb-3">
                                    <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Prénom" required>
                                    <label for="prenom">Prénom</label>
                                    @error('prenom')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="form-floating mb-3">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                                    <label for="email">Email</label>
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe" required>
                                    <label for="password">Mot de passe</label>
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="form-floating mb-3">
                                    <input type="text" name="telephone" id="telephone" class="form-control" placeholder="Téléphone" required>
                                    <label for="telephone">Téléphone</label>
                                    @error('telephone')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="form-floating mb-3">
                                    <input type="text" name="poste" id="poste" class="form-control" placeholder="Poste" required>
                                    <label for="poste">Poste</label>
                                    @error('poste')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                
                                
                                <button type="submit" class="btn btn-primary w-100">S'inscrire</button>
                                <hr class="my-4">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
