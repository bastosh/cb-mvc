<?php

class Nav
{

  public function show()
  {
    $html = new Html();
    $html->show('../app/views/nav.html');
  }

}
