<?php
/*
 * Flicker Leap PHP Engineer Test
 *
 * This is where the magic happens. Run all code in here to show your end result.
 */

require __DIR__ . '/vendor/autoload.php';

use FlickerLeap\Api\Pokemon;
use FlickerLeap\Diamond;
use FlickerLeap\Rectangle;
use FlickerLeap\Square;

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Flicker Leap - PHP Engineer Test</title>
    </head>
    <link rel="stylesheet" href="./includes/css/main.css"/>
    <body>
        <div class="max-width mx-auto">
        <h1 class="heading">PHP Engineer Test</h1>
            <div class="section">

                <h2><?php echo 'Hello World!'?></h2>

                <p>At the end of this test, you should have all the answers on this page.</p>
            </div>

        <h2>Output a square</h2>
        <div class="section">
            <?php
                // implement the square class here
                $square = new Square();
                $square->sideLength = 10;
                $square->draw();

            ?>
        </div>

        <h2>Output a diamond</h2>
        <div class="section">
            <?php
                // output your diamond here
                $square = new Diamond();
                $square->sideLength = 6;
                echo "<pre>"; $square->draw();echo "</pre>";
            ?>
        </div>

        <h2>Output your rectangle</h2>
        <div class="section">
            <?php
                // output your working rectangle here
                $square = new Rectangle();
                $square->sideLength = 7;
                $square->draw();
            ?>
        </div>

        <h2>Output the result of the API</h2>
        <div class="section">
            <?php
                $pokeManApi = new Pokemon();
                $pokeManApi->getAbilities();
                $pokeManApi->getPictures();
                $pokeManApi->getTypes();
                $pokeManApi->getSpecies();
            ?>
        </div>

        <h2>Recommendations</h2>
        <div class="section">
            <ul>
                <li>Would be nice if Ajax response was to be included</li>
            </ul>
        </div>

        
    </div>

    </body>
</html>
