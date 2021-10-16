<?php

namespace Database\Factories;

use App\Models\Compony;

use Illuminate\Database\Eloquent\Factories\Factory;

class ComponyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Compony::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->company(),
            'description' => $this->faker->sentence(10),
            'logo' => $this->faker->imageUrl(300, 300, 'logos', true),
            'contact_id' => \App\Models\Contact::factory()->create()->id
        ];
    }
}
