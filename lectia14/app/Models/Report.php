<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $tables = "reports";
    protected $fillable = [
        "title", "author", "category", "content"
    ];

    public function getShortContent($len = 0):string{
        return $len > 0 && $len >= strlen($this->count) 
                ? substr($this->content, 0, $len) . " ..."
                : $this->content;
    }
}