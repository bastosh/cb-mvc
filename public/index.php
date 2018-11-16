<?php

require '../vendor/autoload.php';

$ex = isset($_REQUEST['ex']) ? $_REQUEST['ex'] : 'home';

switch($ex)
{
  case 'home'        : home();      break;
  case 'about'       : about();     break;
  case 'contact'     : contact();   break;
  default : home();
}

require('../app/views/layout.php');

function home()
{
  global $content;

  $content['title'] = 'Home';
  $content['class'] = 'Html';
  $content['method'] = 'show';
  $content['arg'] = '../app/views/home.view.html';

}

function about()
{
  global $content;

  $content['title'] = 'About';
  $content['class'] = 'Html';
  $content['method'] = 'show';
  $content['arg'] = '../app/views/about.view.html';

}

function contact()
{
  global $content;

  $content['title'] = 'Contact';
  $content['class'] = 'Html';
  $content['method'] = 'show';
  $content['arg'] = '../app/views/contact.view.html';

}
