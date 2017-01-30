<?php
ini_set('display_errors', 1);
$DS = DIRECTORY_SEPARATOR;
require_once get_template_directory() . $DS . 'post-types' . $DS . 'movies.php';
update_option( 'wcppp_include_post_types', 'movies', true );
require_once get_template_directory() . $DS . 'functions' . $DS . 'registration-form.php';
require_once get_template_directory() . $DS . 'functions' . $DS . 'hooks.php';
