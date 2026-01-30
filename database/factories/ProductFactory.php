<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\SubCategory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = $this->faker->numberBetween(1, 2);
        $subCategory = $category === 1 ? $this->faker->numberBetween(1, 5) : $this->faker->numberBetween(6, 10);

        // Kurdish product names
        $kurdishNames = [
            'تیشێرتی کۆتەن باڵا',
            'جینزی سلیم فیت',
            'هوودی گەرم',
            'کراسی فەرمی شین',
            'سنیکەری سپی',
            'جلی ئاسایی ئەسوەد',
            'بلووزی ڕەنگاوڕەنگ',
            'تەنوورەی کورت',
            'پێڵاوی پاشنەبەرز',
            'جانتای چەرمی',
            'شەرڤاڵی وەرزشی',
            'کەمەربەندی چەرم',
            'کڵاوی گەنج',
            'شالی پاییز',
            'پالتۆی زستانە',
        ];

        return [
            'category_id' => $category,
            'subcategory_id' => $subCategory,
            'name' => $this->faker->randomElement($kurdishNames),
            'description' => $this->faker->randomElement([
                'بەرهەمێکی باڵا و کوالیتی بەرز.',
                'مۆدای نوێ و سەردەمیانە.',
                'ڕەنگی جوان و قوماشی نەرم.',
                'گونجاو بۆ هەموو کات و شوێنێک.',
                'دیزاینی مینیماڵ و شیک.',
            ]),
            'price' => $this->faker->numberBetween(3, 300),
            'image' => $this->faker->numberBetween(1, 12) . '.png',
        ];
    }
}
