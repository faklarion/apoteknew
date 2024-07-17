<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_obat', 100);
            $table->string('jenis_obat', 100);
            $table->string('supplier', 100);
            $table->integer('stok');
            $table->date('tanggal_expired');
            $table->timestamps();
            $table->softDeletes();
        });

        DB::table('obats')->insert(
            [
                [
                    'nama_obat' => 'Paracetamol',
                    'jenis_obat' => 'Generik',
                    'supplier' => 'PT Dexa',
                    'stok' => 23,
                    'tanggal_expired' => '2024-11-11',
                ],
                [
                    'nama_obat' => 'Cefixime',
                    'jenis_obat' => 'Antibiotik',
                    'supplier' => 'PT Dexa',
                    'stok' => 50,
                    'tanggal_expired' => '2024-11-20',
                ]
            ]
        );
    }

    public function down()
    {
        Schema::dropIfExists('obats');
    }
}
