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


/*
* Inspect a value(s)
* 
* @param mixed $value
* @return void 
*/

function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

/*
* Inspect a value(s) and die
* 
* @param mixed $value
* @return void 
*/

function inspectAndDie($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}
