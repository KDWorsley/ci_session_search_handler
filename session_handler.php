<?php

    # Takes a passed in posted value and assigns it to the passed in session item
    # If no posted value is present, checks for a previously existing session item
    # If neither exists, an empty string is returned

    public function searchterm_handler($value, $session_item){
        if($value){
            $this->session->set_userdata($session_item, $value);
            return $value;
        } elseif($this->session->userdata('session_item')){
            $value = $this->session->userdata('session_item');
            return $value;
        } else {
            $value ='';
            return $value;
            }
        }