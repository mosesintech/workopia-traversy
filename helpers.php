<?php

/*
* Get the base path
* 
* @param string $path
* @return string 
*/

function getBasePath($path = '')
{
    return __DIR__ . '/' . $path;
}

/*
* Load a view
* 
* @param string $path
* @return void 
*/

function loadView($name)
{
    $viewPath = getBasePath("views/{$name}.view.php");
    if (file_exists($viewPath)) {
        require $viewPath;
    } else {
        echo "View {$name} does not exist.";
    }
}

/*
* Load a view
* 
* @param string $path
* @return void 
*/

function loadPartial($name)
{
    $partialPath = getBasePath("views/partials/{$name}.php");

    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "Partial {$name} does not exist.";
    }
}
