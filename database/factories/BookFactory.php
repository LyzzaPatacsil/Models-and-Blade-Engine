<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition()
    {
        return [
            'id' => $this->faker->unique()->randomNumber(),
            'title' => $this->faker->sentence,
            'author' => $this->faker->name,
            'isbn' => $this->faker->isbn13,
            'description' => $this->faker->paragraph,
            'date_published' => $this->faker->date,
        ];
    }
}
