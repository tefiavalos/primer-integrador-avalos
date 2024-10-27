<!DOCTYPE html>

<head>
    <html lang="es">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fantasia Medieval</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <?php include '../components/header.php'; ?>
    <section id="personajes">



        <h2>Personajes</h2>
        <div class="character-selection">
            <ul>
                <li><a href="characters.php?name=legolas" class="character-button">
                        Legolas
                    </a>
                </li>
                <li> <a href="characters.php?name=aragorn" class="character-button">
                        Aragorn
                    </a>
                </li>
                <li>
                    <a href="characters.php?name=gimli" class="character-button">
                        Gimli
                    </a>
                </li>
                <li>
                    <a href="characters.php?name=sauron" class="character-button">
                        Sauron
                    </a>
                </li>
            </ul>
        </div>


    <?php
    if (isset($_GET['name'])) {
        $characters = $_GET['name'];
        switch ($characters) {
            case "legolas":
                $name = "Legolas";
                $description = "Hijo del rey élfico Thranduil, Legolas es un hábil arquero y guerrero elfo sinda del Bosque Negro. Forma parte de la Comunidad del Anillo y se destaca por su destreza, agilidad y aguda visión, desarrollando una profunda amistad con Aragorn y Gimli durante la Guerra del Anillo.";
                $image = "../images/legolas.jpg";
                break;
            case "aragorn":
                $name = "Aragorn";
                $description = " Heredero de Isildur, Aragorn es un humano noble y hábil guerrero. Tras liderar la Comunidad del Anillo y enfrentar a Sauron, se convierte en el rey Elessar de Gondor y Arnor, trayendo paz al reino.";
                $image = "../images/aragorn.jpg";
                break;
            case "gimli":
                $name = "Gimli";
                $description = "Enano guerrero de Erebor y miembro de la Comunidad del Anillo, Gimli es valiente y leal. A pesar de la antigua rivalidad entre enanos y elfos, desarrolla una gran amistad con Legolas en la lucha contra Sauron.";
                $image = "../images/gimli.jpg";
                break;
            case "sauron":
                $name = "Sauron";
                $description = "El principal antagonista, Sauron es un Maia corrompido que busca dominar la Tierra Media a través del Anillo Único. Su oscuro poder y ambición lo hacen una amenaza para todas las razas.";
                $image = "../images/sauron.jpg";
                break;
        }

    ?>

        <div class="character-info">
            <h1><?php echo $name; ?></h1>
            <p><?php echo $description; ?></p>
            <img src=<?php echo $image ?>>
        <?php } ?>

        </div>
        </section>
        <?php include '../components/footer.php'; ?>
</body>

</html>