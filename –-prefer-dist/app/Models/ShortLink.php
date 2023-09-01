<?php
   
namespace App;
namespace App\Models;

   
use Illuminate\Database\Eloquent\Model;
   
class ShortLink extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'link'
    ];
}