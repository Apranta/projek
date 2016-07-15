<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
  
  private $data = array();

  public function __construct()
  {
    parent::__construct();

    if ( ! $this->session->userdata('login'))
    {
      $this->session->set_flashdata('login', 'Silahkan login terlebih dahulu.');
            redirect('login');
    }
    require_once(APPPATH.'controllers/stringmatch/praprocessing.php'); //include controller
    require_once(APPPATH.'controllers/stringmatch/booyermore.php'); //include controller
    $this->load->model('pengetahuan/tacit_model');
    $this->load->model('pengetahuan/eksplisit_model');
    $this->data['judulhalaman'] = 'Dashboard';    
  }

  public function index()
  {   
    //$this->data['last_tacit'] = $this->tacit_model->get_last();
    //$this->data['last_eksplisit'] = $this->eksplisit_model->get_last();

    $this->data['list_tacit'] = $this->tacit_model->get_ten_descend();
    $this->data['list_eksplisit'] = $this->eksplisit_model->get_ten_descend();

    $this->load->model('pengguna_model');

    //$this->load->view('header', $this->data);
    //$this->load->view('sidebar', $this->data);
    //$this->load->view('dashboard/dashboard', $this->data);
    //$this->load->view('footer');
    $this->load->view('slate/dashboard/dashboard', $this->data);
  }

  public function list_pengetahuan() {
    $this->data['list_tacit'] = $this->tacit_model->get_all();
    $this->data['list_eksplisit'] = $this->eksplisit_model->get_all();

    $this->load->view('slate/dashboard/list_pengetahuan', $this->data);
  }

  public function ranking()
  {
    if ($this->session->userdata('tipeuser') === 'sekertaris') {
        $this->data['ranking_tacit'] = $this->tacit_model->get_rank();
        $this->data['ranking_eksplisit'] = $this->eksplisit_model->get_rank();
        $this->load->view('slate/ranking_pengetahuan', $this->data); 
    } else {
        $this->index();
    }
  }

  public function index2()
  {
    $this->data['last_tacit'] = $this->tacit_model->get_last();
    $this->data['last_eksplisit'] = $this->eksplisit_model->get_last();

    $this->load->view('header', $this->data);
    $this->load->view('sidebar', $this->data);
    $this->load->view('dashboard/dashboard', $this->data);
    $this->load->view('footer');
  }


  public function search() {
    $pattern = $this->input->post('kata_kunci');
    $this->praprocess = new Praprocessing();
    $pattern = $this->praprocess->casefolding($pattern);
    $pattern = $this->praprocess->tokenizing($pattern);

    $this->data['text_tacit'] = array();
    $this->data['text_eksplisit'] = array();

    $this->booyer = new Booyermore();

    $text_tacit = $this->tacit_model->get_all();
    if ($text_tacit != null) {
        foreach ($text_tacit as $row) {
            foreach ($pattern as $p) {
                if ($this->booyer->BoyerMoore($this->praprocess->casefolding($row->masalah), $p) != -1) {
                    $this->data['text_tacit'] []= $row;
                    break;
                }
            }
        }
    }

    $text_eksplisit = $this->eksplisit_model->get_all();
    if ($text_eksplisit != null) {
        foreach ($text_eksplisit as $row) {
            foreach ($pattern as $p) {
                if ($this->booyer->BoyerMoore($this->praprocess->casefolding($row->deskripsi), $p) != -1) {
                    $this->data['text_eksplisit'] []= $row;
                    break;
                }
            }
        }
    }

    $this->load->view('slate/dashboard/dashboard', $this->data);
  }

  public function searching()
  {           
    $pattern = $this->input->post('kata_kunci');          
    $this->praprocess =  new Praprocessing();
    $pattern = $this->praprocess->casefolding($pattern);
    $pattern = $this->praprocess->tokenizing($pattern);   

    $this->booyer = new Booyermore();
    
        $text_tacit =  $this->tacit_model->get_all();        
        if($text_tacit != null)
        {
            for($i=0;$i<=max(array_keys($text_tacit));$i++)
            {           
                $text_tacit[$i]->masalah_text = $this->praprocess->tokenizing($text_tacit[$i]->masalah);
                $temp[$i] = 0;
                $counter = 0;
                $this->data['letak_kesamaan_tacit'][$i] = 0;
                $this->data['letak_kesamaan_akhir_tacit'][$i] = 0 ;
                for($j=0;$j<=max(array_keys($text_tacit[$i]->masalah_text));$j++)
                {               
                    for($k=0;$k<=max(array_keys($pattern));$k++)
                    {                    
                        $index = $this->booyer->boyer_moore($this->praprocess->casefolding($text_tacit[$i]->masalah_text[$j]), $pattern[$k]);
                        if($index != '-1')
                        {
                            $letak_kesamaan[$i] = $index;
                            $letak_kesamaan_akhir[$i] = $index + strlen($pattern[$k]);
                        
                            $temp[$i]++;
                        }
                    }               
                }
            }
            //$this->data['text'] = null;
            $this->data['temp_tacit'] = $temp;
            $this->data['text_tacit'] = $text_tacit;
            //$this->data['temp_index'] =null;
            $this->data['sortValue_tacit'] = $this->sortValue(max(array_keys($text_tacit)),$temp);
            $this->data['temp_index_tacit'] = $this->sortIndex(max(array_keys($text_tacit)),$temp);
        }        
        
        //Eksplisit

        $text_eksplisit = $this->eksplisit_model->get_all();
        if($text_eksplisit!= null)
        {
            for($i=0;$i<=max(array_keys($text_eksplisit));$i++)
            {           
                $text_eksplisit[$i]->masalah_text = $this->praprocess->tokenizing($text_eksplisit[$i]->deskripsi);
                $temp_eksplisit[$i] = 0;
                $counter_eksplisit = 0;
                $this->data['letak_kesamaan_eksplisit'][$i] = 0;
                $this->data['letak_kesamaan_akhir_eksplisit'][$i] = 0 ;

                for($j=0;$j<=max(array_keys($text_eksplisit[$i]->masalah_text));$j++)
                {               
                    for($k=0;$k<=max(array_keys($pattern));$k++)
                    {                    
                        $index = $this->booyer->boyer_moore($this->praprocess->casefolding($text_eksplisit[$i]->masalah_text[$j]), $pattern[$k]);
                        if($index != '-1')
                        {
                            //$letak_kesamaan[$i] = $index;
                            //$letak_kesamaan_akhir[$i] = $index + strlen($pattern[$k]);                        
                            $temp_eksplisit[$i]++;
                        }
                    }               
                }
            }
            //$this->data['text'] = null;        
            $this->data['temp_eksplisit'] = $temp_eksplisit;        
            $this->data['text_eksplisit'] = $text_eksplisit;
            //$this->data['temp_index'] =null;
            $this->data['sortValue_eksplisit'] = $this->sortValue(max(array_keys($text_eksplisit)),$temp_eksplisit);
            $this->data['temp_index_eksplisit'] = $this->sortIndex(max(array_keys($text_eksplisit)),$temp_eksplisit);
        
        }
        
        //$this->load->view('header', $this->data);
        //$this->load->view('sidebar', $this->data);
        //$this->load->view('dashboard/dashboard', $this->data);
        //$this->load->view('footer');

        $this->load->view('slate/dashboard/dashboard', $this->data);
  }

  function sortIndex($max_index, $temp_index)
  {     
    $temp = $temp_index;
    for($i=0;$i<=$max_index;$i++)
    {
      $temp_index[$i] = $i;
    }

    for($i=0;$i<=$max_index;$i++)
    {     
      for($j=$i+1;$j<=$max_index;$j++)
      {
        if($temp[$i] < $temp[$j])
        {
          $penampung = $temp[$i]; 
          $penampung_index = $temp_index[$i];       

          $temp[$i] = $temp[$j];    
          $temp_index[$i] = $temp_index[$j];

          $temp[$j] = $penampung;               
          $temp_index[$j] = $penampung_index;
        }
      }
    }
    return $temp_index;

  }

    function sortValue($max_index, $temp_index)
    {
        $temp = $temp_index;        

        for($i=0;$i<=$max_index;$i++)
        {           
            for($j=$i+1;$j<=$max_index;$j++)
            {
                if($temp[$i] < $temp[$j])
                {
                    $penampung = $temp[$i];                     
                    $temp[$i] = $temp[$j];                          
                    $temp[$j] = $penampung;                                              
                }
            }
        }        

        return $temp;

    }

  
}
