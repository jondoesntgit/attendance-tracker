<?php

require_once ('lib/Twig/Autoloader.php');
Twig_Autoloader::register();

$arg1 = 'unset';

if (isset($_GET['p'])){
    $arg1 = $_GET['p'];
}

//$arg2 = 'unset';

if (isset($_GET['sp'])){
    $arg2 = $_GET['sp'];
}

if(isset($arg2)){
	$file_root = '..';
} else {
	$file_root = '.';
}

switch($arg1){
	case "reports":
	case "report":
		$page = 'reports';
		break;
	case "upload":
    case "uploads":
		$page = 'upload';
		break;
	case "classes":
	case "class":
		$page = 'classes';
		break;
    case "users":
    case "user":
        $page = 'users';
        break;
	case "home":
	case "index":
	case "dashboard":
	default:
		$page = 'dashboard';
}

$active_filter = new Twig_SimpleFilter('is_active', function($string){
	if ($string == $page){
		return "active";
	} else {
		return;
	}
});

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
//    'cache' => 'cache',
));
$twig->addFilter($active_filter);
//$db = new SQLite3('db/roster2.db',SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE);

//$result = $db->query('SELECT text, priority FROM users');
//$students = array();
//while ($student = $result->fetchArray(SQLITE3_ASSOC)){
//    $students[] = $student;
//}
//var_dump($students);
//echo $twig->render('eigen-attendance-table.html', array(
//    'students'=> $students,
//));

$template = $twig->load('index.html');
echo $twig->render('index.html', array(
    'name'=>"Jonathan",
    'address' => "729 Escondido Rd",
    'arg1' => $arg1,
    'page' => $page,
    'root' => $file_root,
));

?>
