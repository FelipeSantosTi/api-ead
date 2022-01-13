<?php

namespace Database\Factories;

use App\Models\Lesson;
use App\Models\Module;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Lesson::class;

    public function definition()
    {
        $name = $this->faker->unique()->name();

        return [
            'module_id' => Module::factory(),
            'name' => $name,
            'url' => Str::slug($name),
            'video' => Str::random(),
        ];
    }
}
