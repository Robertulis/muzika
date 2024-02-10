<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    protected $fillable =['title','artist', 'src','cover','time'];

    public function scopeFilter($query, array $filters){

        if($filters['search'] ?? false){
            $query->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('artist', 'like', '%' . request('search') . '%');
            
        }
    }
}
