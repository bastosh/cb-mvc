<?php

class Html
{

  public function show($view)
  {
    (file_exists($view)) ? include($view) : include('../app/views/unknown.view.html');
  }

}
