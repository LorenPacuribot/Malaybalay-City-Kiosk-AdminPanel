<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('office_id')->constrained('offices');
            $table->string('name');
            $table->text('description_of_service');
            $table->string('office_and_division');
            $table->string('classification');
            $table->string('type_of_transaction');
            $table->string('who_may_avail');
            $table->string('total_processing_time');
            $table->string('total_fees');
            $table->string('period_of_extension');
            $table->timestamps();
            $table->softDeletes();

        });

        Schema::create('documentary_requirements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id');
            //->constrained('services');
            $table->text('documentary_requirement');
            $table->text('where_to_secure');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('client_actions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained('services');
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('agency_actions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained('services');
            $table->foreignId('client_action_id')->constrained('client_actions');
            $table->string('agency_action');
            $table->string('fees_to_be_paid');
            $table->string('processing_time');
            $table->string('person_in_charge');
            $table->string('contact_number');
            $table->timestamps();
            $table->softDeletes();

        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
        Schema::dropIfExists('documentary_requirements');
        Schema::dropIfExists('client_actions');
        Schema::dropIfExists('agency_actions');
    }
};
