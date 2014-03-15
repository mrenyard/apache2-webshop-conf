<?php
/**
 *
 */
require_once('FirePHPCore/FirePHP.class.php');
$console = \FirePHP::getInstance( \TRUE );
$console->registerErrorHandler( $throwErrorExceptions=\TRUE );
$console->registerExceptionHandler();
$console->registerAssertionHandler(
  $convertAssertionErrorsToExceptions=\TRUE,
  $throwAssertionExceptions=\TRUE
);
$console->setEnabled(\FALSE);
require_once('FirePHPCore/fb.php');

// Check conditions are right for Debug mode and if so enable.
if (strpos($_SERVER["HTTP_HOST"], 'dev.') === 0) {
  if ((ini_get('display_errors')) && (ini_get('display_startup_errors'))) {
    FB::setEnabled(\TRUE);
    define('DEV_MODE', \TRUE);
    ob_start();
    FB::info('DEBUG MODE Enabled!');
  }
}
if (!defined('DEV_MODE')) { define('DEV_MODE', \FALSE); }
