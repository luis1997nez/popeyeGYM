<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function save_user(){
        //1. Indicar que realice una petición del tipo Post. Cuando se solicite la URL con los atributos se espera que se guarde en la BD de forma existosa
        $response = $this->post('/api/users', [
            "name" => "Luis",
            "email" => "luis@hotmail.com",
            "password" => "12345678"
        ]);

        //Cuando se guardo lo de arrriba, se debe de obtener un response con la siguiente estructura
        //2. Para esto el response debe de llevar la estructura. Que cada campo tenga los atributos establecidos
        $response->assertJsonStructure(["name", "email", "password"])
        ->assertJson(['name'=>'Luis', 'email' => 'luis@hotmail.com', 'password' => '12345678']) 
        ->assertStatus(201); //Status de creado

        //Comprobar que se haya almacenado la información. Que en la tabla products se haya ingresado lo siguiente
        //3. Indicarse que revise la base de datos que se hayan guardado los siguiente datos
        $this->assertDatabaseHas('users', ['name'=>'Luis', 'email' => 'luis@hotmail.com', 'password' => '12345678']);
    }
}
