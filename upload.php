require_once ('lib/Twig/Autoloader.php');
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
//    'cache' => 'cache',
));
$db = new SQLite3('db/roster.db',SQLITE3_OPEN_CREATE);

$result = $db->query('SELECT text, priority FROM users');
$students = array();
while ($student = $result->fetchArray(SQLITE3_ASSOC)){
    $students[] = $student;
}
