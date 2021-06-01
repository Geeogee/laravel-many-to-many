<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        // Relazione 1 a N fra Locations e Employees
        Schema::table('employees', function (Blueprint $table) {

            $table 
                    -> foreign('location_id', 'employee_location')
                    -> references('id')
                    -> on('locations');
        });

        // Relazioni N a M
        Schema::table('employee_task', function (Blueprint $table) {

            $table
                    -> foreign('employee_id', 'employee_task')
                    -> references('id')
                    -> on('tasks');

            $table 
                    -> foreign('task_id', 'task_employee')
                    -> references('id')
                    -> on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {

            $table -> dropForeign('employee_location');
        });

        Schema::table('employee_task', function (Blueprint $table) {

            $table -> dropForeign('employee_task');
            $table -> dropForeign('task_employee');
        });
    }
}
