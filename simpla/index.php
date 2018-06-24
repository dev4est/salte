<?PHP
session_start();

chdir('..');

$_SESSION['id'] = session_id();
$_GET['session_id'] = session_id();

@ini_set('error_reporting', E_ALL);
@ini_set('display_errors', 1);
@ini_set('display_startup_errors', 1);
@ini_set('session.gc_maxlifetime', 86400); // 86400 = 24 часа
@ini_set('session.cookie_lifetime', 0); // 0 - пока браузер не закрыт

require_once('vendor/autoload.php');
require_once('simpla/IndexAdmin.php');



// Кеширование в админке нам не нужно
Header("Cache-Control: no-cache, must-revalidate");
header("Expires: -1");
Header("Pragma: no-cache");


// Установим переменную сессии, чтоб фронтенд нас узнал как админа
$_SESSION['admin'] = 'admin';

$backend = new IndexAdmin();

// Проверка сессии для защиты от xss
if(!$backend->request->check_session())
{
	unset($_POST);
	trigger_error('Session expired', E_USER_WARNING);
}


print $backend->fetch();


