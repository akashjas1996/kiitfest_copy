

window.onload = () => {
  (() => {
    const deadlineDate = new Date('February 14, 2019 23:59:59').getTime();
    const countdownDays = document.querySelector('.countdown__days .number');
    const countdownHours = document.querySelector('.countdown__hours .number');
    const countdownMinutes = document.querySelector(
      '.countdown__minutes .number',
    );
    const countdownSeconds = document.querySelector(
      '.countdown__seconds .number',
    );

   

    setInterval(() => {
      const currentDate = new Date().getTime();
    const distance = deadlineDate - currentDate;
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor(
      (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60),
    );
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);
    countdownDays.innerHTML = days;
    countdownHours.innerHTML = hours;
    countdownMinutes.innerHTML = minutes;
    countdownSeconds.innerHTML = seconds;
    }, 1000);
  })();

  const ham = document.querySelector('.hamburger');
  const l1 = ham.querySelector('.l1');
  const l2 = ham.querySelector('.l2');
  const l3 = ham.querySelector('.l3');
  var navbar = document.querySelector(".myNav");
  var navButtons = document.querySelectorAll(".nav-button");
  var topLeftLogo = document.querySelector(".header .logo");
  var header = document.querySelector(".header");
  var home = document.querySelector('#home');
  var about = document.querySelector('#about');
  var aboutPos = about.getBoundingClientRect().y;
  var events = document.querySelector('#events');
  var contactUs = document.querySelector('#contactUs');
  var expandButton = document.querySelector(".expand");
  var tint = document.querySelector('#tint');
  var blackTint = document.querySelector('#blackTint');
  const tl = new TimelineLite({paused: true, reversed: true});

  tl
    .to(l2, 0.15, {scaleX: 0, transformOrigin: "middle" })
    .to(l1, 0.15, {y: 17},"start")
    .to(l3, 0.15, {y: -17}, "start")
    .to(l1, 0.2, {rotation: 45, transformOrigin: "middle",  ease: Power3.easeOut}, "rotation")
    .to(l3, 0.2, {rotation: -45, transformOrigin: "middle",  ease: Power3.easeOut}, "rotation");

  //Set topLeftLogo based on page starting location
  (() => {
    if(aboutPos <= 50) {
      topLeftLogo.classList.add("logo-visible");
      header.classList.add("header-scrolled");
    };

    navButtons.forEach(button => button.addEventListener("click", () => {
      navbar.classList.remove("expanded");
      tl.reversed() ? tl.play() : tl.reverse();
    }));
  })();

  //Hamburger click event
  expandButton.addEventListener("click", () => {

    tl.reversed() ? tl.play() : tl.reverse();

    if(navbar.classList.contains("expanded")) {
      navbar.classList.remove("expanded");
      if(aboutPos > 51) topLeftLogo.classList.remove("logo-visible");
    } else {
      navbar.classList.add("expanded");
      topLeftLogo.classList.add("logo-visible");
    }
    
  });



  window.onscroll =  () => {
    className = tint.classList[1];

    //get distance of each section from top of viewport
    var homePos = home.getBoundingClientRect().y;
    aboutPos = about.getBoundingClientRect().y;
    var eventsPos = events.getBoundingClientRect().y;
    var contactUsPos = contactUs.getBoundingClientRect().y;
    // Find shortest distance section index 
    var counts = [homePos, aboutPos, eventsPos, contactUsPos ];
    var closest = counts.reduce(function(prev, curr) {
      return (Math.abs(curr - 0) < Math.abs(prev - 0) ? curr : prev);
    });
    var index = counts.indexOf(closest);


    //Hide logo and black tint if outside #home
    if (aboutPos <= 50) {
      topLeftLogo.classList.add('logo-visible');
      blackTint.classList.remove('black');
      blackTint.classList.add('none');
      header.classList.add('header-scrolled');
    } else {
      topLeftLogo.classList.remove('logo-visible');
      blackTint.classList.add('black');
      blackTint.classList.remove('none');
      header.classList.remove('header-scrolled');

    }

    //Tint based on which section is most dominant on viewport
    if(index == 0) {
      tint.classList.remove(className);
      tint.classList.add("home");
    }
    if(index == 1) {
      tint.classList.remove(className);
      tint.classList.add("about");
    }
    if(index == 2) {
      tint.classList.remove(className);
      tint.classList.add("events");
    }
    if(index == 3) {
      tint.classList.remove(className);
      tint.classList.add("contactUs");
    }
  };
};

