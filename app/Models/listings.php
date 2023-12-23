<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class listings extends Model
{
    use HasFactory;

    public function scopeFilte($query, array $filters){
        if(isset($filters["tag"]) ?? false){
            $query->where("tags", 'like', '%'. request('tag') .'%');
         }
    }


   public function user(): BelongsTo
   {
      return $this->belongsTo(listings::class);
   }

}
