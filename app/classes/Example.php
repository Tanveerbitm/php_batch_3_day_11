<?php


namespace App\classes;


class Example
{
    public $students = [];
    public function index(){
//        $this->students = [10,20,30,'BITM',10.20,true,false];
//        foreach ($this->students as $key=>$student){
//            echo $key."=> ";
//            if($student === false){echo 'false'."<br>";}
//            elseif($student === true){echo 'true'."<br>";}
//            else{echo $student."<br>";}
//
//        }
//        echo json_encode($this->students);
//        echo 20 + var_dump("20");
        $this->students = [
            0=>[
            'name'  =>'tanveer',
            'email' =>'tanveer@gmail.com',
            'phone' =>'01403'],
            1=>[
            'name'  =>'tanveer',
            'email' =>'tanveer@gmail.com',
            'phone' =>'01403'],
            2=>[
            'name'  =>'tanveer',
            'email' =>'tanveer@gmail.com',
            'phone' =>'01403'],

        ];

        foreach ($this->students as $value){
            echo json_encode($value);

//            foreach ($value as $innerKey => $innerValue){
//                echo $innerKey.' => '.$innerValue.'<br>';
//            }

        }


    }
}