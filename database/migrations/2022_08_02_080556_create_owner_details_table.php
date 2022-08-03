<?php

use App\Models\Owner;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owner_details', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('Agent_name');
            $table->string('mobile_number');
            $table->string('tel_number');
            $table->string('email_address')->unique();
            $table->string('office_address');
            $table->string('office_hours');
            $table->string('profile_photo_path')->nullable();
            $table->foreignIdFor(Owner::class);
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
        Schema::dropIfExists('owner_details');
    }
}
