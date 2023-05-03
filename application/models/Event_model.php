<?php

class Event_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

        // Initialization tasks go here
        $this->load->database();
    }

    public function get_event_data()
    {
        $this->db->select('*');
        $this->db->from('tbl-events');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $result = $query->result();

            return $result;
        } else {
            return false;
        }
    }
    public function get_all_users()
    {
        $this->db->select('*');
        $this->db->from('tbl-users');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $result = $query->result();

            return $result;
        } else {
            return false;
        }
    }
    public function get_specific_event($id)
    {
        $this->db->select('*');
        $this->db->from('tbl-events');
        $this->db->where('id', $id);

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $result = $query->result();

            return $result;
        } else {
            return false;
        }
    }
    public function update_event($data)
    {
        $id = $data['event_id'];
        $this->db->set('title', $data['title']);
        $this->db->set('customerID', $data['customerID']);
        $this->db->set('category', $data['category']);

        $this->db->set('requirements', $data['requirements']);

        $this->db->set('date', $data['date']);
        $this->db->set('discount', $data['discount']);

        $this->db->set('note', $data['note']);

        $this->db->set('user_id', $data['user_id']);


        $this->db->where('id', $id);
        $this->db->update('tbl-events');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function delete_event($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl-events');

        if ($this->db->affected_rows() > 0) {
return true;
        } else {
            return false;
        }
    }
    public function get_customers()
    {
        $this->db->select('*');
        $this->db->from('tbl-users');
        $this->db->where('user_type', 'customer');

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $result = $query->result();

            return $result;
        } else {
            return false;
        }
    }
    public function create_event($data)
    {
        $query = $this->db->insert('tbl-events', $data);
        return $query;
    }
}
