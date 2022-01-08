<?php

namespace Tests\Feature;

use Tests\TestCase;

class ComicsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_success_index()
    {
        $response = $this->get('/comics');

        $response->assertStatus(302);
    }
    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_success_create_comics()
    {
        $response = $this->post('/comics', [
            'id' => 1,
            'title' => 'spider-man',
            'description' => 'O Homem-Aranha precisa lidar com as consequências da sua verdadeira identidade ter sido descoberta',
            'ean' => 1234,        
            'prices' => 25.5,
            'images' => 'https://upload.wikimedia.org/wikipedia/pt/thumb/0/00/Spider-Man_No_Way_Home_poster.jpg/250px-Spider-Man_No_Way_Home_poster.jpg'
        ]);

        $response = $this->get('/comics/create');

        $response->assertStatus(302);
    }
    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_success_show()
    {
        $response = $this->get('/comics/1');

        $response->assertStatus(302);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_success_edit()
    {
        $response = $this->post('/comics', [
            'id' => 2,
            'title' => 'The Avengers',
            'description' => 'Marvels The Avengers no Brasil, Os Vingadores The Avengers ou Marvels The Avengers: é um cartoon de super-herói estadunidense de 2012',
            'ean' => 412,        
            'prices' => 45.5,
            'images' => 'https://upload.wikimedia.org/wikipedia/pt/6/69/The_Avengers_Cartaz.jpg'
        ]);

        $response = $this->get('/comics/create');

        $response->assertStatus(302);

        $response = $this->patch('/comics/2', [
            'id' => 2,
            'title' => 'Os vingadores',
            'description' => 'Marvels The Avengers no Brasil, Os Vingadores The Avengers ou Marvels The Avengers: é um cartoon de super-herói estadunidense de 2012',
            'ean' => 412,        
            'prices' => 45.5,
            'images' => 'https://upload.wikimedia.org/wikipedia/pt/6/69/The_Avengers_Cartaz.jpg'
        ]);

        $response->assertStatus(302);
    }

    public function test_success_delete()
    {
        $response = $this->delete('/comics/2', [
            'id' => 2,
            'title' => 'Os vingadores',
            'description' => 'Marvels The Avengers no Brasil, Os Vingadores The Avengers ou Marvels The Avengers: é um cartoon de super-herói estadunidense de 2012',
            'ean' => 412,        
            'prices' => 45.5,
            'images' => 'https://upload.wikimedia.org/wikipedia/pt/6/69/The_Avengers_Cartaz.jpg'
        ]);

        $response->assertStatus(302);
    }

    public function test_success_search()
    {
        $response = $this->post('/comics/search', [1]);
        $response->assertStatus(302);
    }
}
