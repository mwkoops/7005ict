<?php
  namespace Data;
  include_once('Post.php');
  class PostTester
  {
      protected $Posts;
      public function __construct()
      {
        $this->Posts = array();
        $this->Posts[0] = new Post('Mark','Test Post 1');
        $this->Posts[1] = new Post('Mark','Test Post 2');
        $this->Posts[2] = new Post('Mark','Test Post 3');
      }
      public function getPosts()
      {
        return $this->Posts;
      }
          
  }
?>