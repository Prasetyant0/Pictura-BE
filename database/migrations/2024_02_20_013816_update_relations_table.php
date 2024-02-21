<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('photos', function (Blueprint $table) {
            $table->foreign('users_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('albums_id')->references('id')->on('albums')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categorys')->onUpdate('cascade')->onDelete('set null');
        });

        Schema::table('comments', function (Blueprint $table) {
            $table->foreign('users_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('photos_id')->references('id')->on('photos')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('follows', function (Blueprint $table) {
            $table->foreign('users_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('following_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('account_reports', function (Blueprint $table) {
            $table->foreign('reported_users_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('reporter_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('comment_reports', function (Blueprint $table) {
            $table->foreign('comments_id')->references('id')->on('comments')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('reporter_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('post_reports', function (Blueprint $table) {
            $table->foreign('photos_id')->references('id')->on('photos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('reporter_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('likes', function (Blueprint $table) {
            $table->foreign('photos_id')->references('id')->on('photos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('users_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('favorites', function (Blueprint $table) {
            $table->foreign('users_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('photos_id')->references('id')->on('photos')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('albums', function (Blueprint $table) {
            $table->foreign('users_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('photos', function (Blueprint $table) {
            $table->dropForeign(['users_id']);
            $table->dropForeign(['albums_id']);
            $table->dropForeign(['category_id']);
        });

        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign(['users_id']);
            $table->dropForeign(['photos_id']);
        });

        Schema::table('follows', function (Blueprint $table) {
            $table->dropForeign(['users_id']);
            $table->dropForeign(['following_id']);
        });

        Schema::table('account_reports', function (Blueprint $table) {
            $table->dropForeign(['reported_users_id']);
            $table->dropForeign(['reporter_id']);
        });

        Schema::table('comment_reports', function (Blueprint $table) {
            $table->dropForeign(['comments_id']);
            $table->dropForeign(['reporter_id']);
        });

        Schema::table('post_reports', function (Blueprint $table) {
            $table->dropForeign(['photos_id']);
            $table->dropForeign(['reporter_id']);
        });

        Schema::table('likes', function (Blueprint $table) {
            $table->dropForeign(['photos_id']);
            $table->dropForeign(['users_id']);
        });

        Schema::table('favorites', function (Blueprint $table) {
            $table->dropForeign(['users_id']);
            $table->dropForeign(['photos_id']);
        });

        Schema::table('albums', function (Blueprint $table) {
            $table->dropForeign(['users_id']);
        });
    }
};
