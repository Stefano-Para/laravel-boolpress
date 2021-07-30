<?php

use Illuminate\Database\Seeder;

use App\Tag;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [ "PHP", "Laravel", "HTML", "CSS", "Javascript", "Vue.js" ];

        foreach ($tags as $tag) {
            // creazione istanza
            $newTag = new Tag();
            // valorizzazione dati
            $newTag->name = $tag;
            $newTag->slug = Str::slug($tag, '-');
            // salvataggio
            $newTag->save();
        }
    }
}
