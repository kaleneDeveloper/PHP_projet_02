<?php 
require '../app/autoloader.php';
App\Autoloader::register();

if(isset($_GET['p'])) {
    $p = $_GET['p'];
}else {
    $p = 'home';
}
// initialisation des objets

ob_start();
if($p === 'home') {
    require '../pages/home.php';
} elseif($p === 'article') {
    require '../pages/single.php';
}elseif($p === 'category') {
    require '../pages/category.php';
}
$content = ob_get_clean();
require '../pages/templates/default.php'
?>

