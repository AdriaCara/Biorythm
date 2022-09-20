<?php

    $actveIndex = "";
    $activeResult = "active";
    $activeInfo = "";
    include 'navbar.php';

    include 'biorritmes.php';

    $name = 'Elizabeth Alexandra Mary';
    $date = new DateTime('10/08/1926');

    $physical = 23;
    $emotional = 28;
    $intellectual = 33;

    if (isset($_POST['age'])) {
        $date = new DateTime($_POST['age']);
    }

    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }

    if ($name == null) {
        
        $name = 'Anonimus';

    }

    $b = new Biorhythm();

    $percentPhysical = $b->getPercent($b->getDate($date), $physical);
    $percentEmotional = $b->getPercent($b->getDate($date), $emotional);
    $percentIntellectual = $b->getPercent($b->getDate($date), $intellectual);

?>

<br />
<div class="container bg-white" style="padding: 40vh;">
    <form action="result.php" method="POST">
        <div class="position-absolute top-50 start-50 translate-middle bg-white">
            <h2>Your information: </h2>
            <br />
            <p></p>
            <div class="mb-4">
                <label for="name" class="form-label">Your name: </label>
                <input type="text" class="form-label" id="name" value="<?php echo $name; ?>" disabled>
            </div>
            <div class="mb-4">
                <label for="age" class="form-label">Number of days passed since your birth: </label>
                <input type="text" class="form-label" id="age" value="<?php echo $b->getDate($date) . ' days'; ?>" disabled>
            </div>
            <br />
            <div>
                <h2>Your biorhythms: </h2>
                <br />
                <p></p>
                <p>Physical:</p>
                <div class="progress">
                    <div class="progress-bar <?php if ($percentPhysical <= 49) {
                                                    echo 'bg-danger';
                                                } else {
                                                    echo 'bg-success';
                                                } ?>" role="progressbar" aria-label="Basic example" style="width: <?php echo $percentPhysical; ?>%;" aria-valuenow="<?php echo $percentPhysical; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $percentPhysical . '%'; ?></div>
                </div>
                <br />
                <p>Emotional:</p>
                <div class="progress">
                    <div class="progress-bar <?php if ($percentEmotional <= 49) {
                                                    echo 'bg-danger';
                                                } else {
                                                    echo 'bg-success';
                                                } ?>" role="progressbar" aria-label="Basic example" style="width: <?php echo $percentEmotional; ?>%;" aria-valuenow="<?php echo $percentEmotional; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $percentEmotional . '%'; ?></div>
                </div>
                <br />
                <p>Intellectual:</p>
                <div class="progress">
                    <div class="progress-bar <?php if ($percentIntellectual <= 49) {
                                                    echo 'bg-danger';
                                                } else {
                                                    echo 'bg-success';
                                                } ?>" role="progressbar" aria-label="Basic example" style="width: <?php echo $percentIntellectual; ?>%;" aria-valuenow="<?php echo $percentIntellectual; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $percentIntellectual . '%'; ?></div>
                </div>
                <br />
            </div>
        </div>
    </form>
</div>

<?php
    include 'Footer.php';
?>