<?php

namespace Database\Seeders;

use App\Models\Tenant;
use Illuminate\Database\Seeder;

class Tenants extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tenant::factory()
            ->create(['id' => 'cobeauty'])
            ->createDomain(['domain' => 'cobeauty']);
    }
}
