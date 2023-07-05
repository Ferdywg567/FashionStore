<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    protected $fillable = [
        'jumlah_poin'
    ];


    public function user(){
        $this->hasOne(User::class, 'membership_id','id');
    }
}
