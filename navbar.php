<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulari</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
    <body>
        
        <div>
            <div>
                <nav class="navbar navbar-expand-lg bg-white border border-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand adriacara.github.io/portfolio/" href="">Menu</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link <?php echo $activeIndex ?>" href="Index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo $activeResult ?>" href="Result.php">Results</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo $activeInfo ?>" href="Info.php">What's this</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>