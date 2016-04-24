<?php

namespace App;

USE DB;

class Category {

	public function getAllCategory() {

		$array = DB::select("SELECT * FROM categories ORDER BY description ASC");

		return $array;
	}

	public function getCategory ($categoryId) {

		return DB::select("SELECT * FROM categories WHERE category_id = ? ORDER BY description ASC", $categoryId);
	}	

	public function insertCategory ($array) {
		
		DB::insert("INSERT INTO categories (description) VALUES (?)", $array);
	}

}