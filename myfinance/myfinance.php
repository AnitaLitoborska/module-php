<?php
class Myfinance extends Module
{
    public function __construct()
    {
        $this->name = 'myfinance';
        $this->author = 'Anita';
        $this->version = '1.0.1';
        $this->bootstrap = true;
        parent::__construct();
        $this-> displayName = $this->1('Myfinance');
        $this->description = $this->1('This is module finance')
        $this->ps_versions_compliancy = array('min' => '1.0.0' 'max' => '1.0.1')
    }
    public function install()
    {
        return parent::install() && $this->registerHook('displayHome');
    }
    public function uninstall()
    {
        return parent::uninstall();
    }
    public function hookDisplayHome()
    {
        return $this->display(__FILE__, 'views/templates/hook/my.tpl');
    
    }
    public function hookHeader()
    {
        $this->contex->controller->addCSS(array(
            $this->_path.'views/css/myfinance.css'
        ));
        $this->contex->controller->addJS(array(
            $this->_path.'views/js/myfinance.js'
        ));
    }
    public function getContent()
}
