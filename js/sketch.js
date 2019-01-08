//Variables
let size = 70;
let count;
let randomFactor = 1.5;
let range = 1;

let stars = [];

function setup() {
  count = windowWidth < 1000 ? 20 : size;
  canvas = createCanvas(windowWidth, windowHeight);
  canvas.position(0, 0);
//  canvas.style('z-index', '-100');
 // canvas.style('position', 'absolute');

  for (let i = 0; i < count; i++) stars[i] = new Star();
}

function windowResized() {
  resizeCanvas(windowWidth, windowHeight);
}

function draw() {
  background(30);
  strokeWeight(1.5);

  for (let i = 0; i < count; i++) {
    let chance = random(0, 5000);
    if (chance < 10) stars[i].blink = true;
    stars[i].randMove();
    stars[i].display();
    for (let j = i; j < count; j++) {
      let distance = dist(stars[i].x, stars[i].y, stars[j].x, stars[j].y);
      if (distance < 255) {
        stroke(244, 244, 244, 255 - distance);
        line(stars[i].x, stars[i].y, stars[j].x, stars[j].y);
      }
    }
  }
}

function Star() {
  let urangeX = windowWidth * range;
  let urangeY = windowHeight * range;
  let rangeX = windowWidth * (1 - range);
  let rangeY = windowHeight * (1 - range);
  this.k = 5;
  this.blink = false;
  this.x = random(rangeX, urangeX);
  this.y = random(rangeY, urangeY);
  this.z = 0;
  this.circleSize = random(10, 50);
  let chance = random(0, 1);


  this.randomX = random(-randomFactor, randomFactor);
  this.randomY = random(-randomFactor, randomFactor);

  this.randMove = () => {
    this.x += this.randomX;
    this.y += this.randomY;

    if (
      this.x >= urangeX ||
      this.y >= urangeY ||
      this.x <= rangeX ||
      this.y <= rangeY
    ) {
      this.randomX *= -1;
      this.randomY *= -1;
    }
    this.glow();
  };

  this.glow = () => {
    if (this.z > this.circleSize) {
      this.z = 0;
      this.blink = false;
    }
    if (this.blink) {
      noStroke();
      if (chance > 0.5)
        fill(50, 70, 150, 255 - map(this.z, 0, this.circleSize, 0, 255));
      else fill(150, 30, 100, 255 - map(this.z, 0, this.circleSize, 0, 255));
      ellipse(this.x, this.y, this.k + this.z, this.k + this.z);
      this.z++;
    }
  };

  this.display = () => {
    noStroke();
    if (chance > 0.5) fill(50, 70, 150, 255);
    else fill(150, 30, 100, 255);
    // ellipse(this.x, this.y, this.k, this.k);
  };
}
