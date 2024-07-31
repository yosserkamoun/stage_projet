<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Candidats</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
</head>
<body>
    


<div class="container mt-4">
        <h2>Liste des Candidats</h2>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Email</th>
                        <th scope="col">Téléphone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($candidats as $candidat)
                    <tr>
                        <td>{{ $candidat->id }}</td>
                        <td>{{ $candidat->nom }}</td>
                        <td>{{ $candidat->prenom }}</td>
                        <td>{{ $candidat->email }}</td>
                        <td>{{ $candidat->telephone }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
