# Create simple placeholder image files
Write-Host "Creating placeholder images..." -ForegroundColor Green

$categories = @{
    "women-clothing" = @("فستان", "بلوز", "پانتالۆن", "کراس", "تی-شێرت", "کۆت", "جاکێت")
    "men-clothing" = @("قمیس", "تی-شێرت", "پانتالۆن", "کۆت", "جاکێت", "سویتری")
    "children-clothing" = @("فستانی-مندالان", "تی-شێرتی-مندالان", "پانتالۆنی-مندالان")
    "women-shoes" = @("پاشنە-بەرز", "پێلاوی-تەخت", "بووت", "سەندەل", "مۆکاسین")
    "men-shoes" = @("پێلاوی-فۆرماڵ", "پێلاوی-وەرزش", "بووت", "مۆکاسین")
    "children-shoes" = @("پێلاوی-وەرزش", "پێلاوی-فۆرماڵ", "سەندەل")
}

$placeholderContent = @"
<!DOCTYPE html>
<html>
<head><title>Product Image</title></head>
<body style="margin:0;background:#f0f0f0;display:flex;align-items:center;justify-content:center;height:400px;font-family:Arial;">
<div style="text-align:center;color:#666;">Product Image</div>
</body>
</html>
"@

foreach ($category in $categories.Keys) {
    Write-Host "Processing category: $category" -ForegroundColor Yellow
    
    for ($i = 1; $i -le 5; $i++) {
        foreach ($item in $categories[$category]) {
            $imageName = "$item-$i.jpg"
            $imagePath = "public\storage\products\$category\$imageName"
            
            if (!(Test-Path $imagePath)) {
                # Create a simple text file as placeholder (we'll use CSS to style it as image)
                Set-Content -Path $imagePath -Value $placeholderContent -Encoding UTF8
                Write-Host "Created: $imageName" -ForegroundColor Green
            }
        }
    }
}

Write-Host "Placeholder files created!" -ForegroundColor Cyan
Write-Host "Total files created in each category folder." -ForegroundColor White