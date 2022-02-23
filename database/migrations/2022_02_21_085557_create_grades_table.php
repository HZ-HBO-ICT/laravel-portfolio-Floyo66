<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('course_name');
            $table->string('test_name');
            $table->decimal('lowest_passing_grade', $precision = 3, $scale = 1)->default(5.5);
            $table->decimal('best_grade', $precision = 3, $scale = 1)->nullable();
            $table->date('passed_at')->nullable()->comment('Date that the grade was larger than or equal to the lowest passing grade');
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
        Schema::table('grades', function (Blueprint $table) {
            $table->dropColumn('title');
        });
    }

    public function addResult ($best_grade $)
    {
        $best_grade = \DB::table('grades')->where('best_grade', $best_grade)
        if ($NewResult >= $best_grade) {
        passed_at->now();
     }
    }
}
