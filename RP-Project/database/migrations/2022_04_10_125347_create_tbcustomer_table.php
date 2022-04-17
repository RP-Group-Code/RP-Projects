<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbcustomer', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('CustNo');
            $table->enum('CustMember',['01', '02', '03', '04']);
            $table->enum('TypeCust',['Default', 'Kontrak', 'Gold', 'VIP', 'Partner/Development']);
            $table->string('CompanyName', 35);
            $table->string('Owner', 50);
            $table->string('Email', 50);
            $table->string('Fax', 50);
            $table->string('NoTelp', 50);
            $table->enum('JenisCompany',['Dagang', 'Jasa', 'Pendidikan', 'Kesehatan', 'Pemerintahan', 'Keagamaan', 'Freelance', 'E-Comerce']);
            $table->string('Provinsi',35);
            $table->string('Kabupaten',35);
            $table->string('Kota',35);
            $table->string('Alamat',255);
            $table->string('NPWP',150);
            $table->string('KdPos',20);
            $table->enum('status',['Aktif', 'Habis Kontrak', 'Tidak Aktif', 'Bermasalah']);
            $table->string('JenisOrder',150);
            $table->string('Keterangan',255);
            $table->string('Img',50);
            $table->timestamp('TglDaftar')->useCurrent = true;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbcustomer');
    }
};
