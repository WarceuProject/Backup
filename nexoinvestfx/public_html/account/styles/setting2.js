$(document).ready(function(){
	
	$(".dropdown img.flag").addClass("flagvisibility");

    $(".dropdown dt a").click(function() {
        $(".dropdown dd ul").toggle();
    });
                
    $(".dropdown dd ul li a").click(function() {
        var text = $(this).html();
        $(".dropdown dt a").html(text);
        $(".dropdown dd ul").hide();
    });
    $(document).bind('click', function(e) {
        var $clicked = $(e.target);
        if (! $clicked.parents().hasClass("dropdown"))
            $(".dropdown dd ul").hide();
    });
	
	wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    
    


	  //calculator1//
    
    
	

	function calc(){
	    var percent 	= [2];
		var minMoney 	= [10];
		var maxMoney	= [1000000000];

		if($("#amount").val().length == 0){
			$("#amount").val(minMoney[0]);
		}

		amount = parseFloat($("#amount").val());
		id = -1;
		var length = percent.length;
		var i = 0;
		do {
			if(minMoney[i] <= amount && amount <= maxMoney[i]){
				id = i;
				i = i + length;
			}
			i++
		}
		while(i < length)
		
		if(id != -1){
			profitDaily = amount / 100 * percent[id];
			profitDaily = profitDaily.toFixed(2);
			profitWeekly = profitDaily * 7;
			profitWeekly = profitWeekly.toFixed(2);
			profitMonthly = profitDaily * 30;
			profitMonthly = profitMonthly.toFixed(2);
			profitTotal = profitMonthly * 3;
			profitTotal = profitTotal.toFixed(2);



			if(amount < minMoney[id] || isNaN(amount) == true){
				$("#profitWeekly").text("Error!");
				$("#profitDaily").text("Error!");
				$("#profitTotal").text("Error!");
				$("#profitMonthly").text("Error!");
			} else {
				$("#profitWeekly").text("$" + profitWeekly);
				$("#profitDaily").text("$" + profitDaily);
				$("#profitTotal").text("$" + profitTotal);
				$("#profitMonthly").text("$" + profitMonthly);
			}
		} else {
			$("#profitWeekly").text("Error!");
			$("#profitDaily").text("Error!");
			$("#profitTotal").text("Error!");
			$("#profitMonthly").text("Error!");
		}
	}

	calc();

	$("#amount").keyup(function(){
		calc();
	});

    
      //calculator2//
	
	//Calculator
	function calc1(){
	    var percent 	= [2.2];
		var minMoney 	= [100];
		var maxMoney	= [1000000000];
	
		if($("#amount1").val().length == 0){
			$("#amount1").val(minMoney[0]);
		}	
	
		amount = parseFloat($("#amount1").val());
		id = -1;
		var length = percent.length;
		var i = 0;
		do {
			if(minMoney[i] <= amount && amount <= maxMoney[i]){
				id = i;
				i = i + length;
			}
			i++
		}
		while(i < length)
		
		if(id != -1){
			profitDaily1 = amount / 100 * percent[id];
			profitDaily1 = profitDaily1.toFixed(2);
			profitWeekly1 = profitDaily1 * 7;
			profitWeekly1 = profitWeekly1.toFixed(2);
			profitMonthly1 = profitDaily1 * 30;
			profitMonthly1 = profitMonthly1.toFixed(2);
			profitTotal1 = profitMonthly1 * 3;
			profitTotal1 = profitTotal1.toFixed(2);


			if(amount < minMoney[id] || isNaN(amount) == true){
				$("#profitWeekly1").text("Error!");
				$("#profitDaily1").text("Error!");
				$("#profitTotal1").text("Error!");
				$("#profitMonthly1").text("Error!");
			} else {
				$("#profitWeekly1").text("$" + profitWeekly1);
				$("#profitDaily1").text("$" + profitDaily1);
				$("#profitTotal1").text("$" + profitTotal1);
				$("#profitMonthly1").text("$" + profitMonthly1);
			}
		} else {
			$("#profitWeekly1").text("Error!");
			$("#profitDaily1").text("Error!");
			$("#profitTotal1").text("Error!");
			$("#profitMonthly1").text("Error!");
		}
	}

	calc1();

	$("#amount1").keyup(function(){
		calc1();
	});
	
    
       //calculator3//
    
    

	//Calculator
	function calc2(){
		var percent 	= [2.4];
		var minMoney 	= [1000];
		var maxMoney	= [1000000000];

		if($("#amount2").val().length == 0){
			$("#amount2").val(minMoney[0]);
		}
	
		amount = parseFloat($("#amount2").val());
		id = -1;
		var length = percent.length;
		var i = 0;
		do {
			if(minMoney[i] <= amount && amount <= maxMoney[i]){
				id = i;
				i = i + length;
			}
			i++
		}
		while(i < length)
		
		if(id != -1){
			profitDaily2 = amount / 100 * percent[id];
			profitDaily2 = profitDaily2.toFixed(2);
			profitWeekly2 = profitDaily2 * 7;
			profitWeekly2 = profitWeekly2.toFixed(2);
			profitMonthly2 = profitDaily2 * 30;
			profitMonthly2 = profitMonthly2.toFixed(2);
			profitTotal2 = profitMonthly2 * 3;
			profitTotal2 = profitTotal2.toFixed(2);


			if(amount < minMoney[id] || isNaN(amount) == true){
				$("#profitWeekly2").text("Error!");
				$("#profitDaily2").text("Error!");
				$("#profitTotal2").text("Error!");
				$("#profitMonthly2").text("Error!");
			} else {
				$("#profitWeekly2").text("$" + profitWeekly2);
				$("#profitDaily2").text("$" + profitDaily2);
				$("#profitTotal2").text("$" + profitTotal2);
				$("#profitMonthly2").text("$" + profitMonthly2);
			}
		} else {
			$("#profitWeekly2").text("Error!");
			$("#profitDaily2").text("Error!");
			$("#profitTotal2").text("Error!");
			$("#profitMonthly2").text("Error!");
		}
	}

	calc2();

	$("#amount2").keyup(function(){
		calc2();
	});




  //calculator4//
    
    

	//Calculator
	function calc3(){
		var percent 	= [2.6];
		var minMoney 	= [2500];
		var maxMoney	= [1000000000];

		if($("#amount3").val().length == 0){
			$("#amount3").val(minMoney[0]);
		}
	
		amount = parseFloat($("#amount3").val());
		id = -1;
		var length = percent.length;
		var i = 0;
		do {
			if(minMoney[i] <= amount && amount <= maxMoney[i]){
				id = i;
				i = i + length;
			}
			i++
		}
		while(i < length)
		
		if(id != -1){
			profitDaily3 = amount / 100 * percent[id];
			profitDaily3 = profitDaily3.toFixed(2);
			profitWeekly3 = profitDaily3 * 7;
			profitWeekly3 = profitWeekly3.toFixed(2);
			profitMonthly3 = profitDaily3 * 30;
			profitMonthly3 = profitMonthly3.toFixed(2);
			profitTotal3 = profitMonthly3 * 3;
			profitTotal3 = profitTotal3.toFixed(2);


			if(amount < minMoney[id] || isNaN(amount) == true){
				$("#profitWeekly3").text("Error!");
				$("#profitDaily3").text("Error!");
				$("#profitTotal3").text("Error!");
				$("#profitMonthly3").text("Error!");
			} else {
				$("#profitWeekly3").text("$" + profitWeekly3);
				$("#profitDaily3").text("$" + profitDaily3);
				$("#profitTotal3").text("$" + profitTotal3);
				$("#profitMonthly3").text("$" + profitMonthly3);
			}
		} else {
			$("#profitWeekly3").text("Error!");
			$("#profitDaily3").text("Error!");
			$("#profitTotal3").text("Error!");
			$("#profitMonthly3").text("Error!");
		}
	}

	calc3();

	$("#amount3").keyup(function(){
		calc3();
	});



});
