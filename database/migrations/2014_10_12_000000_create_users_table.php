<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {

	private $tablename = "users";

	public function up() {

		if (Schema::hasTable($this->tablename)) {
			echo "Table named " . $this->tablename . " is exist";
			return;
		}

		Schema::create($this->tablename, function (Blueprint $table) {
			$table->increments('id')->nullable(false);
			$table->string("content", 2000);
			$table->timestamps();
		});
	}

	public function down() {
		Schema::dropIfExists($this->tablename);
	}
}
