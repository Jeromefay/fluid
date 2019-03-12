<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'nom' => 'fayol',
            'prenom' => 'jérôme',
            'email' => 'admin@admin.fr',
            'password' => Hash::make('admin'),
            'is_admin' => 1,
            'competence_1' => 'peinture',
            ]
        ]);
        
        //Création de 20 users à partir de la factory
        factory(App\User::class, 10)->create()->each(function($user){

            //Ajout des images
            $link = str_random(12).'.jpg'; // hash de lien pour la sécurité (injection de scripts de protection)
            $file = file_get_contents('http://placeimg.com/640/480/people'); 
            Storage::disk('local')->put($link, $file);

            $user->update([
                'url_img_user' => $link
            ]);
            $user->save(); 
        });

    }
}
