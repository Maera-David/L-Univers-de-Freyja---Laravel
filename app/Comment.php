<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'livre_dor';

    protected $fillable = ['name', 'comment'];

    private $name;

    private $comment;

    public function getName() {
        return $this->name;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function getComment() {
        return $this->comment;
    }

    public function setComment(string $comment) {
        $this->comment = $comment;
    }
}
