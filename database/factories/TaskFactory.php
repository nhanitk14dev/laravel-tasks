<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * dateTimeBetween is date between -1 week ago, and 1 week from now
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text(30),
            'description' => fake()->text(100),
            'status' => 'todo',
            'start_date' => fake()->dateTimeBetween('-1 week', '+1 week'), 
            'due_date' => fake()->dateTimeBetween('-1 week', '+1 week'),
        ];
    }
}
