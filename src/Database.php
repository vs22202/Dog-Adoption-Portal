<?php

namespace app;
use MongoDB\Client;
use app\models\Dog;

class Database{

    public static Database $db;
    public  $users_collection;
    public  $admin_users_collection;
    public  $dog_details_collection;
    public  $shelter_details_collection;
    public function __construct()
    {
        $client = new Client(
            'mongodb+srv://root:Vishaal123@cluster0.tgi3t.mongodb.net/Paws4Lyf?retryWrites=true&w=majority');
        $dbClient = $client->test;
        $this->users_collection=$dbClient->users;
        $this->admin_users_collection=$dbClient->admin_users;
        $this->dog_details_collection=$dbClient->dog_details;
        $this->shelter_details_collection=$dbClient->shelter_details;
        self::$db=$this;
    }
    public function add_new_user($details){
        $insertResult=$this->users_collection->insertOne($details);
    }
    public function get_user($details){
        $result=$this->users_collection->findOne($details);
        return $result;
    }
    public function get_admin_user($details){
        $result=$this->admin_users_collection->findOne($details);
        return $result;
    }
    public function add_new_dog(Dog $dog){
        $details["name"]=$dog->name;
        $details["breed"]=$dog->breed;
        $details["age"]=$dog->age ?? null;
        $details["description"]=$dog->description ?? null;
        $details["imageFolderPath"]=$dog->imageFolderPath;
        $insertResult=$this->dog_details_collection->insertOne($details);
    }
    public function add_new_shelter($details){
        $insertResult=$this->shelter_details_collection->insertOne($details);
    }
    public function update_dog($details){
    }
    public function get_dog_details($searchQuery)
    {
        $result = $this->dog_details_collection->findOne($searchQuery);
        return $result;
    }
    public function get_all_dog_details()
    {
        $result = $this->dog_details_collection->find();
        return $result;
    }

}