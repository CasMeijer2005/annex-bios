let amountOfSeats = 110;
let createdSeats = 0;

while (createdSeats < amountOfSeats) {
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
    
    document.bodu.appendChild(newCheckbox);
    document.body.appendChild(newLabel);
    document.body.appendChild(newImg);

    createdSeats++;
}

let seatSelected = false;

function changeImage(image) {
    if (!seatSelected) {
        image.src = "assets/img/seats/selected-seat.png";
        seatSelected = true;
    }
    else {
        image.src = "assets/img/seats/available-seat.png";
        seatSelected = false;
    }
}