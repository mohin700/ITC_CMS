<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('employee_id');
            $table->string('clients_name');
            $table->string('cp_name');
            $table->string('cp_phone');
            $table->string('cp_email');
            $table->string('prospective');
            $table->text('brief');
            $table->string('submission_ppt_tech')->nullable();
            $table->string('submission_fainancial_quotation')->nullable();
            $table->string('submission_ppt_with_sample')->nullable();
            $table->string('submission_with_quotation')->nullable();
            $table->string('submission_other')->nullable();
            $table->string('work_event')->nullable();
            $table->string('work_activation')->nullable();
            $table->string('work_gift_item')->nullable();
            $table->date('submission_date');
            $table->string('dep_planning')->nullable();
            $table->string('dep_creative')->nullable();
            $table->string('dep_operation')->nullable();
            $table->string('dep_accounts')->nullable();
            $table->string('dep_hr')->nullable();
            $table->string('dep_admin')->nullable();
            $table->string('dep_it')->nullable();
            $table->string('dep_Other')->nullable();
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
        Schema::dropIfExists('client_records');
    }
}
