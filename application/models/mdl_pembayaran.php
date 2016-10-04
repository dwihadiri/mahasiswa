<?php

class Mdl_pembayaran extends CI_Model{
function __construct()
    {
        parent::__construct();
    }

    
        function insert_pembayaran($spp,$bpp,$sks,$biaya)
                   {
            $data = array (
                'spp' =>  $spp,
                'bpp' =>  $bpp,
				'sks' =>  $sks,
                'biaya' => $biaya
             );
            $this->db->insert('pembayaran', $data);
        }
       
        function update_pembayaran($txtid_spp,$spp,$bpp,$sks,$biaya)
                    {
            $this->db->where('pembayaran', $txtid_spp);
            $data = array (
                'spp' =>  $spp,
                'bpp' =>  $bpp,
                'sks' => $sks,
				'biaya' => $biaya,
				
               
             );
            $this->db->update('pembayaran', $data);
        }
      
		/*function get_data_calon(){
                    $strsql= "SELECT * from calon ";id_negara,a.nama,kode,status,b.nama as nama_kota from negara a left join negara b on b.id_kota=a.id_kota";
                    $query = $this->db->query($strsql);
                    $get = $query->result();
                    return $get;
        }*/
		function get_data_pembayaran(){
                    $strsql= "SELECT * from pembayaran ";/*id_negara,a.nama,kode,status,b.nama as nama_kota from negara a left join negara b on b.id_kota=a.id_kota";*/
                    $query = $this->db->query($strsql);
                    $get = $query->result();
                    return $get;
        }
        
		/*function get_data_calon_edit($id){
                    $strsql= "SELECT * from calon where calon='$id' ";
                    $query = $this->db->query($strsql);
                    $get = $query->result();
                    return $get;
		}*/
		function get_data_pembayaran_edit($id){
                    $strsql= "SELECT * from pembayaran where id_spp='$id' ";
                    $query = $this->db->query($strsql);
                    $get = $query->result();
                    return $get;
		}
       
		/*function delete_calon($id){
            $strsql= "DELETE from calon where calon='$id' ";
            $query = $this->db->query($strsql);
            
        }*/
		function delete_pembayaran($id){
            $strsql= "DELETE from pembayaran where id_spp='$id' ";
            $query = $this->db->query($strsql);
            
        }
		/*function hapus($nim,$nama,$jurusan)
                    {
                    
             $where = array(
                'calon' => $id
                );
                    $this->db->hapus_data($where,'calon');
                    
                    redirect('mahasiswa');
            }*/
		function hapus_pembayaran($spp,$bpp,$sks,$biaya)
                    {
                    
             $where = array(
                'id_spp' => $id
                );
                    $this->db->hapus_data($where,'pembayaran');
                    
                    redirect('mahasiswa/pembayaran');
            }
		/*function delete_pembayaran($id){
				$this->db->where('id_spp', $id_spp);
				$data = array ( 
					'is_delete'  => '1'
				);
				$this->db->update('pembayaran', $data);
			}*/			
		
    }      

?>
