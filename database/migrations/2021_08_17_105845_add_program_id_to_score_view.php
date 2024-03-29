<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AddProgramIdToScoreView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('DROP VIEW IF EXISTS score_view;');

        DB::statement('
            CREATE VIEW score_view AS
            SELECT 
                sc.id AS score_id,
                sc.user_id,
                u.uuid AS user_uuid, u.username,
                sc.score,
                sc.class_id,
                sc.grade_letter_id,
                sc.lms_id,
                sc.school_id,
                sc.is_pass,
                sc.grade_letter,
                sc.current_score, 
                c.credit,
                t.id AS term_id, t.name AS term_name, t.term_course_code,
                c.name AS class_name, c.is_transfer_school, c.transfer_school_information,
                s.name AS subject_name, s.weight,
                p.name AS program_name, p.id as program_id,
                gs.is_calculate_gpa, gs.extra_point_honor, gs.extra_point_advanced, gs.id as grade_scale_id,
                gl.gpa 
            FROM scores AS sc
                LEFT JOIN classes AS c ON c.id = sc.class_id
                LEFT JOIN users AS u ON u.id = sc.user_id
                LEFT JOIN terms AS t ON t.id = c.term_id
                LEFT JOIN subjects AS s ON s.id = c.subject_id
                LEFT JOIN user_program AS up ON up.user_id = u.id
                LEFT JOIN programs AS p ON p.id = up.program_id
                LEFT JOIN grade_letters AS gl ON sc.grade_letter_id = gl.id
                LEFT JOIN grade_scales AS gs ON gs.id = gl.grade_scale_id
            WHERE
                sc.deleted_at IS NULL
                AND c.deleted_at IS NULL
                AND u.deleted_at IS NULL
                AND t.deleted_at IS NULL
                AND s.deleted_at IS NULL
                AND up.deleted_at IS NULL
                AND p.deleted_at IS NULL
                AND gl.deleted_at IS NULL
                AND gs.deleted_at IS NULL
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS score_view;');
    }
}
