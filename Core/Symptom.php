<?php

class Symptom{
  // Properties
  public $id;
  public $title;
  public $description;
  public $userId;
  public $viewedByStaffId;
  //constructor
  function __construct($id, $title, $description, $userId, $viewedByStaffId;){
    $this->id = $id;
    $this->title = $title;
	$this->description = $description;
	$this->userId = $userId;
	$this->viewedByStaffId = $viewedByStaffId;;
  }
  
  // Methods to create the object
  function set_id($id) {
    $this->id = $id;
  }
  function get_id() {
    return $this->id;
  } 
  
  function set_title($title) {
    $this->title = $title;
  }
  function get_title() {
    return $this->title;
  }
  function set_time($time) {
    $this->description = $time;
  }
  function get_time() {
    return $this->description;
  } 
  
  function set_userId($userId) {
    $this->userId = $userId;
  }
  function get_userId() {
    return $this->userId;
  } 
  
  function set_viewedByStaffId($viewedByStaffId) {
    $this->viewedByStaffId = $viewedByStaffId;
  }
  function get_viewedByStaffId() {
    return $this->viewedByStaffId;
  }    
  

}

?>