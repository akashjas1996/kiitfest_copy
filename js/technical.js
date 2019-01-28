departments = document.querySelectorAll('.department');
eventNamesSelector = $('.eventNames');
deptNames = $('.deptNames');
eventContent = $('.eventContent');

const mq = window.matchMedia("(max-width: 768px)");


departments.forEach( department =>
    department.addEventListener('click', () => {
        innerHTML = eventNamesHTML(department);
        eventNamesSelector.html(innerHTML);

        deptNames.transition({x: "-100%", opacity: 0}, 300, 'ease');
        eventNamesSelector.transition({x: 0, opacity: 1, delay: 125}, 300, 'ease');

        events = $('.eventNames > div');

        events.each(function () {
            if($(this).attr('id') !== '000')
                $(this).click(() => {
                    if(mq.matches) {
                        content = eventDetails[$(this).attr('id')];
                        content += `<h1 class="closeButton">Back</h1>`;
                        eventContent.html(content);
                        toggleModal();
                        $('.closeButton').click(toggleModal);
                    } else {
                        eventContent.transition({y: 40, opacity: 0}, 300, () => {
                            eventContent.html(eventDetails[$(this).attr('id')]);
                            eventContent.transition({y: 0, opacity: 1}, 300);
                        });
                    };
                });
        });

        back = $('.backButton');
        back.click(() => {
            eventNamesSelector.transition({x: "100%", opacity: 0}, 300, 'ease');
            deptNames.transition({x: 0, opacity: 1, delay: 125}, 300, 'ease')
        });
    })
);

var modal = document.querySelector(".modal");
function toggleModal() {
    modal.classList.toggle("show-modal");
};

function windowOnClick(event) {
    if (event.target === modal)
        toggleModal();
};

window.addEventListener("click", windowOnClick);


function addToCart(id) {
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


function eventNamesHTML(department) {
    var eventNamesString = "";
    var id = Number(department.id);
    var eventNo = id % 10;
    id -= eventNo;

    for(let i = 1; i <= eventNo; i++) {
        eventNamesString += `<div id="${id + i}"><span>${eventNames[id + i]}</span>`;
        if(isLogin == 1) 
            eventNamesString += `<span onClick=addToCart(${id + i}) class="addEvent"><i class="fas fa-plus-circle fa-xs"></i></span>`;
        eventNamesString += "</div>";
    }

    eventNamesString += `<div id="000" class="backButton"><span><i class="fas fa-arrow-left fa-xs"></i></span><span>Back</span></div>`;

    return eventNamesString;
}
