<?php


class AdminTestimonialsController extends ModuleAdminController
{

    public function __construct()
    {

        $this->bootstrap = true;
        $this->table = 'sotestimoniales';
        $this->className = 'ListTestimonails';
        $this->actions = array('delete');



        $this->fields_list = array(
			'nam' => array('title' => $this->l('nam')),
            'descpt' => array('title' => $this->l('descpt')),
		);


        $this->fields_form = array(
			'legend' => array(
                'title' => $this->l('nam')
            ),

            'input' => array(
                array(
                    'type' => 'text',
                    'label' => $this->l('Name'),
                    'name' => 'nam',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('descpt:'),
                    'name' => 'descpt',
                ),
            ),

            'submit' => array(
                'title' => $this->l('Save'),
                'class' => 'button',
            ),

		);
        parent::__construct();

    }

}
