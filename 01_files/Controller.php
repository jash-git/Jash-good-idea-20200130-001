(function(){
				try{
					var json = {"Area":"\u81fa\u5317\u5e02","Temperature":"8-13","Rain":"0","Simg":"\/\/cache.ltn.com.tw\/images\/weather\/wi_0002_day.png","Status":"\u591a\u96f2\u6642\u6674","uptime":"1970-01-01 08:00"};
					var data = json;
					$('#weather_text').html(data.Area + '  ' + data.Temperature + '  ℃');
					$('#weather_img').attr('src', data.Simg);
					$('#weather_img').attr('alt', data.Status);
					console.log($('#weather_text'));
				}catch(e){
					
				}
			})();