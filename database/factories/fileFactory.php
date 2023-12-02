<?php

namespace Database\Factories;

use App\Models\File;
use App\Models\Group;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\file>
 */
class fileFactory extends Factory
{

    protected $model = File::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fileName'=>fake()->name(),
            'file_path'=>fake()->filePath(),
            'file_EX'=>fake()->fileExtension(),
            'status'=>fake()->boolean(),
            'groupId'=>Group::all()->random()->id,
            'owner'=>User::all()->random()->id,
        ];
    }
}
