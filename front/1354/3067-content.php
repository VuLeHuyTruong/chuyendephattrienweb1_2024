<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-3067">

    <div class="container my-5">

        <div class="header d-flex justify-content-center">
            <button class="active btn btn-nav mr-2">Calling Rates</button>
            <button class="btn btn-nav mr-2">SMS Rates</button>
            <button class="btn btn-nav mr-2">Out of freedays?</button>
            <button class="btn btn-nav ">Mobile Top Up Rates</button>
        </div>

        <div class="row my-4">
            <div class="col-md-6 mb-3">
                <label for="currency">Show rates in (Currency):</label>
                <select id="currency" class="form-control ">
                    <option>United States Dollar</option>
                    <option>Euro</option>
                    <option>British Pound</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="country">Your country:</label>
                <select id="country" class="form-control ">
                    <option>Select Your Country</option>
                    <option>United States</option>
                    <option>Canada</option>
                    <option>Germany</option>
                </select>
            </div>
        </div>

        <div class="d-flex ">
            <div class="alphabet">
                <a href="#">A</a>
                <a href="#">B</a>
                <a href="#">C</a>
                <a href="#">D</a>
                <a href="#">E</a>
                <a href="#">F</a>
                <a href="#">G</a>
                <a href="#">H</a>
                <a href="#">I</a>
                <a href="#">J</a>
                <a href="#">K</a>
                <a href="#">L</a>
                <a href="#">M</a>
                <a href="#">N</a>
                <a href="#">O</a>
                <a href="#">P</a>
                <a href="#">Q</a>
                <a href="#">R</a>
                <a href="#">S</a>
                <a href="#">T</a>
                <a href="#">U</a>
                <a href="#">V</a>
                <a href="#">W</a>
                <a href="#">X</a>
                <a href="#">Y</a>
                <a href="#">Z</a>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                Show
                <select id="entries" class="form-control d-inline-block w-auto entries">
                    <option>10</option>
                    <option>25</option>
                    <option>50</option>
                </select>
                entries
            </div>

            <div class="col-md-6 text-right">
                Search:
                <input type="text" id="search" class="form-control d-inline-block w-auto">
            </div>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th style="width:70%">Country</th>
                    <th class="right">USD/min</th>
                    <th class="right">Inc. VAT</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Afghanistan</td>
                    <td class="right">0.210</td>
                    <td class="right">0.210</td>
                </tr>
                <tr>
                    <td>Albania</td>
                    <td class="right">0.210</td>
                    <td class="right">0.210</td>
                </tr>
                <tr>
                    <td>Afghanistan</td>
                    <td class="right">0.210</td>
                    <td class="right">0.210</td>
                </tr>
                <tr>
                    <td>Albania</td>
                    <td class="right">0.210</td>
                    <td class="right">0.210</td>
                </tr>
                <tr>
                    <td>Afghanistan</td>
                    <td class="right">0.210</td>
                    <td class="right">0.210</td>
                </tr>
                <tr>
                    <td>Albania</td>
                    <td class="right">0.210</td>
                    <td class="right">0.210</td>
                </tr>
                <tr>
                    <td>Afghanistan</td>
                    <td class="right">0.210</td>
                    <td class="right">0.210</td>
                </tr>
            </tbody>
        </table>

        <div class="row justify-content-between">
            <div class="col-md-5">
            <p class="info">Showing 1 to 10 of 155 entries</p>
            </div>

            <div class="col-md-7 text-right">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
            </div>
        </div>

    </div>

   


</div>