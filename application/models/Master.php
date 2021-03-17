<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Master extends CI_Model {
    


        // ambil data cabang
        function getDataCabang( $kondisi ) {

            return $this->db->get_where('master_cabang', $kondisi)->result_array();
        }
    
    }
    
    /* End of file Master.php */
    