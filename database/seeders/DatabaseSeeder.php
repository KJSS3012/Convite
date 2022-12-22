<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Presente;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory()->create(['name'=>'Leonardo e Karol', 'email'=> 'leonardo.104leo@hotmail.com']);
        User::factory()->create(['name'=>'Leonardo e Karol', 'email'=> 'karolzinhanaellyss@gmail.com']);
        Presente::factory()->create(['name' => 'Aspirador de pó (preto)',]);
        Presente::factory()->create(['name' => 'Batedeira (preta)',]);
        Presente::factory()->create(['name' => 'Cafeteira (preta)',]);
        Presente::factory()->create(['name' => 'Ferro de Passar',]);
        Presente::factory()->create(['name' => 'Liquidificador (preto)',]);
        Presente::factory()->create(['name' => 'Torradeira (preto)',]);
        Presente::factory()->create(['name' => 'Forno Micro-Ondas',]);
        Presente::factory()->create(['name' => 'Air Fryer (preto)',]);
        Presente::factory()->create(['name' => 'Pipoqueira Elétrica (preta)',]);
        Presente::factory()->create(['name' => 'Espremedor de Frutas (preto)',]);
        Presente::factory()->create(['name' => 'Centrífuga/Mixer (preto)',]);
        Presente::factory()->create(['name' => 'Aparelho de fondue',]);
        Presente::factory()->create(['name' => 'Faqueiro inox tramontina (diário)',]);
        Presente::factory()->create(['name' => 'Faqueiro ocasiões especiais',]);
        Presente::factory()->create(['name' => 'Jogo de facas inox tramontina',]);
        Presente::factory()->create(['name' => 'Jogo de travessas refratárias',]);
        Presente::factory()->create(['name' => 'Bomboniére',]);
        Presente::factory()->create(['name' => 'Fruteira inox ou vidro',]);
        Presente::factory()->create(['name' => 'Jarra para suco de vidro',]);
        Presente::factory()->create(['name' => 'Jarras em geral de vidro',]);
        Presente::factory()->create(['name' => 'Petisqueira',]);
        Presente::factory()->create(['name' => 'Jogo de taças para sorvete',]);
        Presente::factory()->create(['name' => 'Jogo de taça para vinho',]);
        Presente::factory()->create(['name' => 'Jogo de taça para suco',]);
        Presente::factory()->create(['name' => 'Jogo de taça para água',]);
        Presente::factory()->create(['name' => 'Jogo de taça para champanhe',]);
        Presente::factory()->create(['name' => 'Jogo de panelas tramontina',]);
        Presente::factory()->create(['name' => 'Jogo de copos para o dia a dia (vidro)',]);
        Presente::factory()->create(['name' => 'Jogo de pratos fundo e rasos dia a dia',]);
        Presente::factory()->create(['name' => 'Jogo de pratos para sobremesa',]);
        Presente::factory()->create(['name' => 'Jogo de café',]);
        Presente::factory()->create(['name' => 'Jogo de chá',]);
        Presente::factory()->create(['name' => 'Jogo de cama',]);
        Presente::factory()->create(['name' => 'Jogo de mesa',]);
        Presente::factory()->create(['name' => 'Jogo de banho',]);
        Presente::factory()->create(['name' => 'Potes para condimentos',]);
        Presente::factory()->create(['name' => 'Panela de Pressão',]);
        Presente::factory()->create(['name' => 'Escorredor de louças inox',]);
    }
}
