<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidatures pour l'Offre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container py-5">
        <h1 class="mb-4">Candidatures pour l'Offre : {{ $offre->titre }}</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Téléphone</th>
                    <th scope="col">Email</th>
                    <th scope="col">CV</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($candidats as $candidat)
            <li>
                Nom: {{ $candidat->nom }}<br>
                Prénom: {{ $candidat->prenom }}<br>
                Téléphone: {{ $candidat->telephone }}<br>
                Email: {{ $candidat->email }}<br>
                CV: <a href="{{ asset('storage/' . $candidat->cv) }}">Télécharger</a>
            </li>
        @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
