<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $connection = 'mysql';
    protected $table = 'categories';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'integer';
    public $timestamps = true;
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
