<?php
$DS = DIRECTORY_SEPARATOR;
require_once get_template_directory() . $DS . 'post-types' . $DS . 'movies.php';
update_option( 'wcppp_include_post_types', 'movies', true );