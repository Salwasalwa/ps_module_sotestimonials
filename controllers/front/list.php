<?php

class sotestimonialeslistModuleFrontController extends ModuleFrontController {
    public function init(){
        parent::init();
        $testimonailes = $this->getposts();
        // die(var_dump($articles));
        $this->setTemplate('list.tpl');
        $this->context->smarty->assign('testimonailes', $testimonailes);
    }

    public function getposts(){
        global $smarty;
        $articles = array();
        $dbquery= new DbQuery();
        $dbquery->select('*');
        $dbquery->from('sotestimoniales');

        return Db::getInstance()->executeS($dbquery);


    }
}
