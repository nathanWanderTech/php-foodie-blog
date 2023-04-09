<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ["name", "description"];

    protected $table = 'fb_categories';

    protected $dates = ['deleted_at']; //Mark this col as a date

//    public function articles () {
//        return $this->hasMany(Article::class);
//    }
}
