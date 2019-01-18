departments = document.querySelectorAll('.department');
events = $('.events');
eventContent = $('.eventContent');

var eventDetails = {
    "event1": "<b>Bold text works!</b> <i>So does italics</i> industry. <ul><li>Lorem</li> <li>Ipsum</li> has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
    "event2": "100% Different Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
    "event3": "Totally Different Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
    
}

departments.forEach( department => 
    department.addEventListener('click', () => {
        var active = $('.deptActive')[0];
        if (active) {
            active.classList.remove('deptActive');
            active.nextElementSibling.style.height = 0;
        }

        var content = department.nextElementSibling;
        if (content.style.height) {
          content.style.height = null;
          department.classList.remove('deptActive');
        } else {
          content.style.height = content.scrollHeight + "px";
          department.classList.add('deptActive');
        }
    })
);

events.each(function (index) {
    $(this).click(() => {
        eventContent.transition({y: 40, opacity: 0}, 'slow', () => {
            eventContent.html(eventDetails[events[index].id]);
            eventContent.transition({y: 0, opacity: 1}, 'slow');
        })
    });
})