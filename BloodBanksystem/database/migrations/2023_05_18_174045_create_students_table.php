<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('bank', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phoneno');
            $table->string('bloodgroup');
            $table->string('lastdonationdate');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('bank');
    }
}
