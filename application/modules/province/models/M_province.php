<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_province extends CI_Model
{
    private $_table = "province";

    public $id;
    public $name;
    public $created_at;
    public $created_by;
    public $updated_at;
    public $updated_by;

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();

    }
    public function filter($search, $limit, $start, $order_field, $order_ascdesc){
        $this->db->like('name', $search); // Untuk menambahkan query where LIKE
        
        $this->db->order_by($order_field, $order_ascdesc); // Untuk menambahkan query ORDER BY
        $this->db->limit($limit, $start); // Untuk menambahkan query LIMIT
        return $this->db->get($this->_table)->result_array(); // Eksekusi query sql sesuai kondisi diatas
    }
    
    public function count_all(){
        return $this->db->count_all($this->_table); 
    }
    
    public function count_filter($search){
        $this->db->like('name', $search); // Untuk menambahkan query where LIKE
        
        return $this->db->get($this->_table)->num_rows(); // Untuk menghitung jumlah data sesuai dengan filter pada textbox pencarian
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save($data = array())
    {
        
        $this->name = $data["name"];
        $this->created_at = date("Y-m-d H:i:s");
        $this->created_by = $data["created_by"];
      
        $this->db->insert($this->_table, $this);
    }

    public function update($data = array())
    {
        // $post = $this->input->post();
        $this->id = $data["id"];
        $this->name = $data["name"];
        $this->updated_at = date("Y-m-d H:i:s");
        $this->updated_by = $data["updated_by"];

        $this->db->update($this->_table, $this, array('id' => $data['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }

}	