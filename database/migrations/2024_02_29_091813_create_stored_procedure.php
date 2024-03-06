<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $this->createStoredProcedurePhotosSearch();
        $this->createStoredProcedureUsersSearch();
    }

    private function createStoredProcedurePhotosSearch()
    {
        DB::unprepared('
            CREATE PROCEDURE search_photos(
                IN search_term VARCHAR(255)
            )
            BEGIN
                IF search_term IS NOT NULL AND search_term != "" THEN
                SELECT photos.* FROM photos JOIN users ON photos.users_id = users.id
                WHERE
                (photo_title LIKE CONCAT("%", search_term, "%") COLLATE utf8mb4_general_ci
                OR tag_topic LIKE CONCAT("%", search_term, "%") COLLATE utf8mb4_general_ci)
                AND visibility = 1
                AND users.account_status = 1
                AND users.role = "user"
                ORDER BY photos.created_at DESC;
                ELSE
                SELECT photos.* FROM photos JOIN users ON photos.users_id = users.id
                WHERE users.account_status = 1
                AND visibility = 1
                AND users.role = "user"
                ORDER BY created_at DESC;
                END IF;
            END
        ');
    }

    private function createStoredProcedureUsersSearch()
    {
        DB::unprepared('
            CREATE PROCEDURE search_users(
                IN search_term VARCHAR(255)
            )
            BEGIN
                SELECT * FROM users
                WHERE username LIKE CONCAT("%", search_term, "%") COLLATE utf8mb4_general_ci
                OR fullName LIKE CONCAT("%", search_term, "%") COLLATE utf8mb4_general_ci
                AND account_status = 1
                AND role = user;
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS search_photos');
        DB::unprepared('DROP PROCEDURE IF EXISTS search_users');
    }
};
