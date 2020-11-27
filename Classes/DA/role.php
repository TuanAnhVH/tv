<?php 

  class Role extends Session
  {   

      function set_logged($username) {
         $this->session_set('user_token',['username'=>$username]);
      }

      function set_logout() {
         $this->session_delete('user_token');
      }

      function session_user_logged() {
         $user = $this->session_get('user_token');
         return $user;
      }

      function is_admin() {
         $user = $this->session_user_logged();
         if(!empty($user['username']) )
         {
            return true;
         }
         return false;
      }

      function get_current_username(){
         $user = $this->session_user_logged();
         return (isset($user['username'])?$user['username']:'');
      }
      
    

      function is_supper_admin(){
         $user = $this->session_user_logged();
         if($user['username'] == 'admin')
            return true;
         else
            return false;
      }
      function is_phuonghau(){
         $user = $this->session_user_logged();
         if($user['username'] == 'phuonghau')
            return true;
         else
            return false;
      }

  }
?>