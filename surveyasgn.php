<?php
class Survey{
    public string $name,$email,$gender,$phone,$date,$city;
        

    function __construct(string $name,string $email,string $gender,string $phone,string $date,string $city)
    {
            $this->name=$name;
            $this->email=$email;
            $this->gender=$gender;
            $this->phone=$phone;
            $this->date=$date;
            $this->city=$city;
    }

   
  

}
?>
