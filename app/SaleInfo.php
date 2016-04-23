<?php

namespace App;

USE DB;

class SaleInfo
{
    
	public function fetchSaleInformations() {
		$result = DB::select("SELECT * FROM sale_informations ORDER BY transaction_timestamp DESC");
		return $result;
	}

	public function fetchSaleInfoMenu ($saleInfoId) {

		$result = DB::select("SELECT * FROM sale_info_menus WHERE sale_information_id = ?", $saleInfoId);
		return $result;
	}

	public function insertSaleInfo ($array) {
		
		$sql = "INSERT INTO sale_informations (table_no, first_name, is_senior, is_take_out, ";
		$sql .= "payment_status, paymaya_ref_no, sub_total, total, payment) ";
		$sql .= "VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$saleInfoId = DB::insertGetId($sql, $array);

		return $saleInfoId;
	}

	public function insertSaleInfoMenu ($array) {
		$sql = "INSERT INTO sale_info_menus (sale_information_id, menu_id, quantity) ";
		$sql .= "VALUES (?, ?, ?)";

		DB::insert($sql, $array);
	}

}