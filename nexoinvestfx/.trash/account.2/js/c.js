





function calcthis()
{ 
  var planperc=new Array(0,0,0,0,0,0,0);
  var depo = document.getElementById("deposit").value;
  var perc = document.getElementById("percent").value;

// =========================================================================================================================











// PLAN 1 ===================================================================================================================
if (perc == "perc1")  {planperc=Array(103,105,108,113,121,130,140)
  if (depo < 20)
	{alert ("Minimal deposit for this plan is $20"); document.getElementById("deposit").value = 20; calcthis();}
	else
	{
	if (depo > 5000)
	  {alert ("Maximal deposit for this plan  is $50000"); document.getElementById("deposit").value = 50000; calcthis();}
	  else
	  {
	  if (depo < 500)
		{
  
		  document.getElementById("inpvar1").innerHTML = planperc[0];
		  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
		}
		else
		{
		  if (depo < 1000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[1];
			  document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
			}
			else
		{
		  if (depo < 2500)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[2];
			  document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			}
			else
		{
		  if (depo < 5000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[3];
			  document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
			}
			else
				{
		  if (depo < 10000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[4];
			  document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
			}
			else
		{
		  if (depo < 20000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[5];
			  document.getElementById("inpvar2").innerHTML = planperc[5] * depo / 100;
			}
			
			else
			{
			  document.getElementById("inpvar1").innerHTML = planperc[6];
			  document.getElementById("inpvar2").innerHTML = planperc[6] * depo / 100;
			}
		}
	  }
	}
	}
	}
	}
	}
};   
// PLAN 2 ===================================================================================================================
if (perc == "perc2")  {planperc=Array(118,130,148,180,235,270,330)
  if (depo < 20)
	{alert ("Minimal deposit for this plan is $20"); document.getElementById("deposit").value = 20; calcthis();}
	else
	{
	if (depo > 5000)
	  {alert ("Maximal deposit for this plan  is $50000"); document.getElementById("deposit").value = 50000; calcthis();}
	  else
	  {
	  if (depo < 500)
		{
  
		  document.getElementById("inpvar1").innerHTML = planperc[0];
		  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
		}
		else
		{
		  if (depo < 1000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[1];
			  document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
			}
			else
		{
		  if (depo < 2500)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[2];
			  document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			}
			else
		{
		  if (depo < 5000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[3];
			  document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
			}
			else
				{
		  if (depo < 10000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[4];
			  document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
			}
			else
		{
		  if (depo < 20000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[5];
			  document.getElementById("inpvar2").innerHTML = planperc[5] * depo / 100;
			}
			
			else
			{
			  document.getElementById("inpvar1").innerHTML = planperc[6];
			  document.getElementById("inpvar2").innerHTML = planperc[6] * depo / 100;
			}
		}
	  }
	}
	}
	}
	}
	}
};   

// PLAN 3 ===================================================================================================================
if (perc == "perc3")  {planperc=Array(170,190,230,320,400,470,540)
   if (depo < 20)
	{alert ("Minimal deposit for this plan is $20"); document.getElementById("deposit").value = 20; calcthis();}
	else
	{
	if (depo > 5000)
	  {alert ("Maximal deposit for this plan  is $50000"); document.getElementById("deposit").value = 50000; calcthis();}
	  else
	  {
	  if (depo < 500)
		{
  
		  document.getElementById("inpvar1").innerHTML = planperc[0];
		  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
		}
		else
		{
		  if (depo < 1000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[1];
			  document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
			}
			else
		{
		  if (depo < 2500)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[2];
			  document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			}
			else
		{
		  if (depo < 5000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[3];
			  document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
			}
			else
				{
		  if (depo < 10000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[4];
			  document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
			}
			else
		{
		  if (depo < 20000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[5];
			  document.getElementById("inpvar2").innerHTML = planperc[5] * depo / 100;
			}
			
			else
			{
			  document.getElementById("inpvar1").innerHTML = planperc[6];
			  document.getElementById("inpvar2").innerHTML = planperc[6] * depo / 100;
			}
		}
	  }
	}
	}
	}
	}
	}
};   


// PLAN 4 ===================================================================================================================
if (perc == "perc4")  {planperc=Array(320,400,540,720,850,1100,1250)
   if (depo < 20)
	{alert ("Minimal deposit for this plan is $20"); document.getElementById("deposit").value = 20; calcthis();}
	else
	{
	if (depo > 5000)
	  {alert ("Maximal deposit for this plan  is $50000"); document.getElementById("deposit").value = 50000; calcthis();}
	  else
	  {
	  if (depo < 500)
		{
  
		  document.getElementById("inpvar1").innerHTML = planperc[0];
		  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
		}
		else
		{
		  if (depo < 1000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[1];
			  document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
			}
			else
		{
		  if (depo < 2500)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[2];
			  document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			}
			else
		{
		  if (depo < 5000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[3];
			  document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
			}
			else
				{
		  if (depo < 10000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[4];
			  document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
			}
			else
		{
		  if (depo < 20000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[5];
			  document.getElementById("inpvar2").innerHTML = planperc[5] * depo / 100;
			}
			
			else
			{
			  document.getElementById("inpvar1").innerHTML = planperc[6];
			  document.getElementById("inpvar2").innerHTML = planperc[6] * depo / 100;
			}
		}
	  }
	}
	}
	}
	}
	}
};   



