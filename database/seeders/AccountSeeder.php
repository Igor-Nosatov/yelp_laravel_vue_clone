<?php
declare (strict_types = 1);

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    public function run(): void
    {
     Account::factory()->create();
    }
}
