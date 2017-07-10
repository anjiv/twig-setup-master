<?php
require_once 'vendor/autoload.php';
include 'routes.php';

try {
  // specify where to look for templates
  // an anonymous function

  $loader = new Twig_Loader_Filesystem('templates');

  // initialize Twig environment
  $twig = new Twig_Environment($loader, array(
      'debug' => true,
      // ...
  ));

  $filter = new Twig_Filter('upperCustom', 'upperCustomFn', array('is_safe' => array('html')));

  function upperCustomFn($sd){
    return 'Length of <em>' . $sd . '</em><script> alert("hi")</script> is: ' . strlen($sd);
  }
  $twig->addFilter($filter);
  $twig->addExtension(new Twig_Extension_Debug());

  $uri = $_SERVER['REQUEST_URI'];

  if($routes[$uri]){
    $template = $twig->loadTemplate( 'pages/' . $routes[$uri][0] . '.html.twig');
    if(count($routes[$uri]) > 1){
      echo $template->render($routes[$uri][1]);
    }else{
      echo $template->render(array());
    }
  } else{
    // 404
    $template = $twig->loadTemplate('pages/error-404.html.twig');
    echo $template->render(array());

  }

} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}

