<?php
require_once "../controllers/payroll.controller.php";
require_once "../models/payroll.model.php";
class AjaxPayroll{
    public $empid;
    public function ajaxGetPayroll(){
      $item = "empid";
      $value = $this->empid;
      $answer = (new ControllerPayroll)->ctrShowPayroll($item, $value);
      echo json_encode($answer);
    }
}
 
if(isset($_POST["empid"])){
  $getPayroll = new AjaxPayroll();
  $getPayroll -> empid = $_POST["empid"];
  $getPayroll -> ajaxGetPayroll();
}