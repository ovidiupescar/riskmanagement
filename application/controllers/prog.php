<?php

/*
 * @author	Ovidiu Pescar
 * @copyright	Copyright (c) 2017, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @since	Version 1.0.0
 * @filesource
 */

/**
 * Description of Programs
 *
 * @author Ovidiu
 */
class Prog extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }


    public function index() {
        $this->load->model('Programs_model');
       
//        $this->Programs_model->program='Daily2014';
//        $this->Programs_model->description='gaylord';
//        $this->Programs_model->save();
//        echo '<tt><pre>'.var_export($this->Programs_model, True).'</pre></tt>';
      //  $this->load->view('programs');
    }
}
