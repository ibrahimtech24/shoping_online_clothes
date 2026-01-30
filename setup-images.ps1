# PowerShell script to setup product images structure
param(
    [switch]$DownloadImages = $false
)

Write-Host "Setting up product images structure..." -ForegroundColor Green

# Create directory structure for product images
$directories = @(
    "public\storage\categories",
    "public\storage\products\women-clothing",
    "public\storage\products\men-clothing",
    "public\storage\products\children-clothing", 
    "public\storage\products\women-shoes",
    "public\storage\products\men-shoes",
    "public\storage\products\children-shoes"
)

foreach ($dir in $directories) {
    if (!(Test-Path $dir)) {
        New-Item -ItemType Directory -Path $dir -Force | Out-Null
        Write-Host "Created: $dir" -ForegroundColor Cyan
    } else {
        Write-Host "Exists: $dir" -ForegroundColor Yellow
    }
}

Write-Host ""
Write-Host "Directory structure created successfully!" -ForegroundColor Green

Write-Host ""
Write-Host "Next steps:" -ForegroundColor Yellow
Write-Host "1. Run: php artisan storage:link" -ForegroundColor White
Write-Host "2. Run: php artisan db:seed" -ForegroundColor White
Write-Host "3. Add your product images to the respective folders" -ForegroundColor White

Write-Host ""
Write-Host "Image naming conventions:" -ForegroundColor Yellow
Write-Host "   Women clothing: dress-1.jpg, blouse-2.jpg, pants-3.jpg" -ForegroundColor White
Write-Host "   Men clothing: shirt-1.jpg, t-shirt-2.jpg, pants-3.jpg" -ForegroundColor White
Write-Host "   Children clothing: dress-kids-1.jpg, shirt-boys-2.jpg" -ForegroundColor White
Write-Host "   Women shoes: heels-1.jpg, flats-2.jpg, boots-3.jpg" -ForegroundColor White
Write-Host "   Men shoes: formal-1.jpg, sports-2.jpg, boots-3.jpg" -ForegroundColor White
Write-Host "   Children shoes: sports-kids-1.jpg, formal-kids-2.jpg" -ForegroundColor White

Write-Host ""
Write-Host "Usage:" -ForegroundColor Magenta
Write-Host "   .\setup-images.ps1              - Create folder structure only" -ForegroundColor White