<?php

/**
 * Description of contact
 *
 * @author prayoga
 */
class mahasiswa extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
	$this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('file');
        $this->load->helper('cookie');
        $this->load->model('mdl_admin');
		$this->load->model('mdl_pembayaran');
        $this->load->library('pagination');
        $this->pagination->initialize();
    }

    function index(){
        $this->id();
    }
    
    function id(){
        $base_url = $this->config->item('base_url');
        $data['base_url']=$base_url;
        $data['data_kampus'] = $this->mdl_admin->get_data_calon();
        //$data['data_pembayaran'] = $this->mdl_pembayaran->get_data_pembayaran();
        // $data['data_kota'] = $this->mdl_admin->get_kota();
        $this->load->view('kampus', $data);
    }
	function pembayaran(){
        $base_url = $this->config->item('base_url');
        $data['base_url']=$base_url;
        $data['data_pembayaran'] = $this->mdl_pembayaran->get_data_pembayaran();
        $this->load->view('pembayaran', $data);
    }
    
    
    function insert_pembayaran(){


                    $spp=$this->security->xss_clean($this->input->post('spp'));
                    $bpp=$this->security->xss_clean($this->input->post('bpp'));
                    $sks=$this->security->xss_clean($this->input->post('sks'));
					$biaya=$this->security->xss_clean($this->input->post('biaya'));
                    $this->mdl_pembayaran->insert_pembayaran($spp,$bpp,$sks,$biaya);
                    $this->load->view('pembayaran', $data);
                
                
  
                    redirect('mahasiswa/pembayaran','location');
        }
	function insert_calon(){


                    $nim=$this->security->xss_clean($this->input->post('nim'));
                    $nama=$this->security->xss_clean($this->input->post('nama'));
                    $jurusan=$this->security->xss_clean($this->input->post('jurusan'));
                    $this->mdl_admin->insert_calon($nim,$nama,$jurusan);
                    $this->load->view('kampus', $data);
                
                
  
                    redirect('mahasiswa','location');
        }
   
    function update_calon(){
	
					$txtcalon=$this->security->xss_clean($this->input->post('txtcalon'));
                    $nim=$this->security->xss_clean($this->input->post('nim'));
                    $nama=$this->security->xss_clean($this->input->post('nama'));
                    $jurusan=$this->security->xss_clean($this->input->post('jurusan'));
                    $this->mdl_admin->update_calon($txtcalon,$nim,$nama,$jurusan);
                   
                      
                    redirect('mahasiswa','location');
        }
	function update_pembayaran(){
	
					$txtid_spp=$this->security->xss_clean($this->input->post('txtid_spp'));
                    $spp=$this->security->xss_clean($this->input->post('spp'));
                    $bpp=$this->security->xss_clean($this->input->post('bpp'));
                    $sks=$this->security->xss_clean($this->input->post('sks'));
					$biaya=$this->security->xss_clean($this->input->post('biaya'));
                    $this->mdl_pembayara->update_calon($txtid_spp,$nim,$bpp,$sks,$biaya);
                   
                      
                    redirect('mahasiswa/pembayaran','location');	
	function hapus(){
            $id = $this->uri->segment(3);
            $this->mdl_admin->delete_calon($id);
            redirect('mahasiswa', 'location');
	
   
	}
	function hapus_pembayaran(){
            $id = $this->uri->segment(3);
            $this->mdl_pembayaran->delete_pembayaran($id);
            redirect('mahasiswa/pembayaran', 'location');
	
   
	}
	/*function delete_product(){
            $id = $this->uri->segment(3);
            $this->mdl_admin->delete_product($id);
            redirect('admin/product', 'location');
        } Function delete */

	function delete_pembayaran(){
            $id = $this->uri->segment(3);
            $this->mdl_pembayaran->delete_pembayaran($id);
            redirect('mahasiswa/pembayaran', 'location');	
   
	}
	function edit_kampus(){
            $id= $this->uri->segment(3);
            $base_url=$this->config->item('base_url');
            $data['base_url']=$base_url;
            $data['data_kampus'] = $this->mdl_admin->get_data_calon_edit($id);

           foreach ($data['data_kampus'] as $a){
               $data['calon']=$a->calon;
               $data['nim']=$a->nim;
               $data['nama']=$a->nama;
               $data['jurusan']=$a->jurusan;
               

            }
            $this->load->view('edit_kampus',$data);

        }  
	function edit_pembayaran(){
            $id= $this->uri->segment(3);
            $base_url=$this->config->item('base_url');
            $data['base_url']=$base_url;
            $data['data_pembayaran'] = $this->mdl_pembayaran->get_data_pembayaran_edit($id);

           foreach ($data['data_pembayaran'] as $a){
               $data['id_spp']=$a->id_spp;
			   $data['spp']=$a->spp;
               $data['bpp']=$a->bpp;
               $data['sks']=$a->sks;
               $data['biaya']=$a->biaya;
               

            }
            $this->load->view('edit_pembayaran',$data);

        }  
	}
	
}
   	

?>      