<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UpdateSubjectWeight extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('DROP VIEW IF EXISTS score_view;');
        Schema::table('subjects', function (Blueprint $table) {
            $table->unsignedDecimal('weight')->change();
            $table->string('code')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subjects', function (Blueprint $table) {
            $table->unsignedBigInteger('weight')->change();
            $table->dropColumn('code');
            $table->bigInteger('code')->unique()->nullable();
        });
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
                sc.real_weight, 
                t.id AS term_id, t.name AS term_name, t.start_date AS term_start_date, t.end_date AS term_end_date,
                c.name AS class_name, c.status,
                s.name AS subject_name, s.id AS subject_id, s.weight, s.credit, s.type AS subject_type,s.grade_id,
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
}
