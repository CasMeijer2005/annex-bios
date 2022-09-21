let totalTickets;

createSeats(110);

function createSeats(let) {
    let createdSeats = 0;

    const parentDiv = document.getElementById("seats");
    const parentLabel = document.getElementsByClassName("available-seat");
    
    while (createdSeats < let) {
        var newCheckbox = document.createElement("input");
        newCheckbox.setAttribute("type", 'checkbox');
        newCheckbox.setAttribute("class", 'ticket-seat')
        newCheckbox.setAttribute("id", 'ticket-seat');
        
        var newLabel = document.createElement("label");
        newLabel.setAttribute("for", 'ticket-seat');
        newLabel.setAttribute("class", 'available-seat');
        
        var newImg = document.createElement("img");
        newImg.src = "assets/img/seats/available-seat.png";
        newImg.setAttribute("onclick", 'changeImage(this)');
        
        parentDiv.appendChild(newCheckbox);
        parentDiv.appendChild(newLabel);
        for (let j = 0; j < parentLabel.length; j++) {
            parentLabel[j].appendChild(newImg);
        }
    
        createdSeats++;
    }
}


function calculatePrice() {
    let normalTickets = parseInt(document.getElementById("normal-tickets").value);
    let childTickets = parseInt(document.getElementById("child-tickets").value);
    let elderTickets = parseInt(document.getElementById("elder-tickets").value);

    let amountOfTickets = normalTickets + childTickets + elderTickets;
    totalTickets = amountOfTickets;
}

let selected = 0;

function changeImage(image) {
    //if (selected < totalTickets) {
        if (true) {
            image.src = "assets/img/seats/selected-seat.png";
            seatSelected = true;
            selected++;
        }
        else if (seatSelected) {
            image.src = "assets/img/seats/available-seat.png";
            seatSelected = false;
            selected--;
        }
    //}
    console.log(selected);
}