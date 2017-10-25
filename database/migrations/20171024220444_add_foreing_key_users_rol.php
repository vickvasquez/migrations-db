<?php

use Phinx\Migration\AbstractMigration;

class AddForeingKeyUsersRol extends AbstractMigration {
	/**
	 * Change Method.
	 *
	 * Write your reversible migrations using this method.
	 *
	 * More information on writing migrations is available here:
	 * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
	 *
	 * The following commands can be used in this method and Phinx will
	 * automatically reverse them when rolling back:
	 *
	 *    createTable
	 *    renameTable
	 *    addColumn
	 *    renameColumn
	 *    addIndex
	 *    addForeignKey
	 *
	 * Remember to call "create()" or "update()" and NOT "save()" when working
	 * with the Table class.
	 */

	//Para agregar llaves foreaneas despues utilizar el metodo up
	public function up() {

		$users = $this->table('users');

		//campo de la tabla actual
		//nombre de la tabla que contiene la llave foranea
		//Y el nombre del campo foranea
		$users->addForeignKey('rol', 'roles', 'id')->save();
	}

	public function down() {
		$users = $this->table('users');
		$users->dropForeignKey('rol')->save();

	}
}
