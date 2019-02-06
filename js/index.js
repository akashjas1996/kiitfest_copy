

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

var close = document.querySelector(".close");
var popup = document.querySelector(".popup");
close.addEventListener("click", () => popup.classList.add("remove"));

  var header = document.querySelector(".header");
  var home = document.querySelector('#home');
  var about = document.querySelector('#about');
  var aboutPos = about.getBoundingClientRect().y;
  var events = document.querySelector('#events');
  var contactUs = document.querySelector('#contactUs');
 
  var tint = document.querySelector('#tint');
  var blackTint = document.querySelector('#blackTint');

  navButtons.forEach(button => button.addEventListener("click", () => {
    navbar.classList.remove("expanded");
    tl.reversed() ? tl.play() : tl.reverse();
  }));


  window.onscroll =  () => {
    aboutPos = about.getBoundingClientRect().y;


    var homePos = home.getBoundingClientRect().y;
    var eventsPos = events.getBoundingClientRect().y;
    var contactUsPos = contactUs.getBoundingClientRect().y;


    //Toggle black tint
    if (aboutPos <= 50) {
      blackTint.classList.remove('black');
      blackTint.classList.add('none');
      header.classList.add('header-scrolled');
    } else {
      blackTint.classList.add('black');
      blackTint.classList.remove('none');
      header.classList.remove('header-scrolled');
    }


    //currentTint
    className = tint.classList[1];
    //Tint based on which section is most dominant on viewport
    if(homePos < 50 && homePos > -50 ) {
      tint.classList.remove(className);
      tint.classList.add("home");
    }
    if(aboutPos < 50 && aboutPos > -50) {
      tint.classList.remove(className);
      tint.classList.add("about");
    }
    if(eventsPos < 50 && eventsPos > -50) {
      tint.classList.remove(className);
      tint.classList.add("events");
    }
    if(contactUsPos < 50 && contactUsPos > -50) {
      tint.classList.remove(className);
      tint.classList.add("contactUs");
    }

  };
};

