<?php 

class Retrieve extends CI_Controller {

    public function getData(){
        $this->load->model('Mymodel', 'md');
        $data['students'] = $this->md->getResults();
        $this->load->view('table', $data);
    }
}



?>