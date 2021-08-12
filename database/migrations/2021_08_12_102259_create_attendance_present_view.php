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
        DB::statement("DROP VIEW IF EXISTS attendance_present_view;");

        DB::statement("
            CREATE VIEW attendance_present AS
                SELECT a.*, t.id AS term_id, t.name AS term_name,  c.name AS class_name, s.name AS subject_name, p.name AS program_name
                FROM attendances AS a
                    INNER JOIN classes AS c ON c.id = a.class_id
                    INNER JOIN users AS u ON u.id = a.user_id
                    INNER JOIN terms AS t ON t.id = c.term_id
                    INNER JOIN subjects AS s ON s.id = c.subject_id
                    INNER JOIN user_program AS up ON up.user_id = u.id
                    INNER JOIN programs AS p ON p.id = up.program_id;
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS attendance_present_view;");
    }
}
