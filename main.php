<?php 
    require_once 'header.php';
?>

 <?php 
    
    $page = $_GET['page'];

    switch ($page) {
        case 'home':
             require_once 'home.php';
            break;
        case 'about':
             require_once 'about.php';
            break;
        
        default:
             require_once 'error.php';
            break;
    }
 ?>

<?php 
   require_once 'footer.php'
?>