<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

    protected function _initAutoload()
    {
        $modelLoader = new Zend_Application_Module_Autoloader(array(
                                                                   'namespace' => '',
                                                                   'basePath'  => APPLICATION_PATH
                                                              ));

        $loader = Zend_Loader_Autoloader::getInstance();
        $loader->registerNamespace('Phorum');

        return $modelLoader;
    }

}

