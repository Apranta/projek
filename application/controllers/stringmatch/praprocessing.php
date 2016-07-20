<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class praprocessing extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('reward_model');
    }

    public function casefolding($sentence)
    {
    	$str = mb_convert_case($sentence, MB_CASE_LOWER, "UTF-8");
    	$str = str_replace(".", "", $str);
		$str = str_replace(",", "", $str);
        $str = str_replace(":", "", $str);        
		return $str;
    }

    public function tokenizing($sentence)
    {    	
        
		$word = explode(" ", $sentence);
		return $word;
        
    }

}