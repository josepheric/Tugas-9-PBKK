<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mhs extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			
			'NoHP'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			]

		]);
	}

	public function down()
	{
		//
	}
}
