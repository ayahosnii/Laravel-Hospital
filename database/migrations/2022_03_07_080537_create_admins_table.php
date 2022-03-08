<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('email', 100);
            $table->string('photo', 100)->nullable();
            $table->string('password', 225);
            $table->timestamps();
        });
    }

    /*
 * Psy Shell v0.11.1 *
    public function save()
    {
        $admin = new App\Models\Admin();
        $admin -> name = "Aya Hosny";
        $admin -> email = "aya@gmail.com";
        $admin -> password = bcrypt("12345678");
        $admin -> save();
    }
*/

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
