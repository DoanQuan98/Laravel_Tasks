<?php

namespace Database\Seeders;

use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $task = new Task();
        $task->id = 1;
        $task->title = "Tạo migration";
        $task->content = "Tạo migration cho bảng categories";
        $task->due_date = "2018-09-26";
        $task->image  = "";
        $task->save();

        $task = new Task();
        $task->id = 2;
        $task->title = "Tạo seeder";
        $task->content = "Tạo dữ liệu cho bảng categories";
        $task->due_date = "2018-09-26";
        $task->image  = "";
        $task->save();
    }
}
