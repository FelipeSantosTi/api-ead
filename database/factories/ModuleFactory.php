<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Module;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModuleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Module::class;

    public function definition()
    {
        return [
            'course_id' => Course::factory(),
            'name' => $this->faker->name(),
        ];
    }
}
