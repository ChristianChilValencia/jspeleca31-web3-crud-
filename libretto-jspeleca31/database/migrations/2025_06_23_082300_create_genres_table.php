<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      */
//     public function up(): void
//     {
//         Schema::create('genres', function (Blueprint $table) {
//             $table->id();
//             $table->timestamps();
//         });
//     }

//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {
//         Schema::dropIfExists('genres');
//     }
// };

class CreateGenresTable extends Migration
{
 public function up()
 {
 Schema::create('genres', function (Blueprint $table) {
 $table->id();
 $table->string('name');
 $table->timestamps();
 });
 }
 public function down()
 {
 Schema::dropIfExists('genres');
 }
}