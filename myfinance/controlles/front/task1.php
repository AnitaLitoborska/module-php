<?php
class MyfinanceTaskModuleFrontController extends ModuleFrontController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function init()
    {
        parent::init();
    }
    public function initContent()

    {
        parent::initContent();
        $this->context->smarty->assign(array(
            'product' => Db::getInstance()->getValue('SELECT COUNT(*) FROM `'._DB_PREFIX_.'product'`),
            'categories' => array(),
            'shop_name' => ''
        ));
        $this->setTemplate('module:myfinance/views/templates/front/task.php');
    }
}
