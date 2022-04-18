<?php
namespace app\models;
use app\helpers\UtilHelper;
use app\Database;
class Dog
{
    public ?int $id= null;
    public ?string $name= null;
    public ?string $breed= null;
    public ?string $description= null;
    public ?int $age= null;
    public ?string $imageFolderPath=null;
    public ?array $imagesFiles=null;

    public function load($data)
    {
        $this->id=$data['id'] ?? null;
        $this->name=$data['name'] ?? null;
        $this->breed=$data['breed'] ?? null;
        $this->description=$data['description'] ?? null;
        $this->age=$data['age'] ?? null;
        $this->imageFolderPath=$data['imageFolderPath'] ?? null;
        $this->imageFiles=$data['imageFiles'] ?? null;
    }
    public function save()
    {
        $errors=[];
        if (!$this->name) {
            $errors[]='Dog needs a name';
        }
        if (!$this->breed) {
            $errors[]='Dog needs a breed';
        }
        if (!$this->age) {
            $errors[]='Dog needs a age';
        }
        if (!is_dir(__DIR__.'/../public/user_image_storage/')) {
            mkdir(__DIR__.'/../public/user_image_storage/');
        }
        if (empty($errors)) {
            if ($this->imageFiles && $this->imageFiles['tmp_name']) {
                echo "here";
                if ($this->imageFolderPath) {
                    unlink(__DIR__.'/../public/user_image_storage/'.$this->imageFolderPath);
                }
                $this->imageFolderPath=UtilHelper::randomString(8);
                echo "here2";
                $countfiles = count($this->imageFiles['name']);
                for ($i=0;$i<$countfiles;$i++) {
                    $filename = $this->imageFiles['name'][$i];
                    move_uploaded_file($this->imageFiles['tmp_name'][$i], __DIR__ . '/../public/user_image_storage/'.$this->imageFolderPath.$i.'P'.'.jpeg');
                }
            }
            $db = Database::$db;
            if ($this->id) {
                $db->update_dog($this);
            } else {
                $db->add_new_dog($this);
            }
        }
        return $errors;
    }
}