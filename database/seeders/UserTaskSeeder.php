<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use App\Models\UserTask;
use Illuminate\Database\Seeder;

class UserTaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = Task::todo()->limit(5)->pluck('id');
        $taskCollection = collect($tasks);
        $users = User::active()->limit(5)->get();

        foreach($users as $user) {
            $taskId = $taskCollection->random();
            $data = [
                'user_id' => $user->id,
                'task_id' => $taskId
            ];

            UserTask::firstOrCreate($data);
        }
    }
}