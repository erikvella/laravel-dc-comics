<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;
use Illuminate\Support\Str;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');
        foreach($comics as $comic){
            $new_comic = new Comic();

 //se non creo $fillable nel model , devo passare alla nuova entità tutti i dati che arrivano dal form

            // $new_comic->title = $comic['title'];
            // $new_comic->slug = $this->generateSlug($new_comic->title);
            // $new_comic->description = $comic['description'];
            // $new_comic->thumb = $comic['thumb'];
            // $new_comic->price = $comic['price'];
            // $new_comic->series = $comic['series'];
            // $new_comic->sale_date = $comic['sale_date'];
            // $new_comic->type = $comic['type'];
// dump($new_comic);

// avendo creato la proprietà $fillable (con tutti i suoi campi) , posso usare il metodo fill();
// lo slug non essendo presente nel form lo devo in tutti i casi creare
$form_data->slug = $this->generateSlug($new_comic->title);
            $new_comic->fill($form_data);
            $new_comic->save();

        }
    }


}
