<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\TaskStatus;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Eloquent\Factories\Factory;

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
     * @return array
     */
    public function definition()
    {
        return [
            'title'            => $this->faker->realText(10),
            'task'             => $this->faker->realText(20),
            'task_status_id'   => $this->faker->randomElement([
                TaskStatus::DRAFT,
                TaskStatus::DOING,
                TaskStatus::PENDING,
                TaskStatus::DONE,
            ]),
            'assigned_user_id' => $this->faker->numberBetween(1, UserSeeder::COUNT),
        ];
    }
}
