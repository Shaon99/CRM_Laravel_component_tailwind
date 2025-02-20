<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name')->nullable();
            $table->bigInteger('industry_id')->nullable();
            $table->bigInteger('type_id')->nullable();
            $table->string('customer_visit')->default('NONE');
            $table->string('office_tel_code')->nullable();
            $table->string('office_tel')->nullable();
            $table->string('office_mobile_code')->nullable();
            $table->string('mobile')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('tax_treatment')->nullable();
            $table->string('vat')->nullable();
            $table->string('trade_license')->nullable();
            $table->string('trade_license_expire_date')->nullable();
            $table->string('ordering_contact_code')->nullable();
            $table->string('ordering_contact')->nullable();
            $table->string('owner_contact')->nullable();
            $table->string('payment_contact')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('payment_terms')->nullable();
            $table->string('credit_limit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
