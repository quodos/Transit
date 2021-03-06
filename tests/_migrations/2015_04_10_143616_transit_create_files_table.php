<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TransitCreateFilesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table)
        {
            $table->increments('id');

            $table->string('path');
            $table->string('name');
            $table->string('extension');
            $table->string('mimetype');
            $table->bigInteger('size')->unsigned();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('files');
    }

}
