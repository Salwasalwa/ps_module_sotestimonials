<?php

class sotestimonialesdetailModuleFrontController extends ModuleFrontController
{
    public function init()
    {
        parent::init();
        // die(var_dump($articles));
        $this->setTemplate('detail.tpl');
        $testimonaile = $this->getDetailLink(Tools::getValue('id'));
        $this->context->smarty->assign('testimonaile', $testimonaile);

    }

    public function getDetailLink(int $id)
    {

        $dbquery= new DbQuery();
        $dbquery->select('*');
        $dbquery->from('sotestimoniales');
        $dbquery->where('id_sotestimoniales='.$id);


        return Db::getInstance()->executeS($dbquery);

    }
}
