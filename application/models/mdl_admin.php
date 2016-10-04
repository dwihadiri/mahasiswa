<?php

class Mdl_admin extends CI_Model{
function __construct()
    {
        parent::__construct();
    }

    
        function insert_calon($nim,$nama,$jurusan)
                   {
            $data = array (
                'nim' =>  $nim,
                'nama' =>  $nama,
                'jurusan' => $jurusan,
             );
            $this->db->insert('calon', $data);
        }
       
        function update_calon($txtcalon,$nim,$nama,$jurusan)
                    {
            $this->db->where('calon', $txtcalon);
            $data = array (
                'nim' =>  $nim,
                'nama' =>  $nama,
                'jurusan' => $jurusan,
               
             );
            $this->db->update('calon', $data);
        }
      
		function get_data_calon(){
                    $strsql= "SELECT * from calon ";/*id_negara,a.nama,kode,status,b.nama as nama_kota from negara a left join negara b on b.id_kota=a.id_kota";*/
                    $query = $this->db->query($strsql);
                    $get = $query->result();
                    return $get;
        }
        
		function get_data_calon_edit($id){
                    $strsql= "SELECT * from calon where calon='$id' ";
                    $query = $this->db->query($strsql);
                    $get = $query->result();
                    return $get;
		}
       
		function delete_calon($id){
            $strsql= "DELETE from calon where calon='$id' ";
            $query = $this->db->query($strsql);
            
        }
		/*function delete_calon($id){
			$this->db->where('calon', $id);
		    $data = array ( 
			 'is_delete'  => '1'
		    );$this->db->update('calon', $data);
        }*/
		function hapus($nim,$nama,$jurusan)
                    {
                    
             $where = array(
                'calon' => $id
                );
                    $this->db->hapus_data($where,'calon');
                    
                    redirect('mahasiswa');
            }
		
    }      

?>
