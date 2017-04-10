<?php

class M_travel extends CI_Model {

   function getContent_Travel($id)
   {
      $sql = "SELECT a.*, c.image submenuImg
               FROM contents a
               INNER JOIN (
               SELECT id_parent, submenu_id , max(publish_at) publish
               FROM contents
               WHERE submenu_id != 10 AND status = 1 AND is_delete = 0
               GROUP BY id_parent, submenu_id
               ) b ON b.id_parent = a.id_parent AND b.submenu_id = a.submenu_id AND b.publish = a.publish_at
               inner join menu c ON c.id=a.submenu_id
               where a.id_parent = $id";
      $query = $this->db->query($sql);
      $result = $query->result();
      if($this->db->affected_rows() > 0 ){
         return $result;
      }
   }

   function getHeaderContent_Travel($id)
   {
      $sql = "SELECT a.*, c.image
         FROM contents a
         inner join menu c ON c.id=a.submenu_id
         where a.submenu_id = 10 AND a.id_parent = $id AND a.status = 1 AND a.is_delete = 0
         order by a.publish_at DESC
         limit 1";
      $query = $this->db->query($sql);
      $result = $query->result();
      if($this->db->affected_rows() == 1 ){
         return $result;
      }
   }
}
