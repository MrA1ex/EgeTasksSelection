<?php

use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            ['name' => 'Математика (базовый уровень)', 'slug' => Str::slug('Математика (базовый уровень)', '-'), 'created_at' => now()],
            ['name' => 'Математика (профильный уровень)', 'slug' => Str::slug('Математика (профильный уровень)', '-'), 'created_at' => now()],
            ['name' => 'Информатика', 'slug' => Str::slug('Информатика', '-'), 'created_at' => now()],
            ['name' => 'Русский язык', 'slug' => Str::slug('Русский язык', '-'), 'created_at' => now()],
            ['name' => 'Физика', 'slug' => Str::slug('Физика', '-'), 'created_at' => now()],
            ['name' => 'Химия', 'slug' => Str::slug('Химия', '-'), 'created_at' => now()],
            ['name' => 'Биология', 'slug' => Str::slug('Биология', '-'), 'created_at' => now()],
            ['name' => 'Английский язык', 'slug' => Str::slug('Английский язык', '-'), 'created_at' => now()],
            ['name' => 'География', 'slug' => Str::slug('География', '-'), 'created_at' => now()],
            ['name' => 'Немецкий язык', 'slug' => Str::slug('Немецкий язык', '-'), 'created_at' => now()],
            ['name' => 'Обществознание', 'slug' => Str::slug('Обществознание', '-'), 'created_at' => now()],
            ['name' => 'Французский язык', 'slug' => Str::slug('Французский язык', '-'), 'created_at' => now()],
            ['name' => 'Литература', 'slug' => Str::slug('Литература', '-'), 'created_at' => now()],
            ['name' => 'Испанский язык', 'slug' => Str::slug('Испанский язык', '-'), 'created_at' => now()],
            ['name' => 'История', 'slug' => Str::slug('История', '-'), 'created_at' => now()],
        ]);
    }
}
