<?php

  class Galeria
  {

    private $imagens = array('1.jpg','2.jpg','3.jpg','4.jpg','5.jpg','6.jpg',);

    public function getCurrentPicture(){
      $current = isset($_GET['imagem']) ? (int)$_GET['imagem'] : '0';
      if($current < 0){
        $current = 0;
      }
      if($current >= count($this->imagens)){
        $current = count($this->imagens) - 1;
      }
      return $this->imagens[$current];
    }

    public function getPrevPictureIndex(){
      $current = isset($_GET['imagem']) ? (int)$_GET['imagem'] : '0';
      $current--;
      if($current < 0){
        $current = 0;
      }
      return  '?imagem='.$current;
    }

    public function getNextPictureIndex(){
      $current = isset($_GET['imagem']) ? (int)$_GET['imagem'] : '0';
      $current++;
      if($current >= count($this->imagens)){
        $current = count($this->imagens) - 1;
      }
      return  '?imagem='.$current;
    }

  }