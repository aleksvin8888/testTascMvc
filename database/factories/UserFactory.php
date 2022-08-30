<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $departments = Department::select('id')->get();

        return [
            'first_name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '123456789', // password
            'remember_token' => Str::random(10),
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'comment' => $this->faker->text(20),
            'department_id' => $departments->random()
        ];
    }
}
