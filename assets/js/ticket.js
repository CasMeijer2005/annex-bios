let totalTickets;

createSeats(110);

function createSeats(let) {
    let createdSeats = 0;

    const parentDiv = document.getElementById("seats");
    const parentLabel = document.getElementsByClassName("available-seat");
    
    while (createdSeats < let) {
        const newCheckbox = document.createElement("input");
        newCheckbox.setAttribute("type", 'checkbox');
        newCheckbox.setAttribute("class", 'ticket-seat')
        newCheckbox.setAttribute("id", 'ticket-seat');
        
        const newLabel = document.createElement("label");
        newLabel.setAttribute("for", 'ticket-seat');
        newLabel.setAttribute("class", 'available-seat');
        
        const newImg = document.createElement("img");
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

function calculateTickets() {
    let normalTickets = parseInt(document.getElementById("normal-tickets").value);
    let childTickets = parseInt(document.getElementById("child-tickets").value);
    let elderTickets = parseInt(document.getElementById("elder-tickets").value);

    let amountOfTickets = normalTickets + childTickets + elderTickets;
    totalTickets = amountOfTickets;
}

let selected = 0;

function changeImage(image) {
    if (image.getAttribute('src') != "assets/img/seats/occupied-seat.png") {
        if (selected < totalTickets && image.getAttribute("src") === "assets/img/seats/available-seat.png") {
            image.src = "assets/img/seats/selected-seat.png";
            selected++;
        }
        else if (selected != 0 && image.getAttribute("src") === "assets/img/seats/selected-seat.png") {
            image.src = "assets/img/seats/available-seat.png";
            selected--; 
        }
    }
}