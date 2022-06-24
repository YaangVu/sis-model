<?php

namespace YaangVu\SisModel\Database\Seeders;

use Illuminate\Database\Seeder;
use YaangVu\Constant\TaskManagementConstant;
use YaangVu\SisModel\App\Models\impl\MainTaskSQL;
use YaangVu\SisModel\App\Models\impl\SubTaskSQL;
use YaangVu\SisModel\App\Models\impl\TaskCommentSQl;
use YaangVu\SisModel\App\Models\impl\TaskStatusSQL;

class TaskManagementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataStatus = TaskManagementConstant::ALL_STATUS;
        foreach ($dataStatus as $status) {
            $dataMainTask = [
                'project_name'      => 'SIS project',
                'owner_id'          => 2168978,
                'created_by'        => 2168978,
                'short_description' => 'This project is good',
                'type'              => 'Main task',
                'owner_id_no_sql'   => '6284b5c0d04110010102b047',
            ];

            $mainTask    = MainTaskSQL::query()->create($dataMainTask);
            $taskStatus  = TaskStatusSQL::query()->create(['name' => $status]);
            $dataSubTask = [
                'task_name'       => 'Create new content',
                'type'            => 'sub-task',
                'deadline'        => '2022/08/06',
                'assignee_id'     => 2168978,
                'reviewer_id'     => 2168978,
                'created_by'      => 2168978,
                'description'     => 'If you want to be happy, do not dwell in the past, do not worry about the future, focus on living fully in the present.',
                'main_task_id'    => $mainTask->id,
                "task_status_id"  => $taskStatus->id,
                'owner_id'        => 2168978,
                'owner_id_no_sql' => '6284b5c0d04110010102b047',
            ];
            $subTask     = SubTaskSQL::query()->create($dataSubTask);
            $dataComment = [
                'name'        => "John Asian",
                'avatar'      => null,
                'content'     => "If you want to be happy, do not dwell in the past, do not worry about the future, focus on living fully in the present.",
                "sub_task_id" => $subTask->id,
                "created_by"  => 2168978,
            ];
            TaskCommentSQl::query()->create($dataComment);
        }
    }
}
