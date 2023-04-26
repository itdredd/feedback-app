<?php

namespace Database\Factories;

use App\Models\FeedbackRequest;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FeedbackRequestFactory extends Factory
{

    public static function save($email, $subject, $message)
    {
        $request = new FeedbackRequestFactory();
        $request->create([
            'email' => $email,
            'subject' => $subject,
            'message' => $message,
        ]);

        return $request;
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'email' => fake()->email(),
            'subject' => fake()->text(30),
            'message' => fake()->text(30),
        ];
    }
}
