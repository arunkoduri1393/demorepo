<?php
  class user{
    public $name;
    public $email;
    public $type;
    public function __construct($name, $email, $type){
        $this->name=$name;
        $this->email=$email;
        $this->type=$type;

    }
    public function  getTYpe()
    {
      return $this->type;
    }
  }
  class  admin extends user
   {
     public $permissionlevel;
     public function __construct($name,$email,$type,$permissionlevel)
     {
       parent::__construct($name,$email,$type);
       $this->permissionlevel= $permissionlevel;
     }
   }
   
?>
