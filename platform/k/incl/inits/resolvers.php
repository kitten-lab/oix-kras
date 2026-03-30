<?php 

// Resolve the Root Shell (routes to correct shell for the $dom)
function resolveShell($sys) {
    $prime = __DIR__ . "/../../../a/$sys/asSys/shell.php";
    $kroot = __DIR__ . "/../../../a/_/__sys.shell.php";

    return file_exists($prime) ? $prime : $kroot;
    }
// ----------------------------------------------------------------

?>