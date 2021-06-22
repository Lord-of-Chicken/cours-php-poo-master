<?php
// article('articles/show')
function render(string $path, array $variables = [])
{
    //['articles' = > …, 'var2' => "Lior"]
    // $aticle = …
    // $var2 = "Lior";

    extract($variables);

ob_start();
require('templates/' . $path . '.html.php');
$pageContent = ob_get_clean();
require('templates/layout.html.php');

} 