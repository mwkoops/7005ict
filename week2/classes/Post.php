<?php
    namespace Data;
    use \Datetime;
    class Post
    {
        protected $User;
        protected $Message;
        protected $ImageURL;
        public function __construct($UserName, $Message, $ImageURL = 'images/default.png')
        {
            $this->User = $UserName;
            $this->Message = $Message;
            $this->ImageURL = $ImageURL;
        }
        public function getUser()
        {
            return $this->User;
        }
        public function getMessage()
        {
            return $this->Message;
        }
        public function getImageURL()
        {
            return $this->ImageURL;
        }
        public function getTimeStamp()
        {
            $mydate=getdate(date("U"));
            return "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
        }
    
    }
   
?>