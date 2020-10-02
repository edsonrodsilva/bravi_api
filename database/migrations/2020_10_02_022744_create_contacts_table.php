<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->uuidMorphs('id');
            $table->foreignId('person_id')->constrained('persons')->onDelete('cascade');
            $table->integer('phone', 20);
            $table->string('email')->unique();
            $table->string('whatsapp', 20);
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
        Schema::dropForeign('contacts_person_id_foreign');
        Schema::dropIfExists('contacts');
    }
}
