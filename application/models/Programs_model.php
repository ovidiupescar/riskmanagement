<?php

/*
 * @author	Ovidiu Pescar
 * @copyright	Copyright (c) 2017, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @since	Version 1.0.0
 * @filesource
 */

/**
 * Description of Programs_model
 * Model of Programs Table
 * @author Ovidiu Pescar
 */
class Programs_model extends MY_model {
    const DB_TABLE = 'programs';
    const DB_TABLE_PK = 'id';
    /**
     * Program unique identifier
     * @var int
     */
    public $id;
    
    /**
     * Program name
     * @var string
     */
    public $program;
    
    /**
     * Program description
     * @var text
     */
    public $description;


    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
    }
}

?>