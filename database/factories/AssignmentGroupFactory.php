<?php

namespace Database\Factories;

use App\Models\AssignmentGroup;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AssignmentGroupFactory extends Factory
{
    protected $model = AssignmentGroup::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'created_by_user_id' => User::factory(),
            'managed_by_user_id' => User::factory(),
        ];
    }
}
