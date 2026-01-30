<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

echo "=== Checking Users ===\n\n";

$users = App\Models\User::all();

if ($users->isEmpty()) {
    echo "No users found in database!\n";
} else {
    foreach ($users as $user) {
        echo "ID: {$user->id}\n";
        echo "Name: {$user->name}\n";
        echo "Email: {$user->email}\n";
        echo "Role: {$user->role}\n";
        echo "Role Type: " . gettype($user->role) . "\n";
        echo "Is Admin (===): " . ($user->role === '1' ? 'YES' : 'NO') . "\n";
        echo "Is Admin (==): " . ($user->role == '1' ? 'YES' : 'NO') . "\n";
        echo "---\n";
    }
}
