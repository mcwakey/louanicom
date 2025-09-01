<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('partners', function (Blueprint $table) {
            $table->integer('position')->default(0)->after('image_path');
            $table->string('link')->nullable()->after('position');
        });
    }

    public function down()
    {
        Schema::table('partners', function (Blueprint $table) {
            $table->dropColumn(['position','link']);
        });
    }
};
