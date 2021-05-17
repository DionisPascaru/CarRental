<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'short_description' => $this->faker->realText(),
            'created_at' => $this->faker->dateTimeThisMonth(),
            'modified_at' => $this->faker->dateTimeThisMonth(),
            'published_at' => $this->faker->dateTimeThisMonth(),
            'content' => $this->faker->realText(),
            'author_id' => $this->faker->numberBetween(5,50),
            'category_id' => $this->faker->numberBetween(5,31),
            'specification_id' => $this->faker->numberBetween(5,31),
            'SEO_title' => $this->faker->title(),
            'SEO_description' => $this->faker->title(),
            'slug' => $this->faker->title()
        ];
    }
}
