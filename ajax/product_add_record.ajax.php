<?php
require_once "../controllers/products.controller.php";
require_once "../models/products.model.php";

class addProduct{
  public $productname;
  public $abbriviation;
  public $productprice;
  public $productbrand;
  public $productqty;
  public $productcategory;
  public $productallowtrans;
  public $productlicenseduedate;

  public function addProductRecord(){
    // Get property values
    $productname = $this->productname;
    $abbriviation = $this->abbriviation;
    $productprice = $this->productprice;
    $productbrand = $this->productbrand;
    $productcategory = $this->productcategory;
    $productqty = $this->productqty;
    $productallowtrans = $this->productallowtrans;
    $productlicenseduedate = $this->productlicenseduedate;

    // Create an array with product data
    $data = array(
        "productname" => $productname,
        "abbriviation" => $abbriviation,
        "productprice" => $productprice,
        "productbrand" => $productbrand,
        "productcategory" => $productcategory,
        "productqty" => $productqty,
        "productallowtrans" => $productallowtrans,
        "productlicenseduedate" => $productlicenseduedate
    );

    $controllerProduct = new ControllerProduct();
    $answer = $controllerProduct->ctrCreateProduct($data);

  }
}

$save_product = new addProduct();

$save_product -> productname = $_POST["productname"];
$save_product -> abbriviation = $_POST["abbriviation"];
$save_product -> productprice = $_POST["productprice"];
$save_product -> productcategory = $_POST["productcategory"];
$save_product -> productbrand = $_POST["productbrand"];
$save_product -> productqty = $_POST["productqty"];
$save_product -> productallowtrans = $_POST["productallowtrans"];
$save_product -> productlicenseduedate = $_POST["productlicenseduedate"];

$save_product -> addProductRecord();