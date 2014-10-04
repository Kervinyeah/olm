var mApp = angular.module("mApp", []);

mApp.controller("mController", function($scope){
	$scope.ms = [{
			name: "兜刀",
			dsc: "找人踢球！！",
			place: "海南大学",
			type: "约人玩",
			rank: "5",
		},{
			name: "过果",
			dsc: "DOTA啊",
			place: "上海交通大学",
			type: "家教",
			rank: "5",
		},{
			name: "九风清洁",
			dsc: "哈哈哈哈",
			place: "海南中学",
			type: "找茬",
			rank: "1",
		},{
			name: "死基佬",
			dsc: "来嘛～",
			place: "北京外国语大学",
			type: "约人玩",
			rank: "9",
		}
	];

	$scope.selected_news = -1;
	$scope.selectNews = function(m){
		$scope.selected_news = m;
	}
});
