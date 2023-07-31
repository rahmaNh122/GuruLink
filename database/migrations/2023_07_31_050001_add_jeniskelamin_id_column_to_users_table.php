<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJeniskelaminIdColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('id_jeniskelamin')->nullable()->after('role');
            $table->foreign('id_jeniskelamin')->references('id_jeniskelamin')->on('jenis_kelamin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['id_jeniskelamin']); // menghapus foreign key terlebih dahulu
            $table->dropColumn('id_jeniskelamin'); // kemudian menghapus kolom
        });
    }
}
