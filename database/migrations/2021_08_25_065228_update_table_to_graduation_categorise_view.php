<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UpdateTableToGraduationCategoriseView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('DROP VIEW IF EXISTS graduation_categories_view;');

        DB::statement('
            CREATE VIEW graduation_categories_view AS
            SELECT 
               gc.id AS graduation_category_id ,
               gc.name AS graduation_category_name ,            
               pgc.credit AS graduation_category_credit ,
               s.credit AS credit ,
               s.id AS subject_id ,
               pgc.program_id,
               p.school_id
            FROM graduation_categories AS gc
                LEFT JOIN program_graduation_category AS pgc ON pgc.graduation_category_id = gc.id
                LEFT JOIN programs AS p ON p.id = pgc.program_id
                LEFT JOIN graduation_category_subject AS gcs ON gcs.graduation_category_id = gc.id
                LEFT JOIN subjects AS s ON s.id = gcs.subject_id
            WHERE
                gc.deleted_at IS NULL
                AND pgc.deleted_at IS NULL
                AND p.deleted_at IS NULL
                AND gcs.deleted_at IS NULL
                AND s.deleted_at IS NULL              
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS graduation_categories_view;');
    }
}
