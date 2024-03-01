<?php

namespace Database\Seeders;

use App\Models\Lesson;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LessonUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lessonIds = Lesson::pluck('id');
        $userIds = User::pluck('id');

        $lessonUser = [];
        foreach ($lessonIds as $lessonId) {
            foreach ($userIds as $userId) {
                // Example condition to randomly associate lessons and users
                if (rand(0, 1)) {
                    $lessonUser[] = [
                        'lesson_id' => $lessonId,
                        'user_id' => $userId,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                }
            }
        }

        DB::table('lesson_user')->insert($lessonUser);
    }
}
