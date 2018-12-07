$(function() {

	// サイズ変更
	$('.addSize').on('click', function () {
		var params = getParameter();
		var elements = document.getElementsByName('imageSize');
		for(var i = 0; i < elements.length; i++){
			if(elements[i].checked){
				var e = elements[i].value;
				break;
			}
		}
		if(e == "S" || e == "M" || e == "L"){
			params['imageSize'] = e;
		}else{
			delete params['imageSize'];
		}
		params["page"] = 1;
		window.location.href = setParameter(params);
	});

	// カテゴリ変更
	$('#categoryId').change(function () {
		var params = getParameter();
		var element = document.getElementById('categoryId');
		var e = element.value;
		if(e == -1){
			delete params['categoryId'];
		}else{
			params['categoryId'] = e;
		}
		params["page"] = 1;
		window.location.href = setParameter(params);
	});

	// 画像の向き変更
	$('.addDirection').on('click', function () {
		var params = getParameter();
		var elements = document.getElementsByName('imageDirection');
		for (var i = 0; i < elements.length; i++) {
			if (elements[i].checked) {
				var e = elements[i].value;
				break;
			}
		}
		if (e == 0 || e ==1) {
			params['imageDirection'] = e;
		} else {
			delete params['imageDirection'];
		}
		params["page"] = 1;
		window.location.href = setParameter(params);
	});

	// 並び順変更
	$('#imageSort').change(function () {
		var params = getParameter();
		var element = document.getElementById('imageSort');
		var e = element.value;
		if (e == -1) {
			delete params['imageSort'];
		} else {
			params['imageSort'] = e;
		}
		params["page"] = 1;
		window.location.href = setParameter(params);
	});

	// 表示件数変更
	$('#dispNum').change(function () {
		var params = getParameter();
		var element = document.getElementById('dispNum');
		var e = element.value;
		if (e == -1) {
			delete params['dispNum'];
		} else {
			params['dispNum'] = e;
		}
		params["page"] = 1;
		window.location.href = setParameter(params);
	});

	// ページ切り替え
	$('.changePage').on('click', function (e) {
		var params = getParameter();
		var element = e.target.dataset.page;
		params["page"] = element;
		window.location.href = setParameter(params);
	});

	//パラメータを設定したURLを返す
	function setParameter(paramsArray) {
		var resurl = location.href.replace(/\?.*$/, "");
		for (key in paramsArray) {
			resurl += (resurl.indexOf('?') == -1) ? '?' : '&';
			resurl += key + '=' + paramsArray[key];
		}
		return resurl;
	}

	//パラメータを取得する
	function getParameter() {
		var paramsArray = [];
		var url = location.href;
		parameters = url.split("#");
		if (parameters.length > 1) {
			url = parameters[0];
		}
		parameters = url.split("?");
		if (parameters.length > 1) {
			var params = parameters[1].split("&");
			for (i = 0; i < params.length; i++) {
				var paramItem = params[i].split("=");
				paramsArray[paramItem[0]] = paramItem[1];
			}
		}
		return paramsArray;
	};
});