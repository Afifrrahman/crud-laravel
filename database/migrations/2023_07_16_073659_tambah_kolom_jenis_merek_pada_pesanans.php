<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TambahKolomJenisMerekPadaPesanans extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('pesanans', function (Blueprint $table) {
            // Menambahkan kolom jenis dan merek setelah kolom harga
            $table->string('jenis')->after('harga');
            $table->string('merek')->after('jenis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pesanans', function (Blueprint $table) {
            // Menghapus kolom jenis dan merek jika perlu
            $table->dropColumn(['jenis', 'merek']);
        });
    }
}
