<?php

namespace Database\Factories;

use App\Models\Seo;
use Illuminate\Database\Eloquent\Factories\Factory;

class SeoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Seo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title"=>$this->faker->title,
            "keywords"=>$this->faker->words(1,true),
            "description"=>$this->faker->text,
            "author"=>$this->faker->lastName,

        ];
    }
}
