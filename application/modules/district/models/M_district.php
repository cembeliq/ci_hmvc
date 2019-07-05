<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_district extends CI_Model
{
    private $_table = "district";

    public $id;
    public $name;
    public $population;
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

            ['field' => 'population',
            'label' => 'Population',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();

    }
    public function filter($search, $limit, $start, $order_field, $order_ascdesc){
        $order_field = 'a.name';
        $this->db->select('a.name as district, b.name as province, a.population, a.created_at, a.created_by, a.updated_at, a.updated_by');
        $this->db->from('district a'); 
        $this->db->join('province b', 'b.id=a.province_id');
        $this->db->like('a.name', $search);
        $this->db->or_like('a.population', $search); 
        $this->db->or_like('b.name', $search); 
        $this->db->order_by($order_field, $order_ascdesc); // Untuk menambahkan query ORDER BY
        $this->db->limit($limit, $start); // Untuk menambahkan query LIMIT        
        $query = $this->db->get(); 
        
        return $query->result_array(); // Eksekusi query sql sesuai kondisi diatas
    }
    
    public function count_all(){
        return $this->db->count_all($this->_table); 
    }
    
    public function count_filter($search){
        $this->db->select('*');
        $this->db->from('district a'); 
        $this->db->join('province b', 'b.id=a.province_id');
        $this->db->like('a.name', $search);
        $this->db->or_like('a.population', $search); 
        $this->db->or_like('b.name', $search); 
        $query = $this->db->get(); 
        return $query->num_rows(); // Untuk menghitung jumlah data sesuai dengan filter pada textbox pencarian
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save($data = array())
    {
        // $post = $this->input->post();
        // $this->product_id = uniqid();
        $this->name = $data["name"];
        $this->province_id = $data["province_id"];
        $this->population = $data["population"];
        $this->created_at = date("Y-m-d H:i:s");
        $this->created_by = $data["created_by"];
      
        $this->db->insert($this->_table, $this);
    }

    public function update($data = array())
    {
        // $post = $this->input->post();
        $this->id = $data["id"];
        $this->name = $data["name"];
        $this->population = $data["population"];
        $this->updated_at = date("Y-m-d H:i:s");
        $this->updated_by = $data["updated_by"];

        $this->db->update($this->_table, $this, array('id' => $data['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }

}	