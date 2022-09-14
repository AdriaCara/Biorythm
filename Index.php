<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulari</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

    <body>

        <div class="position-absolute top-50 start-50 translate-middle">
        <form action="Resultat.php" method="POST">
            <div class="mb-4">
                <label for="name" class="form-label">Your name: </label>
                <br/>
                <input type="text" class="form-label" id="name" name="name">
            </div>
            <div class="mb-4">
                <label for="age" class="form-label">Your age: </label>
                <br/>
                <input type="date" class="form-label" id="age" name="age">
            </div>
            <button type="submit" class="btn btn-primary end-0">Submit</button>
        </form>
        </div>

    </body>

</html>