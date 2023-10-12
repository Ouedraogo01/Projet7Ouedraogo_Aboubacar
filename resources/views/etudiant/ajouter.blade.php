<!doctype html> <html lang="en"> <head> <meta charset="utf-8"> <meta name="viewport" content="width=device-width,
    initial-scale=1">
<title>CRUD IN LARAVEL 10</title>
<link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
</head>

<body>



    <div class="container">
        <div class="row">
            <h1>AJOUTER UN ETUDIANT</h1>
            <hr>

            @if (session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif

            <ul>
                @foreach ($errors->all() as $error)
                    <li class="alert alert-danger">{{ $error }}</li>
                @endforeach
            </ul>

            <form action="/ajouter/traitement" method="POST" class="form-group">
                @csrf
             
                <div class="form-group">
                    <label for="Nom">Nom</label>
                    <input type="text" class="form-control" id="Nom" name="nom"></label>
                </div>

                <div class="form-group">
                    <label for="Prenom">Prénom</label>
                    <input type="text" class="form-control" id="Prenom" name="prenom"></label>
                </div>

                <div class="form-group">
                    <label for="Classe">Classe</label>
                    <input type="text" class="form-control" id="Classe" name="classe"></label>
                </div>

                <br>
                <button type="submit" class="btn btn-primary">AJOUTER UN ETUDIANT</button>

                <br> <br />
                <a href="/etudiant" class="btn btn-danger"> Revenir à la liste des étudiants</a>

            </form>
        </div>
    </div>

    <script src="bootstrap-5.3.1-dist/js/bootstrap.min.js"></script>
</body>

</html>