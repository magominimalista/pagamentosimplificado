<?php
declare(strict_types=1);

use Src\Helper\AllowHeaders;

include_once __DIR__.'./vendor/autoload.php';

/*
*****************************************************
Developer options
*****************************************************
*/

ini_set('display_errors', 1);
error_reporting(~0);

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

/*
*****************************************************
Set time zone
*****************************************************
*/

setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

/*
*****************************************************
Set headers permissions: PUT | PATH | DELETE
*****************************************************
*/

$allowHeaders = new AllowHeaders();

/*
*****************************************************
App Variables
*****************************************************
*/

Flight::set('flight.views.path', __DIR__.'/app/Views');
Flight::set('flight.log_errors', true);
$api_path = __DIR__ . '/app/Controllers/Api/';


/*
*****************************************************
Routes APP
*****************************************************
*/

require_once __DIR__ . '/app/Controllers/App/Index.php';

/*
*****************************************************
Routes API
*****************************************************
*/

require_once $api_path.'Account.php';
require_once $api_path.'Active.php';
require_once $api_path.'Balance.php';
require_once $api_path.'Deposit.php';
require_once $api_path.'Historic.php';
require_once $api_path.'Login.php';
require_once $api_path.'Register.php';
require_once $api_path.'Transfer.php';
require_once $api_path.'Users.php';
require_once $api_path.'Withdraw.php';

/*
*****************************************************
Start the App
*****************************************************
*/
Flight::start();