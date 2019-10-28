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
  } 

  public function getHome(){
    $this->webView->getHome();
  }
}