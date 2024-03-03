<?php

use App\Models\Photo;
use Ramsey\Uuid\Uuid;
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
        Schema::table('photos', function (Blueprint $table) {
            $table->uuid('uuid')->after('id')->nullable();
        });

        // Menggunakan DB::table untuk memasukkan nilai UUID
        $photos = DB::table('photos')->get();
        foreach ($photos as $photo) {
            DB::table('photos')->where('id', $photo->id)->update(['uuid' => Uuid::uuid4()->toString()]);
        }

        Schema::table('photos', function (Blueprint $table) {
            $table->unique('uuid');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('photos', function (Blueprint $table) {
            //
        });
    }
};
