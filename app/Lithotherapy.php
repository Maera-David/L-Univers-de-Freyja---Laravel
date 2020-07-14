<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lithotherapy extends Model
{
    protected $table = 'litho';

    protected $fillable = ['name', 'description'];

    private $name;

    private $description;

    public function getName() {
        return $this->name;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setComment(string $description) {
        $this->description = $description;
    }
}
