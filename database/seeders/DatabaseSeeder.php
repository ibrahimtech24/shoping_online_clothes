<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\State;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductSize;
use App\Models\SubCategory;
use Illuminate\Database\Seeder;
use App\Models\Size;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // First, call our new seeders
        $this->call([
            SizeSeeder::class,
            CategorySeeder::class, 
            ProductSeeder::class,
        ]);

        // All these data are custom so don't touch it unless you know how all things organized

        // User
        User::factory()->create([
            'name' => "Shadyar",
            'email' => "shadyar@gmail.com",
            'password' => "11111111",
            'role' => "1",
        ]);
        User::factory()->create([
            'name' => "Test",
            'email' => "test@gmail.com",
            'password' => "11111111",
        ]);

        // States
        State::factory()->create([
            'name' => 'چاوەڕوانی',
        ]
        );
        State::factory()->create([
            'name' => 'پەسەندکراو',
        ]
        );
        State::factory()->create([
            'name' => 'تەواوبوو',
        ]
        );
        State::factory()->create([
            'name' => 'ڕەتکراوەتەوە',
        ]
        );

        // Sizes are now created by SizeSeeder (called above)

        // Man Category
        Category::factory()->create([
            'name' => 'پیاوان',
        ]
        );

        // Woman Category
        Category::factory()->create([
            'name' => 'ئافرەتان',
        ]
        );

        // For Men
        SubCategory::factory()->create([
            'category_id' => '1',
            'name' => 'تیشێرت',
        ]);

        SubCategory::factory()->create([
            'category_id' => '1',
            'name' => 'جینز',
        ]);

        SubCategory::factory()->create([
            'category_id' => '1',
            'name' => 'هوودی',
        ]);

        SubCategory::factory()->create([
            'category_id' => '1',
            'name' => 'کراسی فەرمی',
        ]);

        SubCategory::factory()->create([
            'category_id' => '1',
            'name' => 'سنیکەر',
        ]);

        // For Women
        SubCategory::factory()->create([
            'category_id' => '2',
            'name' => 'جلی ژنان',
        ]);

        SubCategory::factory()->create([
            'category_id' => '2',
            'name' => 'بلووز',
        ]);

        SubCategory::factory()->create([
            'category_id' => '2',
            'name' => 'تەنوورە',
        ]);

        SubCategory::factory()->create([
            'category_id' => '2',
            'name' => 'پێڵاوی پاشنەبەرز',
        ]);

        SubCategory::factory()->create([
            'category_id' => '2',
            'name' => 'جانتا',
        ]);

        Product::factory(10)->create();

        // Product Size
        ProductSize::factory(2)->create([
            'product_id' => '1',
        ]);

        ProductSize::factory(4)->create([
            'product_id' => '2',
        ]);

        ProductSize::factory(3)->create([
            'product_id' => '3',
        ]);

        ProductSize::factory(1)->create([
            'product_id' => '4',
        ]);

        ProductSize::factory(3)->create([
            'product_id' => '5',
        ]);

        ProductSize::factory(4)->create([
            'product_id' => '6',
        ]);

        ProductSize::factory(3)->create([
            'product_id' => '7',
        ]);

        ProductSize::factory(3)->create([
            'product_id' => '8',
        ]);

        ProductSize::factory(2)->create([
            'product_id' => '9',
        ]);

        ProductSize::factory(5)->create([
            'product_id' => '10',
        ]);
    }
}
