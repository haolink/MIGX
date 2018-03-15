<?php

$modx = &$object->xpdo;

$dbType = $modx->getOption('dbtype');

$modx->log(modX::LOG_LEVEL_INFO, 'create/upgrade tables for db type ' . $dbType);
if ($object->xpdo) {

    $packageName = 'migx';
    $prefix = null;
    $restrictPrefix = true;

    $packagepath = $modx->getOption('core_path') . 'components/' . $packageName . '/';
    $modelpath = $packagepath . 'model/';
    $schemapath = $modelpath . 'schema/';
    $schemafile = $schemapath . $packageName . '.' . $dbType .  '.schema.xml';


    if (file_exists($schemafile)) {

        $manager = $modx->getManager();
        $generator = $manager->getGenerator();

        switch ($options[xPDOTransport::PACKAGE_ACTION]) {
            case xPDOTransport::ACTION_INSTALL:
            case xPDOTransport::ACTION_UPGRADE:
                $modx->addPackage($packageName, $modelpath, $prefix);
                $migxmodelPath = $modx->getOption('migx.core_path', null, $modx->getOption('core_path') . 'components/migx/') . 'model/';

                $migxPackageManagerPath = $migxmodelPath . 'migx/migxpackagemanager.' . $dbType . '.class.php';
                include_once ($migxPackageManagerPath);
        $modx->log(modX::LOG_LEVEL_INFO, 'Schema file available');
                $pkgman = new MigxPackageManager($modx);

                break;
        }

        switch ($options[xPDOTransport::PACKAGE_ACTION]) {
            case xPDOTransport::ACTION_INSTALL:
            case xPDOTransport::ACTION_UPGRADE:
                //create tables
                $pkgman->parseSchema($schemafile, $modelpath, true);
                $pkgman->createTables();

                $options['addmissing'] = 1;
                $options['removedeleted'] = 1;
                $options['checkindexes'] = 1;

                $pkgman->checkClassesFields($options);

                $modx->log(modX::LOG_LEVEL_INFO, 'tables upgraded');

                break;
        }
    }


}
return true;
