<?php
  $egs = array(
    array('Simple Example','examples/simple'),
    array('Filter Example','examples/filter'),
    array('Loop Example','examples/loop'),
    array('First Example','examples/first'),
    array('Second Example','examples/second'),
    array('Third Example','examples/third'),
  );
  $routes = array(
    '/' => array('home', array('examples' => $egs)),
    '/contact' => array('contact'),
    '/examples/simple' => array('examples/simple', array(
      'user' => (object) array(
        'items' => array('You', 'Look' , 'Smart', 'Today!'),
        'gender' => 'male',
        'name' => array(
          'first' => 'Swastik',
          'last' => 'Pareek',
        ),
      ),
    )),
    '/examples/filter' => array('examples/filter'),
    '/examples/loop' => array('examples/loop' ,array('items' => array('Coffee <strong> is </strong> hot', 'Superman <script> alert("hi"); </script>', 'Twig', 'Rubber', 'Letter'))),
    '/examples/first' => array('examples/first', array(
      'pageTitle' => 'Suit up!!',
      'products' => array(
        'Business',
        'Dress',
        'Penguin',
        'Costume',
        'Accesories'
      ),
    )),
    '/examples/second' => array('examples/second' , array(
      'name' => 'anjali',
      'list' => array(
        'Hi',
        'Hello',
        'Bye',
        'see'
        ),
      'users' => array(
        array(
          'username' => 'Swastik'
        ),
        array(
          'username' => 'Anjali'
        ),
        array(
          'username' => 'Ajit'
        )
      )
    )),
    '/examples/third' => array('examples/third')
  );
?>
