<?php
require_once('lib/helpers.php');
require_once('lib/enqueue-assets.php');

function after_pagination()
{
    echo 'yes';
}
function after_pagination2()
{
    echo 'test';
}
add_action('_themename_after_pagination', 'after_pagination',1);
add_action('_themename_after_pagination', 'after_pagination2',2);
?>
