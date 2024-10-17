<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-3051">
    
    <div class="background">
        <section class="container my-5">
            <div class="header">
                <h4>RETURN THE ORIGINAL FORM TO YOUR GADGET. CALL US</h4>
                <button class="btn-check"><i class="check fa fa-check "></i>CONTACT US</button>
            </div>
        </section>
    </div>

    <section class="container ">

        <h2 class="text-center mb-5">WE REPAIR</h2>
        <div class="row">
            <div class="col-md-4  mb-4 info-container">

                <div class="icon"><i class="fa fa-mobile "></i></div>

                <div class="info">
                    <h5>MOBILE PHONES</h5>
                    <p>Suspendisse potenti. Nunc dapibus nibh justo, facilisis sagittis eros sollicitudin posuere.</p>
                </div>
            </div>
            <div class="col-md-4  mb-4 info-container">
                <div class="icon"><i class="fa fa-camera "></i></div>
                <div class="info">
                    <h5>PHOTO CAMERAS</h5>
                    <p>Suspendisse potenti. Nunc dapibus nibh justo, facilisis sagittis eros sollicitudin posuere.</p>
                </div>
            </div>
            <div class="col-md-4  mb-4 info-container">
                <div class="icon"><i class="fa fa-desktop "></i></div>
                <div class="info">
                    <h5>COMPUTERS</h5>
                    <p>Suspendisse potenti. Nunc dapibus nibh justo, facilisis sagittis eros sollicitudin posuere.
                    </p>
                </div>
            </div>
            <div class="col-md-4  mb-4 info-container">
                <div class="icon"><i class="fa fa-tablet "></i></div>
                <div class="info">
                    <h5>TABLETS</h5>
                    <p>Suspendisse potenti. Nunc dapibus nibh justo, facilisis sagittis eros sollicitudin posuere.
                    </p>
                </div>
            </div>
            <div class="col-md-4  mb-4 info-container">
                <div class="icon"><i class="fa fa-camera "></i></div>
                <div class="info">
                    <h5>VIDEO CAMERAS</h5>
                    <p>Suspendisse potenti. Nunc dapibus nibh justo, facilisis sagittis eros sollicitudin posuere.
                    </p>
                </div>
            </div>
            <div class="col-md-4  mb-4 info-container">
                <div class="icon"><i class="fa fa-gamepad "></i></div>
                <div class="info">
                    <h5>GAME CONSOLES</h5>
                    <p>Suspendisse potenti. Nunc dapibus nibh justo, facilisis sagittis eros sollicitudin posuere.
                    </p>
                </div>
            </div>
        </div>

    </section>



</div>