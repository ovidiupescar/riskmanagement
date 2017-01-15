<?php
class FMEA_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
	
        public function get_risks($slug = FALSE)
	{
		if ($slug === FALSE)
		{
                        $query = $this->db->get('news');
			return $query->result_array();
		}

		$query = $this->db->get_where('news', array('slug' => $slug));
		return $query->row_array();
	}
        
        public function get_programs()
	{
	     $query = $this->db->get('programs');
            return $query->result_array();
	}
        
        public function set_risks($test_mode)
        {
            $this->load->helper('url');
            $this->load->helper('string');
            
            $severity = random_string('numeric', 1) + 1;
            $occurrence = random_string('numeric', 1) + 1;
            $detection = random_string('numeric', 1) + 1;
            
            $RPN = $severity * $occurrence * $detection;
            
            $programs = $this->get_programs();
            
            $rand_number = mt_rand(1, count($programs));
            
            $i=1;
            foreach ($programs as $program_item)
            {
               if($i == $rand_number)
                   $random_program = $program_item['program']; 
               $i++;
            }
            
            if($test_mode == TRUE)
            {
                $data = array(
                    'where_where'            => 	$random_program,
                    'what_what'	             => 	'what_what'.random_string('alpha', 16),
                    'potential_failure_mode' => 	'potential_failure_mode'.random_string('alpha', 16),
                    'effect'	             => 	'effect'.random_string('alpha', 16),
                    'severity'	             => 	$severity	,
                    'why'	             => 	'why'.random_string('alpha', 16),
                    'occurrence'	     => 	$occurrence	,
                    'current_control'	     => 	'current_control'.random_string('alpha', 16),
                    'detection'	             => 	$detection	,
                    'actions_recommended'    => 	'actions_recommended'.random_string('alpha', 16),
                    'action_owner'           => 	'action_owner'.random_string('alpha', 16),
                    'task_id'                => 	'task_id'.random_string('alpha', 16),
                    'RPN'                    =>         $RPN,
                    'created_by'             =>         'test_user',
                    'mod_by'                 =>         'test_user'

                );
       
            }
            
            else 
            {
                $data = array(
                    'where_where'            => $this->input->post(	'where_where'),
                    'what_what'              => $this->input->post(	'what_what'),
                    'potential_failure_mode' => $this->input->post(	'potential_failure_mode'),
                    'effect'                 => $this->input->post(	'effect'),
                    'severity'               => $this->input->post(	'severity'),
                    'why'                    => $this->input->post(	'why'),
                    'occurrence'             => $this->input->post(	'occurrence'),
                    'current_control'	 => $this->input->post(	'current_control'),
                    'detection'              => $this->input->post(	'detection'),
                    'actions_recommended'	 => $this->input->post(	'actions_recommended'),
                    'action_owner'           => $this->input->post(	'action_owner'),
                    'task_id'                => $this->input->post(	'task_id'),
                    'RPN'                    => $RPN

                );
            }
            
            

            return $this->db->insert('fmea', $data);
        }
		

}
?>