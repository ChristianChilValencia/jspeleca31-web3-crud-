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
//         Schema::create('reviews', function (Blueprint $table) {
//             $table->id();
//             $table->timestamps();
//         });
//     }

//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {
//         Schema::dropIfExists('reviews');
//     }
// };

class CreateReviewsTable extends Migration
{
 public function up()
 {
 Schema::create('reviews', function (Blueprint $table) {
 $table->id();
 $table->foreignId('book_id')->constrained()->onDelete('cascade');
 $table->text('content');
 $table->integer('rating');
 $table->timestamps();
 });
 }
 public function down()
 {
 Schema::dropIfExists('reviews');
 }
}