<?php


class AdminTestimonialsController extends ModuleAdminController
{

    public function __construct()
    {

        $this->bootstrap = true;
        $this->table = 'sotestimoniales';
        $this->className = 'ListTestimonails';


        $this->fields_list = array(
			'name' => array('title' => $this->l('name')),
            'descpt' => array('title' => $this->l('descpt')),
		);

        parent::__construct();

    }

}
