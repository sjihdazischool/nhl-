function a()
{
	class leerling
	{
		constructor(naam, leerlingnr)
		{
			this.naam = naam;
			this.leerlingnr = leerlingnr;
		}
	}

	class lokaal
	{
		constructor(lokaalnr)
		{
			this.lokaalnr = lokaalnr;
		}
	}

	class afdeling
	{
		constructor(afdelingnaam)
		{
			this.afdelingnaam = afdelingnaam;
		}
	}

	class school{
		constructor(schoolnaam, leerling, lokaal, afdeling)
		{
			this.schoolnaam = schoolnaam;
			this.leerling = leerling;
			this.lokaal = lokaal;
			this.afdeling = afdeling;
		}

		getschoolInEmmen()
		{
			return this.leerling.naam;
		}
	}

	var Leerling = new leerling("ruben", "1");
	var Lokaal = new lokaal("1");
	var Afdeling = new afdeling("a");
	var School = new school("HNLstneden", Leerling, Lokaal, Afdeling);

	console.log(School);
	document.getElementById("demo").innerHTML = School.getschoolInEmmen();
}


class calculator
{
	
	plus(num1,num2)	{
		console.log(num1 + num2);
	}

	min(num1,num2)
	{
		console.log(num1 - num2);
	}

	delen(num1,num2)
	{
		console.log(num1 / num2);
	}

	vermenigvuldig(num1,num2)
	{
		console.log(num1 * num2);
	}

	root(num1)
	{
		console.log(Math.sqrt(num1));
	}

	pow(num1,num2)
	{
		console.log(Math.pow(num1,num2));
	}
}
function c()
{
	var text1 = document.getElementById("text1").value;
	var text2 = document.getElementById("text2").value;

	document.write(text1 + text2);
}


function d()
{
	var word = "bottles";
	for (var i = 99 - 1; i >= 0; i--)
	{
		if (i > 0 && i < 2)
		{
			var word = "bottle";
		}
		if (i != 0)
		{
			document.write("<p>");
			document.write(i + " " + word + " of beer on the wall,");
	    	document.write(i + " " + word + " of beer,");
	    	document.write("Take 1 down, pass it around, ");
	    	if (i - 1 == 1)
	    	{
	    		var word = "bottle";
	    	}
	    	else if(i - 1 == 2 || i - 1 == 0)
	    	{
				var word = "bottles";
	    	}
	    	document.write(i - 1 + " " + word + " of beer on the wall.");
	    	document.write("</p>");
		}
		else
		{
			document.write("<p>");
			document.write("No more bottles of beer on the wall, no more bottles of beer.");
			document.write("Go to the store and buy some more, 99 bottles of beer on the wall.");
	    	document.write("</p>");
		}
		
	}
}


function e(str) 
{
	var re = /[\W_]/g;
 	var lowRegStr = str.toLowerCase().replace(re, '');
  	var reverseStr = lowRegStr.split('').reverse().join(''); 
  	return reverseStr === lowRegStr;
}


function f()
{
    var letters = [ ' ', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0' ];
    var morseLetters = [ "\xa0\xa0\xa0\xa0", ". ___", "___ . . .", "___ . ___ .", "___ . .", ".", ". . ___ .", "___ ___ .", ". . . .", ". .", ". ___ ___ ___", "___ . ___", ". ___ . .",  "___ ___", "___ .", "___ ___ ___", ". ___ ___ .", "___ ___ . ___", ". ___ .", ". . .", "_", ". . ___", ". . . ___", ". ___ ___", "___ . . ___", "___ . ___ ___", "___ ___ . .", ". ___ ___ ___ ___", ". . ___ ___ ___", ". . . ___ ___", ". . . . ___", ". . . . .", "___ . . . .", "___ ___ . . .", "___ ___ ___ . .", "___ ___ ___ ___ .", "___ ___ ___ ___ ___" ];
    
    var textToChange = document.getElementById("textToConvert").value;
    var newText = "";
    for (var i = 0; i < textToChange.length; i++) {
        for (var j = 0; j < 37; j++) {
            if (textToChange[i].toLowerCase() == letters[j]) {
                newText += morseLetters[j];
                newText += "\xa0\xa0\xa0";
                break;
            }    
        }
    }
	document.getElementById("newText").innerHTML = newText;
}