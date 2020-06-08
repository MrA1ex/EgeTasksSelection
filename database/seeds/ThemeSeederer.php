<?php

use Illuminate\Database\Seeder;

class ThemeSeederer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('themes')->insert([
            ['name' => 'Вычисления', 'subject_id' => 1, 'created_at' => now()],
            ['name' => 'Вычисления', 'subject_id' => 1, 'created_at' => now()],
            ['name' => 'Простейшие текстовые задачи', 'subject_id' => 1, 'created_at' => now()],
            ['name' => 'Преобразования выражений', 'subject_id' => 1, 'created_at' => now()],
            ['name' => 'Вычисления и преобразования', 'subject_id' => 1, 'created_at' => now()],
            ['name' => 'Простейшие текстовые задачи', 'subject_id' => 1, 'created_at' => now()],
            ['name' => 'Простейшие уравнения', 'subject_id' => 1, 'created_at' => now()],
            ['name' => 'Прикладная геометрия', 'subject_id' => 1, 'created_at' => now()],
            ['name' => 'Размеры и единицы измерения', 'subject_id' => 1, 'created_at' => now()],
            ['name' => 'Начала теории вероятностей', 'subject_id' => 1, 'created_at' => now()],
            ['name' => 'Чтение графиков и диаграмм', 'subject_id' => 1, 'created_at' => now()],
            ['name' => 'Выбор оптимального варианта', 'subject_id' => 1, 'created_at' => now()],
            ['name' => 'Стереометрия', 'subject_id' => 1, 'created_at' => now()],
            ['name' => 'Анализ графиков и диаграмм', 'subject_id' => 1, 'created_at' => now()],
            ['name' => 'Планиметрия', 'subject_id' => 1, 'created_at' => now()],
            ['name' => 'Задачи по стереометрии', 'subject_id' => 1, 'created_at' => now()],
            ['name' => 'Неравенства', 'subject_id' => 1, 'created_at' => now()],
            ['name' => 'Анализ утверждений', 'subject_id' => 1, 'created_at' => now()],
            ['name' => 'Числа и их свойства', 'subject_id' => 1, 'created_at' => now()],
            ['name' => 'Задачи на смекалку', 'subject_id' => 1, 'created_at' => now()],
        ]);
    }
}
