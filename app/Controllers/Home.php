<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $db;
    private $builder;
    public function index(): string
    {
        return view('welcome_message');
    }

    public function __construct(){
        $this->db = db_connect();
        $this->builder = $this->db->table("users");
    }
   public function insertData(){
    $data = [ 
[
    
    "name"=> "User 2",
    "email"=> "user2@gmail.com",
    "phone_no"=> "3465687244"
],
[
    
    "name"=> "User 3",
    "email"=> "user3@gmail.com",
    "phone_no"=> "346342247244"
]
    ];
    $this->builder->insertBatch($data);
   }

   public function updateUser(){
    $user_id = 2;
    $updated_data=[
        'name'=> 'janna',
        'phone_no' => '3426544732'    ];

        $this->builder-> update($updated_data,[

            "id" => $user_id
        ]);
   }

   public function deleteUser(){
    $user_id = 3;
    $this->builder-> delete([
        "id"=> $user_id
    ]);
   }
   public function selectData(){
    // $users = $this->builder->get()->getResult();
    $user = $this->builder->where("id",2)->get()->getRow();
    echo "<pre>";
    print_r($user);
   }
 
}
