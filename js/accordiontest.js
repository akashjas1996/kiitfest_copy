departments = document.querySelectorAll('.department');
events = $('.events');
eventContent = $('.eventContent');

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
            eventContent.html(eventDetails[events[index].id] + 
                `<?php
                    if($sql->isLogin() == 1) {
                        echo '<button onClick=addToCart(${events[index].id}) class="event-button center"> Participate !</button>';
                    }
                ?>`);
            eventContent.transition({y: 0, opacity: 1}, 'slow');
        })
    });
})