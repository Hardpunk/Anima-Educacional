<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->integer('installment_no_interest')->nullable();
            $table->integer('max_installment')->nullable();
            $table->boolean('is_course_with_interest')->default(false);
            $table->boolean('is_free_course')->default(false);
            $table->decimal('discounted_price', 10, 2)->nullable();
            $table->boolean('discount_flag')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumns(['installment_no_interest', 'max_installment', 'is_course_with_interest', 'is_free_course', 'discounted_price', 'discount_flag']);
        });
    }
}
