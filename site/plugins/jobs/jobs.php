<?php
function jobs($name) {
    if (str::lower($name) === 'minify') {minify();}
}

function version() {
    $project_start = 2016;

    $version = date('.m.d.His',$_SERVER['REQUEST_TIME']);

    $Y = date('Y',$_SERVER['REQUEST_TIME']) - $project_start;

    $version = $Y . $version;

    return $version;
}

function minify() {
    $v = version();

    // start with critical css
    c::set('krb_css_path', 'assets/css/blocking.min.css');
    krb(array('assets/css/font-awesome.min.css', 'assets/css/i-am.css')
        ,'css'
        ,$v
        ,true
        ,true
        ,false);

    // doing the rest css
    c::set('krb_css_path', 'assets/css/main.min.css');
    krb(array('assets/css/main.css', /*'assets/css/share-buttons.css'*/)
        ,'css'
        ,$v
        ,true
        ,false
        ,false);

    // doing js minify
    c::set('krb_js_path', 'assets/js/main.min.js');
    krb(array('assets/js/superplaceholder.min.js', 'assets/js/superplaceholder.config.js', 'assets/js/lazysizes.min.js')
        ,'js'
        ,$v
        ,true
        ,false
        ,false);


}