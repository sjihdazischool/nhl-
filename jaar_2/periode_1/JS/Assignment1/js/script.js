function a()
{
	var hello = "Hello World!";
	document.write(hello);
}

function b()
{
	var value1 = document.getElementById("value1").value;
	var value2 = document.getElementById("value2").value;

	document.write("<p>",value1," + ",value2," = ",parseInt(value1,10)  + parseInt(value2,10),"</p>");
	document.write("<p>",value1," * ",value2," = ",value1 * value2,"</p>");
	document.write("<p>",value1," / ",value2," = ",value1 / value2,"</p>");
}

function c()
{
	var text1 = document.getElementById("text1").value;
	var text2 = document.getElementById("text2").value;

	document.write(text1 + text2);
}

var boodschappenlijst = ["kaas", "melk", "appels", "sap", "brood", "tomaat", "suiker", "playboy", "kiwi", "peer"];
function d()
{
	
	var items = "";

	for (var i = 0; i < boodschappenlijst.length; i++) { 
	  items += '<p> <input id="' + i + '" name="' + boodschappenlijst[i] + '" value="' + boodschappenlijst[i] + '" type="text"></p>';
	} 
	document.getElementById("boodschappen").innerHTML += items;
}

function change()
{
	var actual = document.getElementById("number").value - 1;
	var start_index = actual;
	var item = document.getElementById("new_item").value;
	var number_of_elements_to_remove = 1;
	boodschappenlijst.splice(start_index, number_of_elements_to_remove, item);

	document.getElementById(actual).value = item;
}