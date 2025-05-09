<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            ['name' => 'Новая', 'description' => 'Задача только создана'],
            ['name' => 'В работе', 'description' => 'Задача в процессе выполнения'],
            ['name' => 'Завершена', 'description' => 'Задача выполнена'],
            ['name' => 'Отложена', 'description' => 'Задача отложена на потом'],
        ];

        foreach ($statuses as $status) {
            Status::create($status);
        }
    }
}
