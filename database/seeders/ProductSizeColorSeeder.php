<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductSize;

class ProductSizeColorSeeder extends Seeder
{
    /**
     * Add colors to existing product sizes.
     */
    public function run(): void
    {
        // Available colors with their hex codes
        $colors = [
            ['name' => 'ڕەش', 'name_ar' => 'أسود', 'name_en' => 'Black', 'code' => '#000000'],
            ['name' => 'سپی', 'name_ar' => 'أبيض', 'name_en' => 'White', 'code' => '#FFFFFF'],
            ['name' => 'شین', 'name_ar' => 'أزرق', 'name_en' => 'Blue', 'code' => '#3B82F6'],
            ['name' => 'سوور', 'name_ar' => 'أحمر', 'name_en' => 'Red', 'code' => '#EF4444'],
            ['name' => 'سەوز', 'name_ar' => 'أخضر', 'name_en' => 'Green', 'code' => '#22C55E'],
            ['name' => 'زەرد', 'name_ar' => 'أصفر', 'name_en' => 'Yellow', 'code' => '#EAB308'],
            ['name' => 'پەمەیی', 'name_ar' => 'وردي', 'name_en' => 'Pink', 'code' => '#EC4899'],
            ['name' => 'مۆر', 'name_ar' => 'بنفسجي', 'name_en' => 'Purple', 'code' => '#A855F7'],
            ['name' => 'قاوەیی', 'name_ar' => 'بني', 'name_en' => 'Brown', 'code' => '#A16207'],
            ['name' => 'خۆڵەمێشی', 'name_ar' => 'رمادي', 'name_en' => 'Gray', 'code' => '#6B7280'],
            ['name' => 'نەیلی', 'name_ar' => 'كحلي', 'name_en' => 'Navy', 'code' => '#1E3A5F'],
            ['name' => 'بێژ', 'name_ar' => 'بيج', 'name_en' => 'Beige', 'code' => '#D4A574'],
        ];

        // Get all product sizes
        $productSizes = ProductSize::all();

        foreach ($productSizes as $productSize) {
            // Randomly assign a color (some can stay null)
            if (rand(0, 10) > 2) { // 80% chance of having a color
                $color = $colors[array_rand($colors)];
                $productSize->update([
                    'color' => $color['name'],
                    'color_code' => $color['code']
                ]);
            }
        }

        $this->command->info('Colors added to ' . $productSizes->whereNotNull('color')->count() . ' product sizes!');
    }
}
