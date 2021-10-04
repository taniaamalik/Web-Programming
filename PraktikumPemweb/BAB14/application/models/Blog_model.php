<?php

class Blog_model extends CI_Model {

  public function get_posts() {
    $this->load->database();

    $query = $this->db->get('post');
    
    return $query->result();
  }

  public function insert_post($judul, $konten) {
    $this->load->database();
    $data = array ('judul' => $judul, 'konten' => $konten);
    $this->db->insert('post', $data);
  }
  
  public function delete_post($id) {
    $this->load->database();
    $this->db->delete('post', array('id' => $id));
  }

  public function get_particular_posts($id){
    $this->load->database();
    $this->db->where("id", $id);
    $query = $this->db->get('post');
      
    return $query->result();
  }
  public function update($id, $judul, $konten){
    $this->load->database();
    $this->db->where("id", $id);
    $data = array('judul' => $judul, 'konten' => $konten);
    $this->db->update('post', $data);
  }
}