// PLAN 5 ===================================================================================================================
if (perc == "perc5")  {planperc=Array(1000,1500,2000,2500,3000,3500,3500)
   if (depo < 20)
	{alert ("Minimal deposit for this plan is $20"); document.getElementById("deposit").value = 20; calcthis();}
	else
	{
	if (depo > 5000)
	  {alert ("Maximal deposit for this plan  is $50000"); document.getElementById("deposit").value = 50000; calcthis();}
	  else
	  {
	  if (depo < 500)
		{
  
		  document.getElementById("inpvar1").innerHTML = planperc[0];
		  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
		}
		else
		{
		  if (depo < 1000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[1];
			  document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
			}
			else
		{
		  if (depo < 2500)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[2];
			  document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			}
			else
		{
		  if (depo < 5000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[3];
			  document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
			}
			else
				{
		  if (depo < 10000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[4];
			  document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
			}
			else
		{
		  if (depo < 20000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[5];
			  document.getElementById("inpvar2").innerHTML = planperc[5] * depo / 100;
			}
			
			else
			{
			  document.getElementById("inpvar1").innerHTML = planperc[6];
			  document.getElementById("inpvar2").innerHTML = planperc[6] * depo / 100;
			}
		}
	  }
	}
	}
	}
	}
	}
};   



// PLAN 6 ===================================================================================================================
if (perc == "perc6")  {planperc=Array(1000,1000,1000,1000,1000,1000,1000)
if (depo < 10000)
	{alert ("Minimal deposit for this plan is $10000"); document.getElementById("deposit").value = 10000; calcthis();}
	else
	{
	if (depo > 50000)
	  {alert ("Maximal deposit for this plan  is $50000"); document.getElementById("deposit").value = 50000; calcthis();}
	  else
	  {
	  if (depo < 500)
		{
  
		  document.getElementById("inpvar1").innerHTML = planperc[0];
		  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
		}
		else
		{
		  if (depo < 1000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[1];
			  document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
			}
			else
		{
		  if (depo < 2500)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[2];
			  document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			}
			else
		{
		  if (depo < 5000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[3];
			  document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
			}
			else
				{
		  if (depo < 10000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[4];
			  document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
			}
			else
		{
		  if (depo < 20000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[5];
			  document.getElementById("inpvar2").innerHTML = planperc[5] * depo / 100;
			}
			
			else
			{
			  document.getElementById("inpvar1").innerHTML = planperc[6];
			  document.getElementById("inpvar2").innerHTML = planperc[6] * depo / 100;
			}
		}
	  }
	}
	}
	}
	}
	}
};     






// PLAN 7 ===================================================================================================================
if (perc == "perc7")  {planperc=Array(3000,3000,3000,3000,3000,3000,3000)
   if (depo < 1000)
	{alert ("Minimal deposit for this plan is $1000"); document.getElementById("deposit").value = 1000; calcthis();}
	else
	{
	if (depo > 50000)
	  {alert ("Maximal deposit for this plan  is $50000"); document.getElementById("deposit").value = 50000; calcthis();}
	  else
	  {
	  if (depo < 500)
		{
  
		  document.getElementById("inpvar1").innerHTML = planperc[0];
		  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
		}
		else
		{
		  if (depo < 1000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[1];
			  document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
			}
			else
		{
		  if (depo < 2500)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[2];
			  document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			}
			else
		{
		  if (depo < 5000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[3];
			  document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
			}
			else
				{
		  if (depo < 10000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[4];
			  document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
			}
			else
		{
		  if (depo < 20000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[5];
			  document.getElementById("inpvar2").innerHTML = planperc[5] * depo / 100;
			}
			
			else
			{
			  document.getElementById("inpvar1").innerHTML = planperc[6];
			  document.getElementById("inpvar2").innerHTML = planperc[6] * depo / 100;
			}
		}
	  }
	}
	}
	}
	}
	}
};  




// PLAN 8 ===================================================================================================================
if (perc == "perc8")  {planperc=Array(5000,5000,5000,5000,5000,5000,5000)
   if (depo < 200)
	{alert ("Minimal deposit for this plan is $200"); document.getElementById("deposit").value = 200; calcthis();}
	else
	{
	if (depo > 50000)
	  {alert ("Maximal deposit for this plan  is $50000"); document.getElementById("deposit").value = 50000; calcthis();}
	  else
	  {
	  if (depo < 500)
		{
  
		  document.getElementById("inpvar1").innerHTML = planperc[0];
		  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
		}
		else
		{
		  if (depo < 1000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[1];
			  document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
			}
			else
		{
		  if (depo < 2500)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[2];
			  document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			}
			else
		{
		  if (depo < 5000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[3];
			  document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
			}
			else
				{
		  if (depo < 10000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[4];
			  document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
			}
			else
		{
		  if (depo < 20000)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[5];
			  document.getElementById("inpvar2").innerHTML = planperc[5] * depo / 100;
			}
			
			else
			{
			  document.getElementById("inpvar1").innerHTML = planperc[6];
			  document.getElementById("inpvar2").innerHTML = planperc[6] * depo / 100;
			}
		}
	  }
	}
	}
	}
	}
	}
};  




}; // function