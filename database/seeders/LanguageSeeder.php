<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            ['name' => 'Английский', 'code' => 'en'],
            ['name' => 'Украинский', 'code' => 'uk']
        ];
        foreach ($languages as $language) {
            Language::factory()->create([
                'name' => $language['name'],
                'code' => $language['code']
            ]);
        }
    }
}
