var lmApp = angular.module("lmApp", []);

lmApp.controller("lmController", function($scope){
	$scope.lms = [{
			name: "网教战队",
			dsc: "如题",
			place: "海南中学",
			type: "游戏",
			size: "20",
		},{
			name: "海南中学2011级高三（1）班",
			dsc: "史上最猥琐的班级，没有之一！！",
			place: "海南中学",
			type: "班级",
			size: "50",
		},{
			name: "九风清洁",
			dsc: "好多额。。。。。",
			place: "海南中学",
			type: "交友",
			size: "2000",
		},{
			name: "搞基联盟",
			dsc: "很噁心的地方！",
			place: "北京外国语大学",
			type: "交友",
			size: "1000000",
		}
	];

	$scope.selected_news = -1;
	$scope.selectNews = function(lm){
		$scope.selected_news = lm;
	}
});
