<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;


class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categories=['image','video','audio','word'];

        return [
            'name'=>$this->faker->word,
            'description'=>$this->faker->paragraph,
            'price'=>rand(500,2000),
            'category'=>$categories[rand(0,2)],
        ];
    }
}
