<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Comic extends Model
{
    use HasFactory;

    protected $fillable = ['title' , 'slug' , 'description' , 'thumb' , 'price' , 'series' , 'sale_date' , 'type'];

    public static function generateSlug($string){

        $slug = Str::slug($string , '-');
        $original_slug = $slug;

        $exist = Comic::where('slug' , $slug)->first();
        $c = 1;

        while($exist){
            $slug = $original_slug . '-' . $c;
            $exist = Comic::where('slug' , $slug)->first();
            $c++;
        }
        return $slug;

    }
}
