var indexApp = angular.module("indexApp", []);

indexApp.controller("indexController", function($scope){
	$scope.news = [{
			type: "message",
			sender: "兜刀",
			message: "Hello World",
		},{
			type: "message",
			sender: "过果",
			message: "我是过果，哈",
		},{
			type: "activity",
			sender: "韩梁",
			aName: "全国大学生吃西瓜大赛",
			aContent: "很有意思的一个比赛。大家一起吃西瓜！在规定时间内吃完最多西瓜的人获胜！胜利者可以得到¥9999999哦！",
		},{
			type: "picture"
	}];

	$scope.mylm = [{
			name: "网教战队",
			dsc: "如题"
		},{
			name: "海南中学2011级高三（1）班",
			dsc: "史上最猥琐的班级，没有之一！！"
		}
	];

	$scope.selected_news = -1;
	$scope.selectNews = function(index){
		$scope.selected_news = index;
	}
});

