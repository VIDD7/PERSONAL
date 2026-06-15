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
        Schema::table('profiles', function (Blueprint $table) {
            $table->string('kelas')->nullable()->after('name');
            $table->string('pendidikan')->nullable()->after('bio');
            $table->string('hobi')->nullable()->after('pendidikan');
            $table->string('fokus')->nullable()->after('hobi');
            $table->string('minat')->nullable()->after('fokus');
        });
    }

    public function down(): void
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropColumn(['kelas', 'pendidikan', 'hobi', 'fokus', 'minat']);
        });
    }
};
