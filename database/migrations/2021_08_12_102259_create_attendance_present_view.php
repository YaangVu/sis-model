<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateAttendancePresentView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('DROP VIEW IF EXISTS attendance_present_view;');

        DB::statement('
            CREATE VIEW attendance_present_view AS
            SELECT a.id,
                    a.class_id,
                    a.calendar_id,
                    a.user_uuid,
                    a.user_id,
                    a.description,
                    a.status,
                    a."group",
                    t.id AS term_id,
                    t.name AS term_name,
                    c.name AS class_name,
                    s.name AS subject_name,
                    p.name AS program_name
            FROM attendances AS a
                    LEFT JOIN classes AS c ON c.id = a.class_id
                    LEFT JOIN users AS u ON u.id = a.user_id
                    LEFT JOIN terms AS t ON t.id = c.term_id
                    LEFT JOIN subjects AS s ON s.id = c.subject_id
                    LEFT JOIN user_program AS up ON up.user_id = u.id
                    LEFT JOIN programs AS p ON p.id = up.program_id
            WHERE
                    c.deleted_at IS NULL
                    AND u.deleted_at IS NULL
                    AND t.deleted_at IS NULL
                    AND s.deleted_at IS NULL
                    AND up.deleted_at IS NULL
                    AND p.deleted_at IS NULL
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS attendance_present_view;');
    }
}
