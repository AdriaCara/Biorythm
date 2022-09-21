<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulari</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
    <body>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        
        <?php

            $names_en = [ 'Physical', 'Emotional', 'Intellectual'];
            $names_es = [ 'Fisico', 'Emocional', 'Intelectual'];
            $names_cat = [ 'Físic', 'Emocional', 'Intel·lectual'];

            $info_en = [ "Biorhythm", "The biorhythm theory is the pseudoscientific idea that our daily lives are significantly affected by rhythmic cycles with periods of exactly 23, 28 and 33 days, typically a 23-day physical cycle, a 28-day emotional cycle, and a 33-day intellectual cycle. The idea was developed by Wilhelm Fliess in the late 19th century, and was popularized in the United States in the late 1970s. The proposal has been independently tested and, consistently, no validity for it has been found.", "According to the theory of biorhythms, a person's life is influenced by rhythmic biological cycles that affect his or her ability in various domains, such as mental, physical, and emotional activity. These cycles begin at birth and oscillate in a steady (sine wave) fashion throughout life, and by modeling them mathematically, it is suggested that a person's level of ability in each of these domains can be predicted from day to day. The theory is built on the idea that the biofeedback chemical and hormonal secretion functions within the body could show a sinusoidal behavior over time." ];
            $info_es = [ "Biorritmo", "La teoría del biorritmo es la idea pseudocientífica de que nuestra vida cotidiana se ve afectada significativamente por ciclos rítmicos con períodos de exactamente 23, 28 y 33 días, típicamente un ciclo físico de 23 días, un ciclo emocional de 28 días y un ciclo intelectual de 33 días. La idea fue desarrollada por Wilhelm Fliess a finales del siglo 19, y se popularizó en los Estados Unidos a finales de la década de 1970. La propuesta ha sido probada de forma independiente y, consistentemente, no se ha encontrado validez para ella.", "De acuerdo con la teoría de los biorritmos, la vida de una persona está influenciada por ciclos biológicos rítmicos que afectan su capacidad en diversos dominios, como la actividad mental, física y emocional. Estos ciclos comienzan al nacer y oscilan de manera constante (onda sinusoidal) a lo largo de la vida, y al modelarlos matemáticamente, se sugiere que el nivel de capacidad de una persona en cada uno de estos dominios se puede predecir día a día. La teoría se basa en la idea de que las funciones de secreción química y hormonal de biorretroalimentación dentro del cuerpo podrían mostrar un comportamiento sinusoidal con el tiempo."] ;
            $info_cat = [ "Biorritme", "La teoria del bioritme és la idea pseudocientífica que la nostra vida quotidiana es veu afectada significativament per cicles rítmics amb períodes d'exactament 23, 28 i 33 dies, normalment un cicle físic de 23 dies, un cicle emocional de 28 dies i un cicle intel·lectual de 33 dies. La idea va ser desenvolupada per Wilhelm Fliess a finals del segle 19, i es va popularitzar als Estats Units a finals de la dècada de 1970. La proposta ha estat provada de manera independent i, de manera consistent, no s'ha trobat cap validesa per a ella.", "Segons la teoria dels bioritmes, la vida d'una persona està influenciada per cicles biològics rítmics que afecten la seva capacitat en diversos dominis, com ara l'activitat mental, física i emocional. Aquests cicles comencen en néixer i oscil·len de manera constant (ona sinusoïdal) al llarg de la vida i, modelant-los matemàticament, es suggereix que el nivell de capacitat d'una persona en cadascun d'aquests dominis es pot predir del dia a dia.  La teoria es basa en la idea que les funcions de secreció química i hormonal del biofeedback dins del cos podrien mostrar un comportament sinusoïdal al llarg del temps." ];

            $string_en = [ 'Menu', 'Home', 'Results', 'Info', 'Language', 'English', 'Spanish', 'Catalan', 'Your information:', 'Your name:', 'Number of days passed since your birth:', 'Your biorhythms:', 'Total:', 'Your name:', 'Your birth date:', 'Send'];
            $string_es = [ 'Menu', 'Casa', 'Resultados', 'Información', 'Lenguaje', 'Inglés', 'Español', 'Catalan', 'Tú informacion:', 'Tú nombre:', 'Numero de días que han pasado des de tu cumpleaños:', 'Tus bioritmos:', 'Total:', 'Tú nombre:', 'Tú fecha de cumpleaños:', 'Enviar' ];
            $string_cat = [ 'Menú', 'Casa', 'Resultats', 'Informació', 'Llenguatge', 'Anglès', 'Espanyol', 'Català', 'La teva informació:', 'El teu nom:', 'Numero de dies que han passat des de el teu cumpleanys:', 'Els teus biorritmes:', 'Total:', 'El teu nom:' , 'La teva data de cumpleanys', 'Enviar'];

            if (isset($_GET['lenguage']) || isset($_POST['lenguage'])) {

                if (isset($_GET['lenguage'])) {

                    $lenguage = $_GET['lenguage'];

                } else {

                    $lenguage = $_POST['lenguage'];

                }

            } else {

               $lenguage = 'english';

            }

            if ($lenguage == 'spanish') {

                $currentLenguage = $string_es;
                $currentNames = $names_es;
                $currentInfo = $info_es;

            } elseif ($lenguage == 'english') {

                $currentLenguage = $string_en;
                $currentNames = $names_en;
                $currentInfo = $info_en;

            } else {

                $currentLenguage = $string_cat;
                $currentNames = $names_cat;
                $currentInfo = $info_cat;

            }

        ?>

        <div>
            <div>
                <nav class="navbar navbar-expand-lg bg-white border border-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand adriacara.github.io/portfolio/" href=""><?php echo $currentLenguage[0]; ?></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link <?php echo $activeIndex ?>" href="Index.php?lenguage=<?php echo $lenguage; ?>"><?php echo $currentLenguage[1]; ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo $activeResult ?>" href="Result.php?lenguage=<?php echo $lenguage; ?>"><?php echo $currentLenguage[2]; ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo $activeInfo ?>" href="Info.php?lenguage=<?php echo $lenguage; ?>"><?php echo $currentLenguage[3]; ?></a>
                                </li> 
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><?php if (isset($lenguage)) echo $lenguage; else echo 'english'; ?></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="?lenguage=english"><?php echo $currentLenguage[5];?></a></li>
                                        <li><a class="dropdown-item" href="?lenguage=spanish"><?php echo $currentLenguage[6];?></a></li>
                                        <li><a class="dropdown-item" href="?lenguage=catalan"><?php echo $currentLenguage[7];?></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>