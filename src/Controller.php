<?php
namespace minimvcSite;
use minimvc;

class Controller extends minimvc\Controller {

    protected function getViewPath() {
        return __DIR__ . '/../views';
    }

    protected function preRun() {
        // menu displayed in the layout views/__default.php
        $this->menu = array(
            ''        =>'home',
            'install' => 'install',
            'links'   =>'useful links',
        );
    }   

    protected function doIndex() {

    }

    protected function doInstall() {

    }

    protected function doLinks() {

    }
}
