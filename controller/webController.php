<?php

require_once 'controller.php';
require_once 'model/webModel.php';
require_once 'view/webView.php';



class webController extends controller {

  private $webView;
  private $webModel;

  public function __construct(){
    parent::__construct();
    $this->webView = new webView();
    $this->webModel = new webModel();
  } 

  public function getHome(){
    $this->webView->getHome();
  }

  public function getMarcas(){
    $marcas = $this->webModel->getMarcas("marca","","Descripcion","");
    echo json_encode($marcas);
  }

  public function getModelos($filtro){
    $modelos = $this->webModel->getVehiculos($filtro);
    echo json_encode($modelos);
  }
}