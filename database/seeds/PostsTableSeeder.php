<?php

use Illuminate\Database\Seeder;
use App\Post;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<10; $i++) {

            // creazione istanza
            $newPost = new Post();

            // valorizzazione proprietà
            $newPost->title = 'Titolo articolo' . $i;
            $newPost->content = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem praesentium neque a fuga explicabo repudiandae sed similique blanditiis minus dolores obcaecati mollitia ab accusantium dolore asperiores saepe doloribus, commodi perspiciatis nostrum quo. Reiciendis molestias obcaecati libero assumenda, voluptatem sapiente odio minima. Iure consequatur dicta culpa eligendi voluptas pariatur eos asperiores.';
            $newPost->slug =Str::slug($newPost->title ,'-');

            // salvataggio dati
            $newPost->save();
            
        }
    }
}
