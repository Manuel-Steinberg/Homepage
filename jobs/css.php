<?php

// Libraris
// minify & path-converter
print("Start CSS Job.\n");
$path = '../addons';
require_once $path . '/minify/src/Minify.php';
require_once $path . '/minify/src/CSS.php';
require_once $path . '/minify/src/JS.php';
require_once $path . '/minify/src/Exception.php';
require_once $path . '/minify/src/Exceptions/BasicException.php';
require_once $path . '/minify/src/Exceptions/FileImportException.php';
require_once $path . '/minify/src/Exceptions/IOException.php';
require_once $path . '/path-converter/src/ConverterInterface.php';
require_once $path . '/path-converter/src/Converter.php';
// Css-Crush
require_once "../addons/css-crush/CssCrush.php";

use MatthiasMullie\Minify;

// --blocking
$sourcePath = '../assets/css/font-awesome.min.css';
$minifier = new Minify\CSS($sourcePath);

// we can even add another file, they'll then be
// joined in 1 output file
$sourcePath2 = '../assets/css/i-am.css';
$minifier->add($sourcePath2);

// save minified file to disk
$minifiedPath = '../assets/css/blocking.min.css';
$minifier->minify($minifiedPath);


// --main
$crushPath = csscrush_file("../assets/css/main.css", array('versioning' => false));
$sourcePath = $crushPath;
$minifier = new Minify\CSS($sourcePath);

// save minified file to disk
$minifiedPath = '../assets/css/main.min.css';
$minifier->minify($minifiedPath);

// JS
$sourcePath = '../assets/js/superplaceholder.min.js';
$minifier = new Minify\CSS($sourcePath);

// we can even add another file, they'll then be
// joined in 1 output file
$sourcePath2 = '../assets/js/superplaceholder.config.js';
$minifier->add($sourcePath2);

// we can even add another file, they'll then be
// joined in 1 output file
$sourcePath3 = '../assets/js/lazysizes.min.js';
$minifier->add($sourcePath3);

// save minified file to disk
$minifiedPath = '../assets/js/main.min.js';
$minifier->minify($minifiedPath);

print("Finished CSS Job.\n");
