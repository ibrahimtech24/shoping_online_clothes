<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Clear existing data
        SubCategory::query()->delete();
        Category::query()->delete();

        // Women's Categories
        $womenCategory = Category::create([
            'name' => 'جلی ئافرەتان',
            'description' => 'کۆمەڵێک جلی جوان و مۆدێرن بۆ ئافرەتان',
            'image' => 'https://picsum.photos/300/200?random=1'
        ]);

        $womenSubcategories = [
            'فستان',
            'بلوز',
            'پانتۆڵ',
            'تیشێرت',
            'جاکێت',
            'کۆت',
            'سکارت',
            'جومپەر',
            'کاردیگان',
            'جینز',
            'شۆرت',
            'تۆپ'
        ];

        foreach ($womenSubcategories as $index => $subcategory) {
            SubCategory::create([
                'name' => $subcategory,
                'category_id' => $womenCategory->id,
                'description' => $subcategory . ' بۆ ئافرەتان',
                'image' => 'https://picsum.photos/250/200?random=' . (100 + $index)
            ]);
        }

        // Men's Categories
        $menCategory = Category::create([
            'name' => 'جلی پیاوان',
            'description' => 'کۆمەڵێک جلی ئەنیق و کلاسیک بۆ پیاوان',
            'image' => 'https://picsum.photos/300/200?random=2'
        ]);

        $menSubcategories = [
            'قمیس',
            'تیشێرت',
            'پانتۆڵ',
            'جاکێت',
            'کۆت',
            'سوتکا',
            'جینز',
            'شۆرت',
            'پۆلۆ',
            'هودی',
            'کاردیگان',
            'سویتەر'
        ];

        foreach ($menSubcategories as $index => $subcategory) {
            SubCategory::create([
                'name' => $subcategory,
                'category_id' => $menCategory->id,
                'description' => $subcategory . ' بۆ پیاوان',
                'image' => 'https://picsum.photos/250/200?random=' . (200 + $index)
            ]);
        }

        // Children's Categories
        $childrenCategory = Category::create([
            'name' => 'جلی مندالان',
            'description' => 'جلی ڕەنگاوڕەنگ و خۆش بۆ مندالان',
            'image' => 'https://picsum.photos/300/200?random=3'
        ]);

        $childrenSubcategories = [
            'فستانی کچان',
            'تیشێرتی کچان',
            'پانتۆڵی کچان',
            'تیشێرتی کوڕان',
            'پانتۆڵی کوڕان',
            'جاکێتی مندالان',
            'شۆرتی مندالان',
            'پیژامەی مندالان',
            'جینزی مندالان',
            'جومپەری مندالان'
        ];

        foreach ($childrenSubcategories as $index => $subcategory) {
            SubCategory::create([
                'name' => $subcategory,
                'category_id' => $childrenCategory->id,
                'description' => $subcategory . ' بۆ مندالان',
                'image' => 'https://picsum.photos/250/200?random=' . (300 + $index)
            ]);
        }

        // Women's Shoes
        $womenShoesCategory = Category::create([
            'name' => 'پێلاوی ئافرەتان',
            'description' => 'کۆمەڵێک پێلاوی جوان و ئارام بۆ ئافرەتان',
            'image' => 'https://picsum.photos/300/200?random=4'
        ]);

        $womenShoesSubcategories = [
            'هیل',
            'فلاتس',
            'بووت',
            'سپۆرت',
            'سندال',
            'لۆفەر',
            'ئەنکڵ بووت',
            'وێج',
            'پەمپس',
            'مۆکاسین'
        ];

        foreach ($womenShoesSubcategories as $index => $subcategory) {
            SubCategory::create([
                'name' => $subcategory,
                'category_id' => $womenShoesCategory->id,
                'description' => 'پێلاوی ' . $subcategory . ' بۆ ئافرەتان',
                'image' => 'https://picsum.photos/250/200?random=' . (400 + $index)
            ]);
        }

        // Men's Shoes
        $menShoesCategory = Category::create([
            'name' => 'پێلاوی پیاوان',
            'description' => 'کۆمەڵێک پێلاوی ئەنیق و بەهێز بۆ پیاوان',
            'image' => 'https://picsum.photos/300/200?random=5'
        ]);

        $menShoesSubcategories = [
            'فۆرماڵ',
            'سپۆرت',
            'بووت',
            'کاژواڵ',
            'لۆفەر',
            'ئۆکسفۆرد',
            'دربی',
            'مۆکاسین',
            'سنیکەر',
            'سندال'
        ];

        foreach ($menShoesSubcategories as $index => $subcategory) {
            SubCategory::create([
                'name' => $subcategory,
                'category_id' => $menShoesCategory->id,
                'description' => 'پێلاوی ' . $subcategory . ' بۆ پیاوان',
                'image' => 'https://picsum.photos/250/200?random=' . (500 + $index)
            ]);
        }

        // Children's Shoes
        $childrenShoesCategory = Category::create([
            'name' => 'پێلاوی مندالان',
            'description' => 'پێلاوی ئارام و بەهێز بۆ مندالان',
            'image' => 'https://picsum.photos/300/200?random=6'
        ]);

        $childrenShoesSubcategories = [
            'سپۆرتی کچان',
            'سپۆرتی کوڕان',
            'فۆرماڵی کچان',
            'فۆرماڵی کوڕان',
            'سندالی مندالان',
            'بووتی مندالان',
            'کاژواڵی مندالان',
            'سنیکەری مندالان'
        ];

        foreach ($childrenShoesSubcategories as $index => $subcategory) {
            SubCategory::create([
                'name' => $subcategory,
                'category_id' => $childrenShoesCategory->id,
                'description' => $subcategory,
                'image' => 'https://picsum.photos/250/200?random=' . (600 + $index)
            ]);
        }

        echo "Categories and Subcategories created successfully!\n";
        echo "Total Categories: " . Category::count() . "\n";
        echo "Total Subcategories: " . SubCategory::count() . "\n";
    }
}