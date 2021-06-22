<?php
// article('articles/show')
function render(string $path)
{
ob_start();
require('templates/' . $path . '.html.php');
$pageContent = ob_get_clean();
require('templates/layout.html.php');

}