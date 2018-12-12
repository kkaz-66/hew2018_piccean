<?php
	require_once("db_model.php");

	function searchImages($search,$dispNum){
		// 複数キーワードを分割して配列に格納
		$keywords = str_replace('　',' ', $search["keywords"]);
		$keywords = trim($keywords);
		$keywords = preg_replace('/\s+/',' ', $keywords);
		$keywords = explode(' ',$keywords);

		$sqlParams = array();
		$sqlParams[0] = "";

		// JOIN句内のWHERE句の組み立て
		if(isset($search["tagId"])){
			$sqlJoin = "";
			$sqlJoin = "T_TAGMAP.tag_id = ?";
			$sqlParams[0] .= "i";
			$sqlParams[] = $search["tagId"];
		}
		
		// WHERE句の組み立て
		$sqlWhere = array();
		foreach($keywords as $value){
			$sqlWhere[] = "concat(image_title, image_location, image_equipments, image_comment) LIKE ?";
			$sqlParams[0] .= "s";
			$sqlParams[] = "%$value%";
		}
		if(isset($search["categoryId"])){
			$sqlWhere[] = "category_id = ?";
			$sqlParams[0] .= "i";
			$sqlParams[] = $search["categoryId"];
		}
		if(isset($search["shopId"])){
			$sqlWhere[] = "shop_id = ?";
			$sqlParams[0] .= "i";
			$sqlParams[] = $search["shopId"];
		}
		if(isset($search["imageLocation"])){
			$sqlWhere[] = "image_location LIKE ?";
			$sqlParams[0] = "s";
			$sqlParams[] = "%" . $search["imageLocation"] ."%";
		}
		if(isset($search["imageSize"])){
			$sqlWhere[] = "image_size = ?";
			$sqlParams[0] .= "s";
			$sqlParams[] = $search["imageSize"];
		}
		if(isset($search["imageDirection"])){
			$sqlWhere[] = "image_direction = ?";
			$sqlParams[0] .= "i";
			$sqlParams[] = $search["imageDirection"];
		}
		
		// 総検索数SQL用の
		// bind_paramに渡す引数を参照渡しに変更
		$params_1 = array();
		foreach($sqlParams as $key => $value){
			$params_1[$key] = &$sqlParams[$key];
		}

		// SQL文の組み立て
		$sql_1 = "SELECT COUNT(*) FROM T_IMAGE";	// 総検索数SQL
		$sql_2 = "SELECT * FROM T_IMAGE";			// 表示件数指定SQL
		if(isset($sqlJoin)){
			$sql .= " INNER JOIN(
						SELECT
							T_TAGMAP.image_id
						FROM
							T_TAGMAP
						WHERE
							$sqlJoin
					) TAGMAP_TEMP
					ON
						TAGMAP_TEMP.image_id = T_IMAGE.image_id";
		}
		$sql .= " WHERE image_state = 0";
		if(count($sqlWhere) > 0){
			$sql .= " AND " . implode(" AND ", $sqlWhere);
		}
		$sql_1 .= $sql;
		$sql_2 .= $sql;

		// 総検索数を取得
		$con = db_connect();
		$stmt_1 = mysqli_prepare($con, $sql_1);
		call_user_func_array(array($stmt_1, 'bind_param'), $params_1);
		mysqli_stmt_execute($stmt_1);
		$result_1 = mysqli_stmt_get_result($stmt_1);
		mysqli_stmt_close($stmt_1);
		$list["count"] = mysqli_fetch_row($result_1);
		
		// ORDER BY句の組み立て
		$sqlOrderBy = "";
		switch($search["imageSort"]){
			case 0:
				$sqlOrderBy = "image_date DESC";
				break;
			case 1:
				$sqlOrderBy = "image_date ASC";
				break;
			case 2:
				$sqlOrderBy = "image_downloads DESC";
				break;
			case 3:
				$sqlOrderBy = "image_downloads ASC";
				break;
			case 4:
				$sqlOrderBy = "image_views DESC";
				break;
			case 5:
				$sqlOrderBy = "image_views ASC";
				break;
			default:
				$sqlOrderBy = "image_date DESC";
		}
		
		// LIMIT句組み立て
		$sqlLimit = "";
		if(isset($search["page"]) && $search["page"] > 0){
			$pageStart = ($search["page"] - 1) * $dispNum;
		}else{
			$pageStart = 0;
		}
		$sqlParams[0] .= "i";
		$sqlParams[] = $pageStart;
		$sqlParams[0] .= "i";
		$sqlParams[] = $dispNum;
		$sqlLimit = "? , ?";

		// sql_2にLIMIT句とORDER BY句を追加
		$sql_2 .= " ORDER BY " . $sqlOrderBy;
		$sql_2 .= " LIMIT " . $sqlLimit;

		// 表示件数指定SQL用の
		// bind_paramに渡す引数を参照渡しに変更
		$params_2 = array();
		foreach($sqlParams as $key => $value){
			$params_2[$key] = &$sqlParams[$key];
		}

		// 表示件数指定で画像情報取得
		$stmt_2 = mysqli_prepare($con, $sql_2);
		call_user_func_array(array($stmt_2, 'bind_param'), $params_2);
		mysqli_stmt_execute($stmt_2);
		$result_2 = mysqli_stmt_get_result($stmt_2);
		while ($row = mysqli_fetch_array($result_2)) {
			$list[] = $row;
		}
		mysqli_stmt_close($stmt_2);
		db_close($con);
		return $list;
	}
?>