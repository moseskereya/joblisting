<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listings extends Model
{
    use HasFactory;

    public function scopeFilte($query, array $filters){
        if(isset($filters["tag"]) ?? false){
            $query->where("tags", 'like', '%'. request('tag') .'%');
         }
    }

}
