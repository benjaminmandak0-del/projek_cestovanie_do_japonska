<?php
// Simple autoloader for this project.
// Autoloads classes from core/, pages/, components/, services/

spl_autoload_register(function (string $class): void {
    $baseDir = dirname(__DIR__); // templatemo_564_plot_listing

    $classPath = str_replace('\\', '/', $class);

    // Allow classes like: Core\Request, Pages\IndexPage, Services\...
    $candidates = [
        $baseDir . '/' . $classPath . '.php',
        $baseDir . '/core/' . basename($classPath) . '.php',
        $baseDir . '/pages/' . basename($classPath) . '.php',
        $baseDir . '/services/' . basename($classPath) . '.php',
        $baseDir . '/components/' . basename($classPath) . '.php',
    ];

    foreach ($candidates as $file) {
        if (is_file($file)) {
            require_once $file;
            return;
        }
    }
});

