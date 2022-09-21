<?php

    $actveIndex = "";
    $activeResult = "active";
    $activeInfo = "";

    include 'Navbar.php';
    include 'Biorhythm.php';

    $name = 'Diana Frances Spencer';
    $date = new DateTime('01/07/1961');

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

    $biorhythm = new Biorhythm($physical, $emotional, $intellectual);

    $days = $biorhythm->getDate($date);
    
    $percentPhysical = $biorhythm->setPercentPhysical($days, $physical);
    $percentEmotional = $biorhythm->setPercentEmotional($days, $emotional);
    $percentIntellectual = $biorhythm->setPercentIntellectual($days, $intellectual);

    $percentPhysical = $biorhythm->getPercentPhysical();
    $percentEmotional = $biorhythm->getPercentEmotional();
    $percentIntellectual = $biorhythm->getPercentIntellectual();

    $sumTotal = ($percentPhysical + $percentEmotional + $percentIntellectual);

?>

<br />
<div class="container bg-white" style="padding: 40vh;">
    <form action="result.php" method="POST">
        <div class="position-absolute top-50 start-50 translate-middle bg-white">
            <h2>Your information: </h2>
            <br />
            <div class="mb-4">
                <label for="name" class="form-label">Your name: </label>
                <input type="text" class="form-label" id="name" value="<?php echo $name; ?>" disabled>
            </div>
            <div class="mb-4">
                <label for="age" class="form-label">Number of days passed since your birth: </label>
                <input type="text" class="form-label" id="age" value="<?php echo $days . ' days'; ?>" disabled>
            </div>
            <br />
            <div>
                <h2>Your biorhythms: </h2>
                <br />
                <p>Physical:</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated <?php if ($percentPhysical <= 49) {
                                                    echo 'bg-danger';
                                                } else {
                                                    echo 'bg-success';
                                                } ?>" role="progressbar" aria-label="Animated striped example" style="width: <?php echo $percentPhysical . '%'; ?>;" aria-valuenow="<?php echo $percentPhysical; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $percentPhysical . '%'; ?></div>
                </div>
                <br />
                <p>Emotional:</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated <?php if ($percentEmotional <= 49) {
                                                    echo 'bg-danger';
                                                } else {
                                                    echo 'bg-success';
                                                } ?>" role="progressbar" aria-label="Animated striped example" style="width: <?php echo $percentEmotional . '%'; ?>;" aria-valuenow="<?php echo $percentEmotional; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $percentEmotional . '%'; ?></div>
                </div>
                <br />
                <p>Intellectual:</p>
                <div class="progress">
                    <div class="progress-bar  progress-bar-striped progress-bar-animated <?php if ($percentIntellectual <= 49) {
                                                    echo 'bg-danger';
                                                } else {
                                                    echo 'bg-success';
                                                } ?>" role="progressbar" aria-label="Animated striped example" style="width: <?php echo $percentIntellectual . '%'; ?>;" aria-valuenow="<?php echo $percentIntellectual; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $percentIntellectual . '%'; ?></div>
                </div>
                <br />
                <h2>Total:</h2>
                <br />
                <div class="progress">
                    <div class="progress-bar border border-dark <?php if ((($percentPhysical * 100) / $sumTotal) <= 49) {
                                                    echo 'bg-danger';
                                                } else {
                                                    echo 'bg-success';
                                                } ?> " role="progressbar" aria-label="Segment one" style="width: <?php echo (($percentPhysical * 100) / $sumTotal) . '%'; ?>" aria-valuenow="<?php echo (($percentPhysical * 100) / $sumTotal); ?>" aria-valuemin="0" aria-valuemax="<?php echo $sumTotal; ?>">Physical</div>
                    <div class="progress-bar border border-dark <?php if ((($percentEmotional * 100) / $sumTotal) <= 49) {
                                                    echo 'bg-danger';
                                                } else {
                                                    echo 'bg-succes';
                                                } ?>" role="progressbar" aria-label="Segment two" style="width: <?php echo (($percentEmotional * 100) / $sumTotal) . '%'; ?>" aria-valuenow="<?php echo (($percentEmotional * 100) / $sumTotal); ?>" aria-valuemin="0" aria-valuemax="<?php echo $sumTotal; ?>">Emotional</div>
                    <div class="progress-bar border border-dark <?php if ((($percentIntellectual * 100) / $sumTotal) <= 49) {
                                                    echo 'bg-danger';
                                                } else {
                                                    echo 'bg-success';
                                                } ?>" role="progressbar" aria-label="Segment three" style="width: <?php echo (($percentIntellectual * 100) / $sumTotal) . '%'; ?>" aria-valuenow="<?php echo (($percentIntellectual * 100) / $sumTotal); ?>" aria-valuemin="0" aria-valuemax="<?php echo $sumTotal; ?>">Intellectual</div>
                </div>
            </div>
        </div>
    </form>
</div>

<?php

    include 'Footer.php';

?>