<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Size;
use App\Models\ProductSize;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        
        // Clear existing data
        ProductSize::query()->delete();
        Product::query()->delete();
        
        // Get all categories and subcategories
        $categories = Category::with('subcategories')->get();
        
        // Get all sizes (they should already exist from SizeSeeder)
        $allSizes = Size::all();
        
        // Sample product names for different categories
        $productNames = [
            'جلی ئافرەتان' => [
                'فستانی ئێواران لە جووتی ڕەنگ',
                'بلوزی چیندار بە قۆڵی درێژ',
                'پانتۆڵی جینز بە کەمەری بەرز',
                'تیشێرتی کۆتن بە نەخشی جوان',
                'جاکێتی قاوەیی کلاسیک',
                'کۆتی زستان بە خوری گەرم',
                'سکارتی مینی مۆدێرن',
                'جومپەری ئەلوان ڕەنگاوڕەنگ',
                'کاردیگان لە خوری نەرم',
                'شۆرتی هاوین بە پارچەی سوک'
            ],
            'جلی پیاوان' => [
                'قمیسی سپی فۆرماڵ',
                'تیشێرتی ڕەش بە لۆگۆ',
                'پانتۆڵی کاژواڵ قاوەیی',
                'جاکێتی لیدەر ڕەش',
                'کۆتی زستان گەرم',
                'سوتکا لە ڕەنگی شین',
                'جینزی کلاسیک شین',
                'شۆرتی سپۆرت',
                'پۆلۆی کۆتن',
                'هودی گەرم بە جیب'
            ],
            'جلی مندالان' => [
                'فستانی ڕەنگاوڕەنگ بۆ کچان',
                'تیشێرتی کارتون بۆ کوڕان',
                'پانتۆڵی ئارام بۆ مندالان',
                'جاکێتی گەرم بۆ زستان',
                'شۆرتی یاری بۆ هاوین',
                'پیژامەی نەرم بۆ ئێوارە',
                'جینزی مندالانە',
                'جومپەری گەرم بۆ کچان'
            ],
            'پێلاوی ئافرەتان' => [
                'هیلی بەرز بۆ ئێوارە',
                'فلاتسی ئارام بۆ ڕۆژانە',
                'بووتی زستان گەرمکەر',
                'سپۆرتی کاژواڵ',
                'سندالی هاوین',
                'لۆفەری کلاسیک',
                'ئەنکڵ بووتی مۆدێرن',
                'وێجی ئەنیق',
                'پەمپسی فۆرماڵ',
                'مۆکاسینی نەرم'
            ],
            'پێلاوی پیاوان' => [
                'پێلاوی فۆرماڵ ڕەش',
                'سپۆرتی ڕاکردن',
                'بووتی کارکردن',
                'کاژواڵی ڕۆژانە',
                'لۆفەری کلاسیک',
                'ئۆکسفۆردی فۆرماڵ',
                'دربی قاوەیی',
                'مۆکاسینی ئارام',
                'سنیکەری مۆدێرن',
                'سندالی هاوین'
            ],
            'پێلاوی مندالان' => [
                'سپۆرتی ڕەنگاوڕەنگ بۆ کچان',
                'سپۆرتی کوڕان بە دەنگ',
                'فۆرماڵی جوان بۆ کچان',
                'فۆرماڵی کوڕان',
                'سندالی مندالان',
                'بووتی گەرم بۆ زستان',
                'کاژواڵی ئارام',
                'سنیکەری یاری'
            ]
        ];
        
        foreach ($categories as $category) {
            $categoryProducts = $productNames[$category->name] ?? [];
            
            foreach ($category->subcategories as $subcategory) {
                // Create 5-8 products per subcategory
                $productCount = rand(5, 8);
                
                for ($i = 0; $i < $productCount; $i++) {
                    $productName = $categoryProducts[array_rand($categoryProducts)] ?? $faker->words(3, true);
                    
                    $product = Product::create([
                        'category_id' => $category->id,
                        'subcategory_id' => $subcategory->id,
                        'name' => $productName . ' - ' . $subcategory->name,
                        'description' => $this->generateDescription($category->name, $subcategory->name),
                        'price' => $faker->randomFloat(2, 15, 250),
                        'image' => $this->getImagePath($category->name, $subcategory->name),
                        'is_featured' => $faker->boolean(20), // 20% chance
                        'is_new' => $faker->boolean(30), // 30% chance
                        'is_trending' => $faker->boolean(25), // 25% chance
                        'discount_percentage' => $faker->boolean(40) ? $faker->numberBetween(5, 50) : null,
                        'discount_ends_at' => $faker->boolean(30) ? $faker->dateTimeBetween('now', '+30 days') : null,
                        'stock_alert' => 10
                    ]);
                    
                    // Add sizes to products - only use clothing sizes (XS, S, M, L, XL, XXL, XXXL)
                    $sizesToUse = $allSizes->where('type', 'clothing');
                    
                    $selectedSizes = $sizesToUse->random(rand(3, 6));
                    
                    foreach ($selectedSizes as $size) {
                        ProductSize::create([
                            'product_id' => $product->id,
                            'size_id' => $size->id,
                            'quantity' => $faker->numberBetween(10, 100)
                        ]);
                    }
                }
            }
        }
        
        echo "Products created successfully!\n";
        echo "Total Products: " . Product::count() . "\n";
        echo "Total Product Sizes: " . ProductSize::count() . "\n";
    }
    
    private function generateDescription($categoryName, $subcategoryName)
    {
        $descriptions = [
            'جلی ئافرەتان' => "بەرهەمێکی جوان و باکووالیتی بەرز لە {$subcategoryName}ی ئافرەتان. دروستکراوە لە باشترین پارچەکان بۆ ئەوەی ئارامی و جوانی پێبدات. گونجاوە بۆ هەموو ئەو کاتانەی کە دەتانەوێت جوان و ئەنیق دەربکەون.",
            'جلی پیاوان' => "بەرهەمێکی کلاسیک و ئەنیق لە {$subcategoryName}ی پیاوان. بە دیزاینی مۆدێرن و کوالیتی بەرز دروستکراوە. گونجاوە بۆ کارەکان و بۆنە تایبەتەکان.",
            'جلی مندالان' => "بەرهەمێکی ڕەنگاوڕەنگ و خۆش بۆ مندالان. دروستکراوە لە پارچەی نەرم و ئارام کە زیانی نییە بۆ پێستی مندالان. {$subcategoryName} جوان و بەکێف.",
            'پێلاوی ئافرەتان' => "پێلاوێکی جوان و ئارام بۆ ئافرەتان. {$subcategoryName}ێکی کوالیتی بەرز بە دیزاینی مۆدێرن. ئارام بۆ پێ و گونجاو بۆ هەموو ئەو کاتانەی.",
            'پێلاوی پیاوان' => "پێلاوێکی بەهێز و ئارام بۆ پیاوان. {$subcategoryName}ی کوالیتی بەرز بە مادەی باش. درێژخایەن و ئارام بۆ بەکارهێنانی ڕۆژانە.",
            'پێلاوی مندالان' => "پێلاوێکی ئارام و سەلامەت بۆ مندالان. {$subcategoryName} بە ڕەنگی جوان و دیزاینی خۆش. گونجاوە بۆ یاری و چالاکی."
        ];
        
        return $descriptions[$categoryName] ?? "بەرهەمێکی باکووالیتی بەرز و جوان لە {$subcategoryName}.";
    }
    
    private function getImagePath($categoryName, $subcategoryName)
    {
        // Real clothing/shoes images from Unsplash for each category
        $images = match(true) {
            str_contains($categoryName, 'ئافرەتان') && str_contains($categoryName, 'جل') => [
                'https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?w=400&h=400&fit=crop',
                'https://images.unsplash.com/photo-1539008835657-9e8e9680c956?w=400&h=400&fit=crop',
                'https://images.unsplash.com/photo-1585487000160-6ebcfceb0d03?w=400&h=400&fit=crop',
                'https://images.unsplash.com/photo-1591369822096-ffd140ec948f?w=400&h=400&fit=crop',
                'https://images.unsplash.com/photo-1596783074918-c84cb06531ca?w=400&h=400&fit=crop',
            ],
            str_contains($categoryName, 'پیاوان') && str_contains($categoryName, 'جل') => [
                'https://images.unsplash.com/photo-1602810318383-e386cc2a3ccf?w=400&h=400&fit=crop',
                'https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?w=400&h=400&fit=crop',
                'https://images.unsplash.com/photo-1603252109303-2751441dd157?w=400&h=400&fit=crop',
                'https://images.unsplash.com/photo-1594938291221-94f18cbb5660?w=400&h=400&fit=crop',
                'https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?w=400&h=400&fit=crop',
            ],
            str_contains($categoryName, 'مندالان') && str_contains($categoryName, 'جل') => [
                'https://images.unsplash.com/photo-1519238263530-99bdd11df2ea?w=400&h=400&fit=crop',
                'https://images.unsplash.com/photo-1503944583220-79d8926ad5e2?w=400&h=400&fit=crop',
                'https://images.unsplash.com/photo-1622290291468-a28f7a7dc6a8?w=400&h=400&fit=crop',
                'https://images.unsplash.com/photo-1514090458221-65bb69cf63e3?w=400&h=400&fit=crop',
                'https://images.unsplash.com/photo-1596870230751-ebdfce98ec42?w=400&h=400&fit=crop',
            ],
            str_contains($categoryName, 'ئافرەتان') && str_contains($categoryName, 'پێلاو') => [
                'https://images.unsplash.com/photo-1543163521-1bf539c55dd2?w=400&h=400&fit=crop',
                'https://images.unsplash.com/photo-1535043934128-cf0b28d52f95?w=400&h=400&fit=crop',
                'https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?w=400&h=400&fit=crop',
                'https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?w=400&h=400&fit=crop',
                'https://images.unsplash.com/photo-1543163521-1bf539c55dd2?w=400&h=400&fit=crop',
            ],
            str_contains($categoryName, 'پیاوان') && str_contains($categoryName, 'پێلاو') => [
                'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400&h=400&fit=crop',
                'https://images.unsplash.com/photo-1460353581641-37baddab0fa2?w=400&h=400&fit=crop',
                'https://images.unsplash.com/photo-1549298916-b41d501d3772?w=400&h=400&fit=crop',
                'https://images.unsplash.com/photo-1605348532760-6753d2c43329?w=400&h=400&fit=crop',
                'https://images.unsplash.com/photo-1608231387042-66d1773070a5?w=400&h=400&fit=crop',
            ],
            str_contains($categoryName, 'مندالان') && str_contains($categoryName, 'پێلاو') => [
                'https://images.unsplash.com/photo-1514090458221-65bb69cf63e3?w=400&h=400&fit=crop',
                'https://images.unsplash.com/photo-1603808033192-082d6919d3e1?w=400&h=400&fit=crop',
                'https://images.unsplash.com/photo-1560769629-975ec94e6a86?w=400&h=400&fit=crop',
                'https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?w=400&h=400&fit=crop',
                'https://images.unsplash.com/photo-1525966222134-fcfa99b8ae77?w=400&h=400&fit=crop',
            ],
            default => [
                'https://images.unsplash.com/photo-1523381210434-271e8be1f52b?w=400&h=400&fit=crop',
            ]
        };
        
        return $images[array_rand($images)];
    }
}