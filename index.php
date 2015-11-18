<?php

  require 'vendor/autoload.php';

  use Philo\Blade\Blade;

  $views = 'resources/views';
  $cache = 'cache';

  $blade = new Blade($views, $cache);
  echo $blade->view()->make('hello')->render();
