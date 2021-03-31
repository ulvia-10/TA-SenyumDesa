<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_dataakun extends CI_Model
{

        public function get_dataakun(){
        // return $this->db->query($sql);
        $query = $this->db->query('SELECT a.id_profile, a.full_name,a.username,a.level,b.id_cabang,b.name_cabang 
        from akun_profile a, master_cabang b 
        where a.id_cabang = b.id_cabang');
        return $query;
         }

        public function getProfileByID($id){
            $query = $this->db->get_where('akun_profile', array('id_profile'=>$id));
            return $query->row_array(); 
        }

   public function editdata()
   {
    $id_profile = $this->input->post('id_profile');

    $config['upload_path']          = './assets/images/'; // direktori lokal
    $config['allowed_types']        = 'jpeg|jpg|png'; // ekstensi
    $config['max_size']             = 3000; // 3 mb

    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    $foto = "";
    
    if ( !empty( $_FILES['photo']['name'] ) ) {

        // check data upload 
        if ( !$this->upload->do_upload('photo') ){

            $upload_error = $this->upload->display_errors();

            $msg = '<div class="alert alert-danger">Akun Gagal Diperbarui!  <br> <p>'.$upload_error.'</p> <small>Pada tanggal '.date('d F Y H.i A').'</small></div>';
            $this->session->set_flashdata('flash-data', $msg);
            redirect('C_data/edit/'. $id_profile);
         } else{
            $new_photo = $this->upload->data('file_name');  // new file
            $dataAkunById = $this->db->get_where('akun_profile', ['id_profile' => $id_profile])->row();

            if ( $dataAkunById->photo ) {

                $data_foto = explode(',', $dataAkunById->photo);

                array_push( $data_foto, $new_photo );

                // implode  
                if ( count( $data_foto ) > 1 ) {

                    $photo = implode(',', $data_foto);
                } else { // jika data foto hnaya 1

                    $photo = $new_photo;
                }
            }

        }
    }else{
        $dataAkunById = $this->db->get_where('akun_profile', ['id_profile' => $id_profile])->row();
        $photo = $dataAkunById->photo;
    }

  
    $data = [
        'id_profile'   => $this->input->post('id_profile'),
        'full_name'    => $this->input->post('full_name'),
        'username'    => $this->input->post('username'),
        'email'    => $this->input->post('email'),
        'password'     => $this->input->post('password'),
        'telp'     => $this->input->post('telp'),
        'tempat_lahir'    => $this->input->post('tempat_lahir'),
        'tanggal_lahir'    => $this->input->post('tanggal_lahir'),
        'asal'    => $this->input->post('asal'),
        'gender'         => $this->input->post('gender'),
        'level'        => $this->input->post('level'),
        'id_cabang'   => $this->input->post('id_cabang'),
        'status_account'   => $this->input->post('status_account'),
        'address'   => $this->input->post('address'),
         'photo'  => $foto
  ];

      $this->db->where('id_profile', $id_profile);
      $this->db->update('akun_profile', $data);

      $msg = '<div class="alert alert-info">Akun berhasil diperbarui <br><small>Pada tanggal '.date('d F Y H.i A').'</small></div>';
      $this->session->set_flashdata('flash-data', $msg);
      redirect('data_akun/edit/'. $id_lapor);
   }

   public function hapusdataakun($id){
    $this->db->where('id_profile',$id);
    $this->db->delete('akun_profile');
    redirect('data_akun/delete','refresh');
}
public function tambahdataakun(){
     $foto = "";

            $id_user = $this->session->userdata('sess_id');


            $dataUploaded = array();
            $dataError    = array();


            for ( $i = 0; $i < count( $_FILES['photo']['name'] ); $i++ ) {

                $_FILES['photo[]']['name'] 	= $_FILES['photo']['name'][$i];
                $_FILES['photo[]']['type'] 	= $_FILES['photo']['type'][$i];
                $_FILES['photo[]']['tmp_name']  = $_FILES['photo']['tmp_name'][$i];
                $_FILES['photo[]']['error'] 	= $_FILES['photo']['error'][$i];
                $_FILES['photo[]']['size'] 	= $_FILES['photo']['size'][$i];

                $config['upload_path']          = './assets/images/'; // direktori lokal
                $config['allowed_types']        = 'jpeg|jpg|png'; // ekstensi
                $config['max_size']             = 3000; // 3 mb

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
            
             // check data foto upload 
             if ( !$this->upload->do_upload('photo[]') ){

                array_push( $dataError, array(

                    'name'  => $_FILES['photo']['name'][$i],
                    'error' => $this->upload->display_errors() 
                ) );
            } else {

                array_push( $dataUploaded, $this->upload->data('file_name') );
            }

               // sesi insert
               if ( count($dataError) > 0 ) { // upload error


                
                $file_gagalupload = "";
                foreach ( $dataError AS $row ) {

                    $file_gagalupload .= '<p>- '.$row['name'].' <br> '.$row['error'].'</p>';
                }

                $pesan = '<div class="alert alert-danger">Pemberitahuan <br> '.$file_gagalupload.'</div>';
                $this->session->set_flashdata('msg', $pesan);

                redirect('data_akun');
            } else {

                $foto = implode(',', $dataUploaded);
            }

            $data = array(

                'id_profile'   => $this->input->post('id_profile'),
                'full_name'    => $this->input->post('full_name'),
                'username'    => $this->input->post('username'),
                'email'    => $this->input->post('email'),
                'password'     => $this->input->post('password'),
                'telp'     => $this->input->post('telp'),
                'tempat_lahir'    => $this->input->post('tempat_lahir'),
                'tanggal_lahir'    => $this->input->post('tanggal_lahir'),
                'asal'    => $this->input->post('asal'),
                'gender'         => $this->input->post('gender'),
                'level'        => $this->input->post('level'),
                'id_cabang'   => $this->input->post('id_cabang'),
                'status_account'   => $this->input->post('status_account'),
                'address'   => $this->input->post('address'),
                 'photo'  => $foto
            );

            // execute
            $this->db->insert( 'akun_profile', $data );

            $pesan = '<b>Pemberitahuan</b> <br> Data cabang berhasil dihapus pada ' . date('d F Y H.i A') . '</div>';


            $this->session->set_flashdata('msg', $pesan);
            redirect('data_akun/index');
            
        }
}
}
