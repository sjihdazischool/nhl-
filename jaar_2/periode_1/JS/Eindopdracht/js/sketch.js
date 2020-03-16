var playerY = 800 - 40;
var billy;
var goRight = true;
var goLeft = false;
var gameOver = false;
var xVel = 10;
var lastHight = 0;
var floatingfloors = [];
var obstacles = [];

function Player()
{
  this.x = 5;
  this.y = 800;
  this.fillColor = 'black';
  this.strokeColor = 'white';
  this.lift = -25;
  this.gravity = 2;
  this.yVel = 0;
  this.touchingGround = true;  
  this.score = 0;
  this.firstJump = false;
  this.beginCountScore = false;

  this.show = function()
  {
    strokeWeight(2);
    stroke(this.strokeColor);
    fill(this.fillColor);
    rect( this.x, this.y, 40, 40);
  }

  this.goLeftOrRight = function()
  {
    if (billy.x == 755) 
    {
      goRight = false;
      goLeft = true;
    }
    else if(billy.x == 5)
    {
      goRight = true;
      goLeft = false;
    }
  }

  this.jump = function()
  {
    if (this.yVel == 0 && !billy.y == !height) 
    {
      this.firstJump = true;
      this.yVel += this.lift;
    }
  }   

  this.gravityAferFirstJump = function()
  {
    if (this.firstJump == false)
    {
      if (this.y > height - 47) {
        this.y = height - 47;
        this.yVel = 0;
      }
    }
    else if (this.firstJump)
    {
      this.beginCountScore = true;
      if (this.y > height + 10) {
        this.y = height + 60;
        this.yVel = 0;
      }
    }
  }

  this.startScoreCount = function()
  {
    if (this.beginCountScore && gameOver == false)
    {
      //berekent de huidige score per frame
      if (frameCount % 2  == 0) 
      {
        this.score += 1;
      }
    }
  }

  this.update = function()
  {
    this.yVel += this.gravity;
    this.y += this.yVel;
    // zorgt voor air resistance tijdens het springen
    this.yVel *= 1;
    this.gravityAferFirstJump();
    if (this.y < -40) {show
      this.y = 0;
      this.yVel = 0;
    }
    this.goLeftOrRight();
    if (goRight) 
    {
      this.x += xVel;
    }
    else if(goLeft)
    {
      this.x -= xVel;
    }
    if (this.y == height + 60)
    {
      gameOver = true;
    }
    this.startScoreCount();
  }
}

function Groundfloor()
{
  this.x = width;
  this.y = height;
  this.groundColor = 'red';

  this.show = function()
  {
    fill('red');
    rect(0, 795, this.x, 5);
  }

  this.update = function()
  {
    if (billy.firstJump) 
    {
      noStroke();
      this.groundColor = 'black';
      fill('black');
      rect(6, 794, this.x - 12, 6);
    }
  }
}

function Obstacle()
{
  this.width = 10;
  this.height = 10;
  this.y = 0;
  this.speed = 1.5;
  this.platformDistance = random(width/2);

  this.offscreen = function()
  {
    if (this.y > +height) 
    {
      return true
    }
    else
    {
      return false;
    }
  }

  this.hit = function()
  {
    if (billy.x > this.platformDistance - 40 && billy.x < this.platformDistance + this.width) 
    {
      if (billy.y > this.y - 40 && billy.y < this.y)
      {
        gameOver = true;
      }
    }
  }

  this.show = function()
  {
    stroke("white");
    fill("red");
    rect(this.platformDistance, this.y, this.width, this.height);
  }

  this.update = function()
  {
    this.y += this.speed;
  }
}

function Floatingfloor()
{
  // this.middle = random(width/2);
  this.x = 400;
  this.y = 0;
  this.speed = 2;
  this.randomColor = color(random(255),random(255),random(255));
  this.platformDistance = random(width/2);

  this.show = function()
  {
    noStroke();
    fill(this.randomColor);
    rect(this.platformDistance, this.y, this.x, 9);
  }

  this.offscreen = function()
  {
    if (this.y > +height) 
    {
      return true
    }
    else
    {
      return false;
    }
  }

  this.hit = function()
  {
    if(lastHight < billy.yVel) 
    {
      if (billy.x > this.platformDistance - 40 && billy.x < this.platformDistance + this.x) 
      {
        if (billy.y > this.y - 40 && billy.y < this.y)
        {
          billy.yVel = 0;
          billy.y = this.y - 39;
        }
      }
    }
  }

  this.update = function()
  {
    this.y += this.speed;
  }
}

function resetSketch()
{
  gameOver = false;
  billy.y = 100;
  billy.firstJump = false;
  billy.beginCountScore = false;
  billy.score = 0;
  floatingfloors = [];
  obstacles = [];
  billy.fillColor = 'black';
  document.getElementById("myModal").style.display = "none";
}

function setup() 
{
  createCanvas(800,800);
  frameRate(60);
  billy = new Player();
  groundfloor = new Groundfloor();
  floatingfloors.push(new Floatingfloor());
  obstacles.push(new Obstacle());
  resetSketch();
}

function draw() 
{
  if(!gameOver)
  {
    clear(); 
    if (keyIsDown(32)) 
    {
      billy.jump();
    }
    background("black");
    noStroke();
    fill('white');
    textSize(30);
    text('score: '+billy.score, 10, 30);
    stroke("red");
    fill("red");
    rect(0, 0, 5, height);
    rect(width-5, 0, 5, height);
    groundfloor.show();
    billy.update();
    groundfloor.update();



    if (frameCount % 35  == 0) 
    {
      floatingfloors.push(new Floatingfloor());
    }

    for (var i = floatingfloors.length-1; i >= 0; i--) 
    {
      floatingfloors[i].show();
      floatingfloors[i].hit();
      floatingfloors[i].update();
      if (floatingfloors[i].offscreen()) 
      {
        floatingfloors.splice(i, 1);
      }
    }
    if (billy.score > 150) 
    {
      if (frameCount % 200  == 0) 
      {
        obstacles.push(new Obstacle());
      }

      for (var i = obstacles.length-1; i >= 0; i--) 
      {
        obstacles[i].show();
        obstacles[i].hit();
        obstacles[i].update();
        if (obstacles[i].offscreen()) 
        {
          obstacles.splice(i, 1);
        }
      }

    }
    if (billy.score > 100) 
    {
      if (frameCount % 25  == 0) 
      {
        billy.fillColor = color(random(255),random(255),random(255));
      }
    }
    billy.show();
  }
  else if(gameOver)
  {
    document.getElementById("myModal").style.display = "inline-block";
    background("black");
    if (frameCount % 35  == 0) 
    {
      floatingfloors.push(new Floatingfloor());
    }

    for (var i = floatingfloors.length-1; i >= 0; i--) 
    {
      floatingfloors[i].show();
      floatingfloors[i].hit();
      floatingfloors[i].update();
      if (floatingfloors[i].offscreen()) 
      {
        floatingfloors.splice(i, 1);
      }
    }
    noStroke();
    fill("white");
    textSize(40);
    text('Game Over', 278, 100);
    textSize(20);
    text('your score: '+billy.score, 323, 400);
  }
}