<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulari</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Menu</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Resultat.php">Results</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Info.php">What's this</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container bg-white" style="padding: 18.5%;">
            <div class="position-absolute top-50 start-50 translate-middle">
                <form class="bg-white" action="Resultat.php" method="POST">
                    <div class="mb-4">
                        <h2 for="name" class="form-label">Your name: </h2>
                        <br />
                        <input type="text" class="form-label" id="name" name="name">
                    </div>
                    <div class="mb-4">
                        <h2 class="" for="age" class="form-label">Your birth date: </h2>
                        <br />
                        <input type="date" class="form-label" id="age" name="age">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <span class="text-muted mx-auto"> Copyright © 2022 ADRIÀ CARA ROCA & PAU SERRA COMAJOAN</span>
        </footer>
    </body>
</html>