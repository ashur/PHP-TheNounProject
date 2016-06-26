<?php

/*
 * This file is part of TheNounProject
 */
namespace TheNounProject;

$pathBaseTheNounProject	= __DIR__;
$pathSrcTheNounProject	= $pathBaseTheNounProject . '/src';

/*
 * Initialize autoloading
 */
include_once( $pathSrcTheNounProject . '/Autoloader.php' );
Autoloader::register();
