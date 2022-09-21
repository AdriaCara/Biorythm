<?php

    $activeIndex = "active";
    $activeResult = "";
    $activeInfo = "";
    include 'Navbar.php';

?>

<div class="container bg-white my-5 py-5">
    <div class="position-absolute top-50 start-50 translate-middle">
        <form class="bg-white" action="Result.php" method="POST">
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

<?php

    include 'Footer.php';
    
?>