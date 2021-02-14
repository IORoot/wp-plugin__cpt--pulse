<?php

namespace andyp\labs\cpt\pulse;

class initialise
{

    public $singular = 'pulse'; //lowercase
    public $svgdata_icon = 'data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMjQgMjQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTExLjUsMjBMMTYuMzYsMTAuMjdIMTNWNEw4LDEzLjczSDExLjVWMjBNMTIsMkMxNC43NSwyIDE3LjEsMyAxOS4wNSw0Ljk1QzIxLDYuOSAyMiw5LjI1IDIyLDEyQzIyLDE0Ljc1IDIxLDE3LjEgMTkuMDUsMTkuMDVDMTcuMSwyMSAxNC43NSwyMiAxMiwyMkM5LjI1LDIyIDYuOSwyMSA0Ljk1LDE5LjA1QzMsMTcuMSAyLDE0Ljc1IDIsMTJDMiw5LjI1IDMsNi45IDQuOTUsNC45NUM2LjksMyA5LjI1LDIgMTIsMloiLz48L3N2Zz4=';


    public function run()
    {
        $this->setup_cpt();
        $this->register_cpt();
        $this->switch_on_metaboxes();
    }

    public function setup_cpt()
    {
        $this->cpt = new cpt\create_cpt;
        $this->cpt->set_singular(ucfirst($this->singular));
        $this->cpt->set_icon($this->svgdata_icon);
    }
    
    public function register_cpt()
    {
        $this->cpt->register();
    }

    /**
     * This is only for activation.
     * Otherwise it runs on an init filter
     */
    public function run_cpt()
    {
        $this->cpt->run_cpt();
    }

    public function switch_on_metaboxes()
    {
        new acf\switch_on_metaboxes;
    }


}