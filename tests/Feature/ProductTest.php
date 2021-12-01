<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    //Uso de libreria para utilizar la base de datos
    use RefreshDatabase;

    //Test para guardar el producto

    /** @test */
    public function save_class(){
        
        //1. Indicar que realice una petición del tipo Post. Cuando se solicite la URL y con los atributos se espera que se guarde en la BD de forma existosa.
        //Esto se envia
        $response = $this->post('/api/products', [
            "name" => "Zumba2",
            "description" => "baile para perder grasa",
            "costo" => 200,
            "tipo" => "baile",
            "imagen" => "zumba.jpg"
        ]);

        //Cuando se guardo lo de arrriba, se debe de obtener retorno de la siguiente estructura
        //2. Para esto el response debe de llevar la estructura. Cada campo debe tener los atributos establecidos
        //Esto es retornado productController
        $response->assertJsonStructure(["name", "description", "costo", "tipo", "imagen"])//Verificar que el JSON tenga la estructura
        ->assertJson(['name'=>'Zumba','description' => 'baile para perder grasa', 'costo' => 200, 'tipo' => 'baile', 'imagen' => 'zumba.jpg']) //Indicar que el retorno tenga los valores establecidor en el JSON
        ->assertStatus(201); //Status de creado. 

        //Comprobar que se haya almacenado la información. Que en la tabla products se haya ingresado lo siguiente
        //3. Indicar que revise la base de datos para verificar que se hayan guardado los siguiente datos que se establecieron en la prueba
        //Tabla de products de la base de datos
        $this->assertDatabaseHas('products', ['name'=>'Zumba2', 'description' => 'baile para perder grasa', 'costo' => 200, 'tipo' => 'baile', 'imagen' => 'zumba.jpg']);
        
    }
}
