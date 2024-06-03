<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD D'ARTICLE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col s12">
            <h1 class="text-center">Détails du bien N°{{$bien->id}}</h1>
            <div class="card" style="width: 70rem">
                <img src="{{ $bien->image }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-title"><strong>Nom:</strong> {{ $bien->nom }}</p>
                    <p> <strong>Catégorie :</strong> {{ $bien->categorie}} </p>
                    <p> <strong>Adresse :</strong> {{ $bien->adresse}} </p>
                    <p> <strong>Description :</strong> {{ $bien->description}} </p>
                    <p><strong> Date de l'ajout :</strong> {{$bien->date_ajout}}</p>
                    <a href="/bien" class="btn btn-outline-success btn-sm">Revenir à la liste des biens</a>
                </div>
            </div>
        </div>
      </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>