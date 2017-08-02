<?php

class sotestimonialeslistModuleFrontController extends ModuleFrontController
{
    public function init()
    {
        parent::init();
        $listtestimonailes = $this->getposts();
        // die(var_dump($articles));
        $this->setTemplate('list.tpl');
        foreach ($listtestimonailes as $testimonaile) {
            $testimonaile['link'] = $this->context->link->getModuleLink('sotestimoniales', 'detail', array('id' =>$testimonaile['id_sotestimoniales']));
            $testimonailes[] = $testimonaile;

        }
        $this->context->smarty->assign('testimonailes', $testimonailes);
    }

    public function getposts()
    {
        global $smarty;
        $articles = array();
        $dbquery= new DbQuery();
        $dbquery->select('*');
        $dbquery->from('sotestimoniales');

        return Db::getInstance()->executeS($dbquery);


    }
}
