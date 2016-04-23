<?php

namespace App;

USE DB;

class Menu {

	public function getAllMenu() {

		$array = DB::select("SELECT * FROM menus ORDER BY description ASC");

		return $array;
	}

	public function getMenu ($menuId) {

		$result = DB::select("SELECT * FROM menus WHERE menu_id = ? ORDER BY description ASC", $menuId);
		
		return $result;
	}	

	public function insertMenu ($array) {
		$sql = "INSERT INTO menus (caregory_id, description, variant, price) ";
		$sql .= "VALUES (?, ?, ?, ?)";

		DB::insert($sql, $array);
	}

}