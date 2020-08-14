$(document).ready(function(){
	var labels=["fun",
	"happiness",
	"focus",
	"fitness",
	"clarity",
	"be fast",
	"be strong",
	"women",
	"men",
	"you",
	"life",
	"freedom",
	"peace",
	"hope",
	"a reason",
	"the wild",
	"us!",
	"something",
	"change",
	"space",
	"...just run",
	"vision",
	"light",
	"more",
	"idea",
	"goal",
	"power",
	"difference",
	"mind",
	"dozoba.pl"
	];
	
	//Math.floor((Math.random() * 10) + 1); 
	var runlabel = $("#runlabel span")
	setInterval(function(){ 
		var index_last = 0;
		var index = Math.floor((Math.random() * 29) + 1); 
		runlabel.html(labels[index].toUpperCase()); }, 700);

	//timer
	var dataBiegu = new Date ("2020-05-31T06:00:00+01:00");
	setInterval(function(){
		var dataAktualna = new Date();
		var roznica = (dataBiegu - dataAktualna);
		if (roznica > 0) {
			var dni = Math.floor(roznica/(1000*60*60*24));
			var dnims = dni*1000*60*60*24;
			var godziny = Math.floor((roznica - dnims)/(1000*60*60)); //1000*60*60-1  gdy zmiana czasu
			var godzinyms = godziny*1000*60*60;
			var minuty = Math.floor((roznica - dnims - godzinyms)/(1000*60));
			var minutyms = minuty*1000*60;
			var sekundy = Math.floor((roznica - dnims - godzinyms - minutyms)/1000);
			if (minuty < 10) { minuty="0"+minuty}
			if (sekundy < 10) { sekundy = "0"+sekundy}
			$('#dni').html(dni);
			$('#godziny').html(godziny);
			$('#minuty').html(minuty);
			$('#sekundy').html(sekundy);
		} else {
			$('.timer').html("Bieg już się odbył:) Dzięki, że byłeś z nami - widzimy się za rok!")
		}
		
	}, 1000);
	//background
	var i=1;
	var imgs = [$('#bg1'),$('#bg2'),$('#bg3'),$('#bg4'),$('#bg5')];
	setInterval(function(){
		//$('body').css("backgroundImage",arrbg[i]);
		imgs[i].animate({
			opacity: '1'
		}, 500, function(){
			i+=1;
			if(i==5){
				$('#bg2').css("opacity","0");
				$('#bg3').css("opacity","0");
				$('#bg4').css("opacity","0");
				setTimeout(function(){
					$('#bg5').animate({
						opacity: "0"
					});
				},7000);
				i=0;
			}
		});
		
		
	}, 7000)
		

});
