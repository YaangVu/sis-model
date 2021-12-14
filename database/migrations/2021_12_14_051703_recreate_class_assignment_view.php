<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ReCreateClassAssignmentView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('DROP VIEW IF EXISTS class_assignment_view;');

        DB::statement('
            CREATE VIEW class_assignment_view 
                AS SELECT DISTINCT
                    c.id as class_id,
                    c.uuid,
                    c.external_id,
                    c.name,
                    c.start_date,
                    c.end_date,
                    c.status,
                    c.credit,
                    c.description,
                    c.zone,
                    c.subject_id,
                    c.term_id,
                    c.course_id,
                    c.school_id,
                    c.lms_id,
                    c.created_at,
                    c.updated_at,
                    courses."name" AS course_name,
                    s."name" AS subject_name,
                    ca.user_id as "assignment_user_id",
                    ca."assignment"
                FROM
                    classes AS c
                    LEFT JOIN terms AS t ON t."id" = c.term_id
                    LEFT JOIN courses ON courses."id" = c.course_id
                    LEFT JOIN subjects AS s ON s.ID = c.subject_id
                    LEFT JOIN class_assignments AS ca ON ca.class_id = c.id
                WHERE
                    c.deleted_at IS NULL 
                    AND t.deleted_at IS NULL 
                    AND courses.deleted_at IS NULL 
                    AND s.deleted_at IS NULL 
                    AND ca.deleted_at IS NULL 
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS class_assignment_view;');
    }
}
