<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTableGradeBookViewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('DROP VIEW IF EXISTS gradebook_view;');

        DB::statement('
            CREATE VIEW gradebook_view AS
             SELECT DISTINCT
                sc.school_id,
                sc.lms_id,
                g.name AS grade_name,
                u.id AS user_id,
                u.uuid AS user_uuid,
                u.username,
                sc.id AS score_id,
                sc.score,
                sc.is_pass,
                sc.grade_letter,
                sc.current_grade_letter,
                sc.current_score,
                sc.real_weight,
                t.id AS term_id,
                t.name AS term_name,
                t.start_date AS term_start_date,
                t.end_date AS term_end_date,
                c.id AS class_id,
                c.name AS class_name,
                c.status AS class_status,
                c.transfer_school_information,
                c.is_transfer_school,
                c.start_date AS class_start_date,
                c.end_date AS class_end_date,
                s.name AS subject_name,
                s.id AS subject_id,
                s.type AS subject_type,
                s.code AS subject_code,
                s.weight,
                s.credit,
                gs.is_calculate_gpa,
                gs.extra_point_honor,
                gs.extra_point_advanced,
                gs.id AS grade_scale_id,
                gl.gpa
                FROM scores sc
                 LEFT JOIN classes c ON c.id = sc.class_id
                 LEFT JOIN users u ON u.id = sc.user_id
                 LEFT JOIN terms t ON t.id = c.term_id
                 LEFT JOIN subjects s ON s.id = c.subject_id
                 LEFT JOIN graduation_category_subject gcs ON s.id = gcs.subject_id
                 LEFT JOIN grade_letters gl ON sc.grade_letter_id = gl.id
                 LEFT JOIN grade_scales gs ON gs.id = gl.grade_scale_id
                 LEFT JOIN grades g ON g.id = s.grade_id
                WHERE sc.deleted_at IS NULL 
                AND c.deleted_at IS NULL 
                AND u.deleted_at IS NULL 
                AND t.deleted_at IS NULL 
                AND s.deleted_at IS NULL 
                AND gcs.deleted_at IS NULL 
                AND gl.deleted_at IS NULL 
                AND gs.deleted_at IS NULL 
                AND g.deleted_at IS NULL 
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS gradebook_view;');
    }
}
