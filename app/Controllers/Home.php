<?php

namespace App\Controllers;
use App\Models\UserModel;

class Home extends BaseController
{
    // private $db;
    // private $builder;
    public function index(): string
    {
        return view('welcome_message');
    }

    // public function __construct(){
    //     $this->db = db_connect();
    //     $this->builder = $this->db->table("users");
    
   public function insertData(){
    $user_obj = new UserModel();
    $data = [
"name" => "sahaala",
"email" => "sahala@gmail.com",
"phone_no" => "47736734"
    ];
    $user_obj->insert($data);
//     $data = [ 
// [
    
//     "name"=> "User 2",
//     "email"=> "user2@gmail.com",
//     "phone_no"=> "3465687244"
// ],
// [
    
//     "name"=> "User 3",
//     "email"=> "user3@gmail.com",
//     "phone_no"=> "346342247244"
// ]
//     ];
//     $this->builder->insertBatch($data);
   }

   public function updateUser(){
    $user_obj = new UserModel();
    $user_id = 1;
    $updated_data = [
        "name" =>"shifa",
        'phone_no' => "32562576"
    ];
    $user_obj->update($user_id,$updated_data);
    // $user_id = 2;
    // $updated_data=[
    //     'name'=> 'janna',
    //     'phone_no' => '3426544732'    ];

    //     $this->builder-> update($updated_data,[

    //         "id" => $user_id
    //     ]);
   }

   public function deleteUser(){

    $user_obj = new UserModel();
    $user_id = 2;
    $user_obj->delete($user_id);
//     $user_id = 3;
//     $this->builder-> delete([
//         "id"=> $user_id
//     ]);
//    }
//    public function selectData(){
//     // $users = $this->builder->get()->getResult();
//     $user = $this->builder->where("id",2)->get()->getRow();
//     echo "<pre>";
//     print_r($user);
//    }
 
}

public function selectData(){
    $user_obj = new UserModel();
    $users = $user_obj->findAll();
    echo "<pre>";
    print_r($users);
}
}