#!/bin/bash

# Create directory structure for product images
echo "🚀 Creating directory structure for product images..."

# Create main directories
mkdir -p public/storage/categories
mkdir -p public/storage/products/women-clothing
mkdir -p public/storage/products/men-clothing  
mkdir -p public/storage/products/children-clothing
mkdir -p public/storage/products/women-shoes
mkdir -p public/storage/products/men-shoes
mkdir -p public/storage/products/children-shoes

echo "✅ Directory structure created successfully!"

# Create a placeholder script for image downloading
echo "📁 Folder structure ready for images:"
echo "   - public/storage/categories/ (for category images)"
echo "   - public/storage/products/women-clothing/"
echo "   - public/storage/products/men-clothing/"
echo "   - public/storage/products/children-clothing/" 
echo "   - public/storage/products/women-shoes/"
echo "   - public/storage/products/men-shoes/"
echo "   - public/storage/products/children-shoes/"

echo ""
echo "💡 Next steps:"
echo "1. Run: php artisan storage:link"
echo "2. Run: php artisan db:seed"
echo "3. Add your product images to the respective folders"

echo ""
echo "📝 Image naming suggestions:"
echo "   Women's clothing: dress-1.jpg, blouse-2.jpg, pants-3.jpg, etc."
echo "   Men's clothing: shirt-1.jpg, t-shirt-2.jpg, pants-3.jpg, etc."
echo "   Children's clothing: dress-kids-1.jpg, shirt-boys-2.jpg, etc."
echo "   Women's shoes: heels-1.jpg, flats-2.jpg, boots-3.jpg, etc."
echo "   Men's shoes: formal-1.jpg, sports-2.jpg, boots-3.jpg, etc."
echo "   Children's shoes: sports-kids-1.jpg, formal-kids-2.jpg, etc."