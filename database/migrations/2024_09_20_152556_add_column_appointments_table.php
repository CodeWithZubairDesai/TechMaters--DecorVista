<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        
            Schema::table('appointments', function (Blueprint $table) {
                $table->unsignedBigInteger('consultancy_id')->after('designer_id');
                $table->foreign('consultancy_id')->references('id')->on('consultants')->onDelete('cascade');
            });
    }
};

