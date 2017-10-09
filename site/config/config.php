<?php
/*
---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license
*/
c::set('license', 'K2-*-d00*4ee');

/*
---------------------------------------
Error Page <Setup></Setup>
---------------------------------------

The name of the error page folder
*/

c::set('error', '404');

/*
---------------------------------------
TinyURL Setup
---------------------------------------

Enables/disables tinyurls
*/

c::set('tinyurl.enabled', 'false');

/*
---------------------------------------
Caching
---------------------------------------

Enables/disables cahcing
*/

c::set('cache', false);
//c::set('cache.ignore', array('sitemap'));


/*
---------------------------------------
Locale Setup
---------------------------------------

Sets the global locale setting for PHP
*/

c::set('locale', 'de_DE.UTF8');

/*
---------------------------------------
User Role Setup
---------------------------------------

Define the Roles for Panel or non-Panel Users
*/

c::set('roles', array(
    array(
        'id'      => 'admin',
        'name'    => 'Admin',
        'panel'   => true
    ),
    array(
        'id'      => 'editor',
        'name'    => 'Editor',
        'panel'   => true
    ),
    array(
        'id'      => 'user',
        'name'    => 'User',
        'default' => true,
        'panel'   => false
    )
));

/*
---------------------------------------
Debug Setup
---------------------------------------

Define debug option
*/

c::set('debug', true);

/* --------------------------------------------------
  Minify the html-output
-------------------------------------------------- */

c::set('krb_html_min', false);
c::set('krb_css_path', 'assets/css/css.min.css');
c::set('krb_js_path', 'assets/js/js.min.js');
c::set('krb_js_async', false);
c::set('krb_js_defer', false);

/*
---------------------------------------
Routing Setup
---------------------------------------

Define Routes for Handling
*/

c::set('routes', array(
    array(
        'pattern' => 'logout',
        'action'  => function() {
            if ($user = site()->user()) {
                $user->logout();
            }
            go('/');
        }
    ),
    array(
        'pattern' => 'jobs/minify',
        'action'  => function() {
            timer::start();
            jobs('minify');
            echo timer::stop() . '<br />';
            echo version();
        }
    )
));