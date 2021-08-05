<?php
$user_id = $this->session->userdata('user_id');

if(!$user_id){
    redirect('auth/logout');
}

