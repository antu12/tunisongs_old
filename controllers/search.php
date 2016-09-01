<?php

  /**
   *
   */
  class search extends controller
  {

    function __construct()
    {
      parent::__construct();
      require 'models/search_model.php';
      $this->model=new search_model;

    }
    public function checking($squery){
      self::artist($squery);
      self::songs($squery);
      self::albums($squery);
      $this->view->render('search/index');
    }

    public function artist($squery){
      //$_GET['sartist']=$this->model->{__FUNCTION__}($squery);
      $this->view->sartist=$this->model->{__FUNCTION__}($squery);
      $this->view->squery=$squery;

    }

    public function songs($squery){
      $this->view->ssongs=$this->model->{__FUNCTION__}($squery);
      $this->view->squery=$squery;
      //  $this->view->render('search/index');
    }

    public function albums($squery){
      $this->view->salbums=$this->model->{__FUNCTION__}($squery);
      $this->view->squery=$squery;
      //$this->view->render('search/index');
    }

  }


 ?>
