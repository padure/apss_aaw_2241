<?php
    require_once __DIR__ . '/../vendor/autoload.php';

    use Monolog\Level;
    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;

    $log = new Logger('name');
    $log->pushHandler(new StreamHandler('path/to/your.log', Level::Warning));

    // add records to the log
    $log->warning('Foo');
    $log->error('Bar');

