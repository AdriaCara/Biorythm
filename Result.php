<?php

    $actveIndex = "";
    $activeResult = "active";
    $activeInfo = "";

    require 'Navbar.php';
    require 'Biorhythm.php';

    $name = 'Diana Frances Spencer';
    $date = new DateTime('01/07/1961');

    $cicles = [ 23, 28, 33 ];
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
    
    $biorhythm->setPercentPhysical($days, $cicles[0]);
    $biorhythm->setPercentEmotional($days, $cicles[1]);
    $biorhythm->setPercentIntellectual($days, $cicles[2]);

    $percents[0] = $biorhythm->getPercentPhysical();
    $percents[1]= $biorhythm->getPercentEmotional();
    $percents[2] = $biorhythm->getPercentIntellectual();

    $sumTotal = ($percents[0] + $percents[1] + $percents[2]);

?>

<br />
<div class="container bg-white my-5 py-5">
    <form action="result.php" method="POST">
        <div class="position-absolute top-50 start-50 translate-middle bg-white">
            <h2><?php echo $currentLenguage[8]; ?></h2>
            <br />
            <div class="mb-4">
                <label for="name" class="form-label"><?php echo $currentLenguage[9]; ?> </label>
                <input type="text" class="form-label" id="name" value="<?php echo $name; ?>" disabled>
            </div>
            <div class="mb-4">
                <label for="age" class="form-label"><?php echo $currentLenguage[10]; ?> </label>
                <input type="text" class="form-label" id="age" value="<?php echo $days . ' days'; ?>" disabled>
            </div>
            <br />
            <div>
                <h2><?php echo $currentLenguage[11]; ?></h2>
                <?php

                    for ($count = 0; $count < count($percents); $count++)
                    {
                        $width = 'bg-success';
                        if ($percents[$count] <= 49) {
                            $width = 'bg-danger';
                        }
                    
                        echo "<br />
                            <p>$currentNames[$count]:</p>
                            <div class='progress'>
                                <div class='progress-bar progress-bar-striped progress-bar-animated $width' role='progressbar' aria-label='Animated striped example' style='width: $percents[$count]%' aria-valuenow='$percents[$count]' aria-valuemin='0' aria-valuemax='100'>$percents[$count]%</div>
                            </div>";
                    }
                
                ?>
                <br />
                <h2><?php echo $currentLenguage[4]; ?></h2>
                <br />
                <div class="progress">
                    <?php 
                    
                        for ($count = 0; $count < count($percents); $count++)
                        {
                            $backGround = 'bg-succes';
                            $width = (($percents[$count] * 100) / 2);

                            if ((($percents[$count] * 100) / ($sumTotal)) <= 49) {
                                $backGround = 'bg-danger';
                            }

                            echo "<div class='progress-bar border border-dark $backGround' role='progressbar' aria-label='Segment two' style='width: $width%' aria-valuenow='$width' aria-valuemin='0' aria-valuemax='$sumTotal'>$currentNames[$count]</div>";

                        }
                    ?>
                </div>
            </div>
        </div>
    </form>
</div>

<?php

    include 'Footer.php';

?>