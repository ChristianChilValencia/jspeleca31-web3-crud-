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
//         Schema::create('books', function (Blueprint $table) {
//             $table->id();
//             $table->timestamps();
//         });
//     }

//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {
//         Schema::dropIfExists('books');
//     }
// };


class CreateBooksTable extends Migration
{
 public function up()
 {
 Schema::create('books', function (Blueprint $table) {
 $table->id();
 $table->string('title');
 $table->foreignId('author_id')->constrained()->onDelete('cascade');
 $table->timestamps();
 });
 }
 public function down()
 {
 Schema::dropIfExists('books');
 }
}