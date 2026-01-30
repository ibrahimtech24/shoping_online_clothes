<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    public function run()
    {
        // Clear existing sizes
        Size::query()->delete();

        // Clothing sizes
        $clothingSizes = [
            ['name' => 'XS', 'type' => 'clothing', 'description' => 'Extra Small'],
            ['name' => 'S', 'type' => 'clothing', 'description' => 'Small'], 
            ['name' => 'M', 'type' => 'clothing', 'description' => 'Medium'],
            ['name' => 'L', 'type' => 'clothing', 'description' => 'Large'],
            ['name' => 'XL', 'type' => 'clothing', 'description' => 'Extra Large'],
            ['name' => 'XXL', 'type' => 'clothing', 'description' => 'Double Extra Large'],
            ['name' => 'XXXL', 'type' => 'clothing', 'description' => 'Triple Extra Large'],
        ];

        // Shoe sizes (European sizing)
        $shoeSizes = [
            ['name' => '35', 'type' => 'shoes', 'description' => 'Size 35'],
            ['name' => '36', 'type' => 'shoes', 'description' => 'Size 36'],
            ['name' => '37', 'type' => 'shoes', 'description' => 'Size 37'],
            ['name' => '38', 'type' => 'shoes', 'description' => 'Size 38'],
            ['name' => '39', 'type' => 'shoes', 'description' => 'Size 39'],
            ['name' => '40', 'type' => 'shoes', 'description' => 'Size 40'],
            ['name' => '41', 'type' => 'shoes', 'description' => 'Size 41'],
            ['name' => '42', 'type' => 'shoes', 'description' => 'Size 42'],
            ['name' => '43', 'type' => 'shoes', 'description' => 'Size 43'],
            ['name' => '44', 'type' => 'shoes', 'description' => 'Size 44'],
            ['name' => '45', 'type' => 'shoes', 'description' => 'Size 45'],
            ['name' => '46', 'type' => 'shoes', 'description' => 'Size 46'],
        ];

        // Children's clothing sizes
        $childrenClothingSizes = [
            ['name' => '2T', 'type' => 'children-clothing', 'description' => 'Toddler 2'],
            ['name' => '3T', 'type' => 'children-clothing', 'description' => 'Toddler 3'],
            ['name' => '4T', 'type' => 'children-clothing', 'description' => 'Toddler 4'],
            ['name' => '5', 'type' => 'children-clothing', 'description' => 'Size 5'],
            ['name' => '6', 'type' => 'children-clothing', 'description' => 'Size 6'],
            ['name' => '7', 'type' => 'children-clothing', 'description' => 'Size 7'],
            ['name' => '8', 'type' => 'children-clothing', 'description' => 'Size 8'],
            ['name' => '10', 'type' => 'children-clothing', 'description' => 'Size 10'],
            ['name' => '12', 'type' => 'children-clothing', 'description' => 'Size 12'],
            ['name' => '14', 'type' => 'children-clothing', 'description' => 'Size 14'],
        ];

        // Children's shoe sizes
        $childrenShoeSizes = [
            ['name' => '25', 'type' => 'children-shoes', 'description' => 'Children Size 25'],
            ['name' => '26', 'type' => 'children-shoes', 'description' => 'Children Size 26'],
            ['name' => '27', 'type' => 'children-shoes', 'description' => 'Children Size 27'],
            ['name' => '28', 'type' => 'children-shoes', 'description' => 'Children Size 28'],
            ['name' => '29', 'type' => 'children-shoes', 'description' => 'Children Size 29'],
            ['name' => '30', 'type' => 'children-shoes', 'description' => 'Children Size 30'],
            ['name' => '31', 'type' => 'children-shoes', 'description' => 'Children Size 31'],
            ['name' => '32', 'type' => 'children-shoes', 'description' => 'Children Size 32'],
            ['name' => '33', 'type' => 'children-shoes', 'description' => 'Children Size 33'],
            ['name' => '34', 'type' => 'children-shoes', 'description' => 'Children Size 34'],
        ];

        // Create all sizes
        foreach ($clothingSizes as $size) {
            Size::create($size);
        }

        foreach ($shoeSizes as $size) {
            Size::create($size);
        }

        foreach ($childrenClothingSizes as $size) {
            Size::create($size);
        }

        foreach ($childrenShoeSizes as $size) {
            Size::create($size);
        }

        echo "Sizes created successfully!\n";
        echo "Total Sizes: " . Size::count() . "\n";
        echo "Clothing Sizes: " . Size::where('type', 'clothing')->count() . "\n";
        echo "Shoe Sizes: " . Size::where('type', 'shoes')->count() . "\n";
        echo "Children Clothing Sizes: " . Size::where('type', 'children-clothing')->count() . "\n";
        echo "Children Shoe Sizes: " . Size::where('type', 'children-shoes')->count() . "\n";
    }
}