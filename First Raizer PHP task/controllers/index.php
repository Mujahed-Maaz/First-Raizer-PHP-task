<?php 

$users = $app['database']->selectAll('userinfo');

require 'view/index.view.php';
