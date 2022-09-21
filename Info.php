<?php

    $actveIndex = "";
    $activeResult = "";
    $activeInfo = "active";
    require 'Navbar.php';

?>

<div class="container bg-dark text-center text-light">
    <div class="my-5 py-5">
        <h2><?php echo $currentInfo[0]; ?></h2>
        <br />
        <br />
        <br />
        <p><?php echo $currentInfo[1]; ?></p>
        <br />
        <br />
        <p><?php echo $currentInfo[2]; ?></p>
    </div>
</div>

<?php

    include 'Footer.php';

?>