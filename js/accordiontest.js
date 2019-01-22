departments = document.querySelectorAll('.department');
events = $('.events > div > span');
id = $('.events > div');
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
            eventContent.html(eventDetails[id[index].id]);
            eventContent.transition({y: 0, opacity: 1}, 'slow');
        })
    });
})

function addToCart(id) {
    console.log(id);
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            console.log("Hello");
            //changecart value

        }
    }
    xhr.open("POST", "events/addToCart.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("itemId="+id);
    swal("Congratulations!", "Sucessfuly Add To Cart", "success");
}