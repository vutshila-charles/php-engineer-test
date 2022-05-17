<?php
/*
 * Flicker Leap PHP Engineer Test
 *
 * This is where the magic happens. Run all code in here to show your end result.
 */

require __DIR__ . '/vendor/autoload.php';

use FlickerLeap\Diamond;
use FlickerLeap\Rectangle;
use FlickerLeap\Square;

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Flicker Leap - PHP Engineer Test</title>
    </head>
    <style type="text/css">
        body{
            line-height: 1em;
            background-color: rgb(212 212 212);
        }
        .section{
            background-color: rgb(255 255 255);
            padding: 0.5rem;
        }
        .max-width{
            max-width: 64rem;
        }
        .heading{
            text-decoration-line: underline;
            text-align: center;
        }
        .mx-auto {
            margin-right: auto !important;
            margin-left: auto !important;
        }
    </style>
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
                $square->sideLength = 4;
                $square->draw();
            ?>
        </div>

        <h2>Output the result of the API</h2>
        <div class="section">
            <?php
                $url = "https://pokeapi.co/api/v2/pokemon/mewtwo";
                $response = \Httpful\Request::get($url)
                    ->expectsJson()
                    ->send();
                    echo '<h2>Abilities</h2>';
                    foreach($response->body->abilities as $k => $v) {
                            echo ucfirst($v->ability->name).'<br>';
                    }
                    echo '<h2>Types</h2>';
                    echo $response->body->types[0]->type->name;
                    echo '<h2>Pictures </h2>';
                    echo '<img src="'.$response->body->sprites->back_default.'" width="200">';
            ?>
        </div>

        <h2>Recommendations</h2>

        <p><!-- Let us know how we can improve this test here --></p>
    </div>

    </body>
</html>
