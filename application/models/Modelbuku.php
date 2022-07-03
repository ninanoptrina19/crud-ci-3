<?php

class Modelbuku extends CI_Model
{
    public function getall() {

        $query = $this->db->get('book');
        return $query->result();

    }

    public function insert() {

        $data = [

            'title'            => $this->input->post('title'),
            'author'           => $this->input->post('author'),
            'year'             => $this->input->post('year'),
            'publisher'        => $this->input->post('publisher'),
            'imagepath'        => $this->input->post('imagepath'),

        ];

        $this->db->insert('book', $data);

    }

    public function getByID($id) {

        return $this->db->get_where('book',['id'=> $id])->row_array();
    }

    public function edit() {

        $data = [

            'title'            => $this->input->post('title'),
            'author'           => $this->input->post('author'),
            'year'             => $this->input->post('year'),
            'publisher'        => $this->input->post('publisher'),
            'imagepath'        => $this->input->post('imagepath'),

        ];

        $this->db->update('book', $data, array('id' => $this->input->post('id')));

    }

    public function delete($id) {

        $this->db->delete('book', array('id' => $id));

    }
}
 