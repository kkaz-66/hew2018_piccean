<?php
	require_once("../model/search_resultsModel.php");

	// キーワードが設定されてなかったらトップページに遷移
	if(empty($_GET["keywords"]) || !isset($_GET["fromHeader"])){
		header("Location: ../index.php");
		exit;
	}

	// メッセージ初期化
	$_POST["sizeReqNone"] = "checked";
	$_POST["sizeReqS"] = "";
	$_POST["sizeReqM"] = "";
	$_POST["sizeReqL"] = "";
	$_POST["catReqNone"] = "selected";	
	$_POST["catReq1"] = "";
	$_POST["catReq2"] = "";
	$_POST["catReq3"] = "";
	$_POST["catReq4"] = "";
	$_POST["dirReqNone"] = "checked";
	$_POST["dirReq0"] = "";
	$_POST["dirReq1"] = "";
	$_POST["sortReqNone"] = "selected";
	$_POST["sortReq0"] = "";
	$_POST["sortReq1"] = "";
	$_POST["sortReq2"] = "";
	$_POST["sortReq3"] = "";
	$_POST["sortReq4"] = "";
	$_POST["sortReq5"] = "";
	$_POST["dispNum0"] = "";
	$_POST["dispNum1"] = "selected";
	$_POST["dispNum2"] = "";
	$_POST["dispNum3"] = "";
	
	// パラメータの設定
	$search = array();
	if(isset($_GET["page"])){
		$search["page"] = $_GET["page"];
	}else{
		$search["page"] = 1;
	}
	if(isset($_GET["keywords"])){
		$search["keywords"] = $_GET["keywords"];
	}
	if(isset($_GET["categoryId"])){
		$search["categoryId"] = $_GET["categoryId"];
		switch($_GET["categoryId"]){
			case 1:
				$_POST["catReqNone"] = "";
				$_POST["catReq1"] = "selected";
				break;
			case 2:
				$_POST["catReqNone"] = "";
				$_POST["catReq2"] = "selected";
				break;
			case 3:
				$_POST["catReqNone"] = "";
				$_POST["catReq3"] = "selected";
				break;
			case 4:
				$_POST["catReqNone"] = "";
				$_POST["catReq4"] = "selected";
		}
	}
	if(isset($_GET["shopId"])){
		$search["shopId"] = $_GET["shopId"];
	}
	if(isset($_GET["imageLocation"])){
		$search["imageLocation"] = $_GET["imageLocation"];
	}
	if(isset($_GET["tagId"])){
		$search["tagId"] = $_GET["tagId"];
	}
	if(isset($_GET["imageSize"])){
		$search["imageSize"] = $_GET["imageSize"];
		switch($_GET["imageSize"]){
			case "S":
				$_POST["sizeReqNone"] = "";
				$_POST["sizeReqS"] = "checked";
				break;
			case "M":
				$_POST["sizeReqNone"] = "";
				$_POST["sizeReqM"] = "checked";
				break;
			case "L":
				$_POST["sizeReqNone"] = "";
				$_POST["sizeReqL"] = "checked";
		}
	}
	if(isset($_GET["imageDirection"])){
		$search["imageDirection"] = $_GET["imageDirection"];
		switch($_GET["imageDirection"]){
			case 0:
				$_POST["dirReqNone"] = "";
				$_POST["dirReq0"] = "checked";
				break;
			case 1:
				$_POST["dirReqNone"] = "";
				$_POST["dirReq1"] = "checked";
		}
	}
	if(isset($_GET["imageSort"])){
		$search["imageSort"] = $_GET["imageSort"];
		switch($_GET["imageSort"]){
			case 0:
				$_POST["sortReqNone"] = "";
				$_POST["sortReq0"] = "selected";
				break;
			case 1:
				$_POST["sortReqNone"] = "";
				$_POST["sortReq1"] = "selected";
				break;
			case 2:
				$_POST["sortReqNone"] = "";
				$_POST["sortReq2"] = "selected";
				break;
			case 3:
				$_POST["sortReqNone"] = "";
				$_POST["sortReq3"] = "selected";
				break;
			case 4:
				$_POST["sortReqNone"] = "";
				$_POST["sortReq4"] = "selected";
				break;
			case 5:
				$_POST["sortReqNone"] = "";
				$_POST["sortReq5"] = "selected";
		}
	}
	switch($_GET["dispNum"]){
		case 10:
			$_POST["dispNum0"] = "selected";
			$_POST["dispNum1"] = "";
			$dispNum = $_GET["dispNum"];
			break;
		case 20:
			$dispNum = $_GET["dispNum"];
			break;
		case 50:
			$_POST["dispNum1"] = "";
			$_POST["dispNum2"] = "selected";
			$dispNum = $_GET["dispNum"];
			break;
		case 100:
			$_POST["dispNum1"] = "";
			$_POST["dispNum3"] = "selected";
			$dispNum = $_GET["dispNum"];
			break;
		default:
			$dispNum = 20;
	}
	
	// 画像検索を実行
	$results = searchImages($search,$dispNum);

	// 結果を渡して検索結果画面に遷移
	$_POST["keywords"] = $_GET["keywords"];
	if($results){
		$_POST["currentPage"] = $search["page"];
		$_POST["dispNum"] = $dispNum;
		$_POST["count"] = $results["count"][0];
		unset($results["count"]);
		$_POST["images"] = $results;
		$_POST["lastPage"] = ceil($_POST["count"] / $dispNum);
	}else{
		$_POST["count"] = 0;
	}
	require_once("../view/search_resultsView.php");
?>