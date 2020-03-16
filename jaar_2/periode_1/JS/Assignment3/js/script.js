function fibonacci(num){
  var a = 1, b = 0, temp;

  while (num >= 0){
    temp = a;
    a = a + b;
    b = temp;
    num--;
    console.log(b);
  }
} 

class hangMan
{
	constructor()
	{
		this.alphabetArray = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
		this.hiddenWordArray = [];
		this.errorCount = 0;
		document.getElementById("image").innerHTML = "<img id='imgHangman' src='images/hangman"+this.errorCount+".png'>"
		this.alphabetArray.forEach(function(item){
			document.getElementById("alphabet").innerHTML += "<button value='"+item+"' name='"+item+"' class='alphabet' id='"+item+"' type='submit' onclick='hangMan1.checkGuess(this.id)'>"+item+"</button>";
		});
		document.getElementById("alphabet").setAttribute("style","display: none;");
	}

	setWord()
	{
		if (document.getElementById("textInput").value < 1)
		{
			document.write("voer een woord in")
		}
		else
		{
			document.getElementById("alphabet").setAttribute("style","display: block;");
			var word = document.getElementById("textInput").value;
			this.wordArray = word.split("");
			for (var i = this.wordArray.length; i > 0; i--) {
				this.hiddenWordArray.push(" _ ");
			}
			console.log(this.hiddenWordArray);
			document.getElementById("hiddenword").innerHTML = this.hiddenWordArray;
			document.getElementById("textInput").value = "";
		}		
	}

	checkGuess(buttonLetter)
	{
		if (this.wordArray.includes(buttonLetter))
		{
			//zoekt de indexes van de goed geraden letters
			var i = this.wordArray.indexOf(buttonLetter),
			indexes = [];
			while (i !== -1) 
			{
				indexes.push(i);
				i = this.wordArray.indexOf(buttonLetter, ++i);
			}

			//vervangt de underscores met goed geraden letters in de array toe en laat die zien
			indexes.forEach(function(item)
			{
				this[item] = " "+buttonLetter+" ";
			}, this.hiddenWordArray);
			document.getElementById("hiddenword").innerHTML = this.hiddenWordArray;

			//check voor winnaar
			if (!this.hiddenWordArray.includes(" _ "))
			{
				document.write("winnaar!");
			}
		}
		else
		{
			//check voor gameover of niet
			if (this.errorCount < 6)
			{
				this.errorCount++;
				console.log(this.errorCount);
			}
			else
			{
				document.write('gameover!');
			}
			document.getElementById("image").innerHTML = "<img id='imgHangman' src='images/hangman"+this.errorCount+".png'>"
		}
	}
}
var hangMan1 = new hangMan();
