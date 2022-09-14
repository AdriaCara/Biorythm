<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulari</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>

    <?php

        include 'biorritmes.php';

        $date = 'ERROR';
        $date = 'ERROR';
        $physical = 23;
        $emotional = 28;
        $intellectual = 33;

        if (isset($_POST['age'])) {
            $date = new DateTime($_POST['age']);
        }

        if (isset($_POST['name'])) {
            $name = $_POST['name'];
        }


        $b = new Biorythm();

    ?>

    <div class="container bg-dark" style="padding: 28.5%;">
        <form action="result.php" method="POST">
            <div class="position-absolute top-50 start-50 translate-middle bg-light">
                <h2>Your information: </h2>
                <br />
                <p></p>
                <div class="mb-4">
                    <label for="name" class="form-label">Your name: </label>
                    <input type="text" class="form-label" id="name" value="<?php echo $name; ?>" disabled>
                </div>
                <div class="mb-4">
                    <label for="age" class="form-label">Your age: </label>
                    <input type="text" class="form-label" id="age" value="<?php echo $b->getDate($date).'days'; ?>" disabled>
                </div>
                <br />
                <br />
                <div>
                    <h2>Your biorhythms: </h2>
                    <br />
                    <p></p>
                    <p>Physical:</p>
                    <div class="progress">
                        <div class="progress-bar <?php if($b->getPercent($b->getDate($date), $physical) < 50) { echo 'bg-danger'; } else { echo 'bg-success'; } ?>" role="progressbar" aria-label="Basic example" style="width: <?php echo $b->getPercent($b->getDate($date), $physical); ?>%;" aria-valuenow="<?php echo $b->getPercent($b->getDate($date), $physical); ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $b->getPercent($b->getDate($date), $physical).'%'; ?></div>
                    </div>
                    <br />
                    <p>Emotional:</p>
                    <div class="progress">
                        <div class="progress-bar <?php if($b->getPercent($b->getDate($date), $emotional) < 50) { echo 'bg-danger'; } else { echo 'bg-success'; } ?>" role="progressbar" aria-label="Basic example" style="width: <?php echo $b->getPercent($b->getDate($date), $emotional); ?>%;" aria-valuenow="<?php echo $b->getPercent($b->getDate($date), $emotional); ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $b->getPercent($b->getDate($date), $emotional).'%'; ?></div>
                    </div>
                    <br />
                    <p>Intellectual:</p>
                    <div class="progress">
                        <div class="progress-bar <?php if($b->getPercent($b->getDate($date), $intellectual) < 50) { echo 'bg-danger'; } else { echo 'bg-success'; } ?>" role="progressbar" aria-label="Basic example" style="width: <?php echo $b->getPercent($b->getDate($date), $intellectual); ?>%;" aria-valuenow="<?php echo $b->getPercent($b->getDate($date), $intellectual); ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $b->getPercent($b->getDate($date), $intellectual).'%'; ?></div>
                    </div>
                    <br />
                </div>
            </div>
        </form>
    </div>

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <span class="text-muted">Copyright © 2022 ADRIÀ CARA ROCA & PAU SERRA COMAJOAN</span>
    </footer>

</body>

</html>