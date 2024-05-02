<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Barang;
use App\Models\Satuan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Satuan::create([
            'nama' => 'pcs',
        ]);
        Satuan::create([
            'nama' => 'pak',
        ]);
        Satuan::create([
            'nama' => 'dus',
        ]);

        Barang::create([
            'nama' => 'Aqua 600 ML',
            'harga' => '3000',
            'deskripsi' => 'Air minum kemasan praktis dalam botol 600ml dari Aqua. Ideal untuk kebutuhan hidrasi sehari-hari di mana pun Anda berada.',
            'satuan_barang' => 1
        ]);
    }
}
