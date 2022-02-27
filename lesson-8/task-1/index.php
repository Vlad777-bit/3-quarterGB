<?php

function createDir(): void
{
    $structure = './dir1/dir2/dir3/dir4/dir5';

    if (!mkdir($structure, 0777, true)) {
        echo 'Папки уже созданны';
    }
}
if (!is_dir('dir1')) {
    createDir();
}


$path = $_SERVER['DOCUMENT_ROOT'];

$splRecursiveIteratorObj = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($path),
    RecursiveIteratorIterator::SELF_FIRST,
    false
);

foreach ($splRecursiveIteratorObj as $key => $val) {

    if ($val->getFileName() === '.' || $val->getFileName() === '..')
    {
        continue;
    }

    $getPath = str_replace($path . '/', "", $val->getFileInfo());
    $pathArr = explode('/', $getPath);

    if (count($pathArr) === 1) {
        echo "<br><br>";
    }

    if (is_dir($val) && count($pathArr) === 1) {
        echo "&dtrif;";
    }

    if (is_dir($val) && count($pathArr) !== 1) {
        echo "&dtri;";
    }
    echo str_repeat("&emsp;", count($pathArr)) . $val->getFileName() . "<br>";
}
