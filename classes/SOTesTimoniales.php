<?php
class SOTesTimoniales extends Module
{
    public function __construct()
    {
        $this->name = 'sotestimoniales';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Salwa';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('SO Test Timoniales');
        $this->description = $this->l('Description of my module.');


        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

        if (!Configuration::get('SOTesTimoniales_NAME')) {
            $this->warning = $this->l('No name provided');
        }
    }
    public function install()
    {
        return parent::install()&&
        $this->addAdminTestimonials();

    }

    public function uninstall()
    {
        return parent::uninstall() &&
        $this->removeAdminTestimonials();

    }

    public function addAdminTestimonials()
    {
        $tab = new Tab();
        foreach(Language::getLanguages(false) as $lang)
            $tab->name[(int) $lang['id_lang']] = 'SOTesTimoniales';
        // Nom du controller sans le mot clé "Controller"
            $tab->class_name = 'AdminTestimonials';
            $tab->module = $this->name;
            $tab->id_parent = 0;
            if (!$tab->save())
                return false;
            return true;
    }
    // Suppression d'onglets
    public function removeAdminTestimonials()
    {
        $classNames = array('admin_testimonials' => 'AdminTestimonials');
        $return = true;
        foreach ($classNames as $key => $className) {
            $tab = new Tab(Tab::getIdFromClassName($className));
            $return &= $tab->delete();
        }
        return $return;
    }

}
