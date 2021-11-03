<?php

namespace Database\Factories;

use App\Models\Parallax;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParallaxFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Parallax::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->title,
            'title_size'=>$this->faker->numberBetween(10,30),
            'title_color'=>$this->faker->hexColor,
            'body'=>$this->faker->text(500),
            'body_size'=>$this->faker->numberBetween(10,30),
            'body_color'=>$this->faker->hexColor,
            'image'=>$this->faker->imageUrl(),
        ];
    }
}
