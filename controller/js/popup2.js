$ = function (id) {
    return document.getElementById(id);
}

var cards = [
    {
        imageURL: "view/img/mercury.jpg",
        name: "Mercury",
        price: "$40.00 - $80.00",
        rating: 4,
        description: "Description",
        descOne: "Surface: 74'800'000 km²",
        descTwo: "Day Duration: 58d 15 h 30 min"
    },
    {
        imageURL: "view/img/venus.jpg",
        name: "Venus",
        price: "$18.00",
        rating: 3,
        salePrice: "$50.00",
        description: "Description",
        descOne: "Surface: 74'800'000 km²",
        descTwo: "Day Duration: 58d 15 h 30 min"
    },
    {
        imageURL: "view/img/earth.jpg",
        soldout: true,
        name: "Earth",
        price: "$25.00",
        salePrice: "$50.00",
        description: "Description",
        descOne: "Surface: 74'800'000 km²",
        descTwo: "Day Duration: 58d 15 h 30 min"
    },
    {
        imageURL: "view/img/mars.jpg",
        name: "Mars",
        price: "$40.00",
        rating: 5,
        description: "Description",
        descOne: "Surface: 74'800'000 km²",
        descTwo: "Day Duration: 58d 15 h 30 min"
    },
    {
        imageURL: "view/img/jupiter.jpg",
        name: "Jupiter",
        price: "$25.00",
        rating: 3,
        salePrice: "$50.00",
        description: "Description",
        descOne: "Surface: 74'800'000 km²",
        descTwo: "Day Duration: 58d 15 h 30 min"
    },
    {
        imageURL: "view/img/saturn.jpg",
        name: "Saturn",
        price: "$120.00 - $280.00",
        rating: 5,
        description: "Description",
        descOne: "Surface: 74'800'000 km²",
        descTwo: "Day Duration: 58d 15 h 30 min"
    },
    {
        imageURL: "view/img/uranus.jpg",
        name: "Uranus",
        price: "$18.00",
        rating: 2,
        salePrice: "$20.00",
        description: "Description",
        descOne: "Surface: 74'800'000 km²",
        descTwo: "Day Duration: 58d 15 h 30 min"
    },
    {
        imageURL: "view/img/neptune.jpg",
        name: "Neptune",
        price: "$40.00",
        rating: 5,
        description: "Description",
        descOne: "Surface: 74'800'000 km²",
        descTwo: "Day Duration: 58d 15 h 30 min"
    }
]

var currentCard = null;

function show(id) {
    const parent = document.getElementById(id);
    parent.style.display = 'block';
    var div = document.getElementById("lmaolol")
    div.innerHTML = "";

    var img = document.createElement('img')
    img.src = currentCard.imageURL;
    img.className = "popupcard-img"

    var popContainer = document.createElement('div')
    popContainer.className = "text-white popContainer";
    var text = document.createElement('h1')
    text.innerHTML = currentCard.name;
    text.className = "text-light popTitle"

    var popElements = document.createElement('div')
    popElements.className = "text-white popElements";
    var desc = document.createElement('ul')
    desc.innerHTML = currentCard.description;
    desc.className = "text-light popDescTitle";
    var descOne = document.createElement('li')
    descOne.innerHTML = currentCard.descOne;
    descOne.className = "text-light popDesc"

    var descTwo = document.createElement('li')
    descTwo.innerHTML = currentCard.descTwo;
    descTwo.className = "text-light popDesc"

    var price = document.createElement('li')
    price.innerHTML = currentCard.price;
    price.className = "text-light popDesc"
    

    div.appendChild(img);
    div.appendChild(popContainer);
    popContainer.appendChild(text);
    div.appendChild(popElements);
    popElements.appendChild(desc);
    popElements.appendChild(descOne);
    popElements.appendChild(descTwo);
    popElements.appendChild(price);
}

var hide = function (id) {
    $(id).style.display = 'none';
}

cards.map((card, index) => {
    var cardContainer = document.createElement("div")
    cardContainer.className = "col mb-5";

    var cardElement = document.createElement("div")
    cardElement.className = "card bg-transparent text-white h-100";

    if (card.soldout !== undefined) {
        cardElement.className += " nohover"
    }
    
    var img = document.createElement("img")
    img.src = card.imageURL;

    if (card.soldout !== undefined) {
        img.className = "img-one"
        var soldoutImg = document.createElement("img")
        soldoutImg.src = "view/img/soldout.png"
        soldoutImg.className = " card-img-top img-two"
        cardElement.appendChild(img)
        cardElement.appendChild(soldoutImg)
    } else {
        cardElement.appendChild(img)
    }


    var cardBody = document.createElement("div")
    cardBody.className = "card-body p-4 text-center";

    var cardTitle = document.createElement("h5")
    cardTitle.innerHTML = card.name;
    cardBody.appendChild(cardTitle);

    var ratingContainer = document.createElement("div")
    ratingContainer.className = "d-flex justify-content-center small text-warning mb-2"
    for (let i = 0; i < card.rating; i++) {
        var starRating = document.createElement("div")
        starRating.className = "bi-star-fill"
        ratingContainer.appendChild(starRating)
    }
    cardBody.appendChild(ratingContainer)

    if (card.salePrice !== undefined) {
        var salePrice = document.createElement("span")
        salePrice.className = "text-muted text-decoration-line-through"
        salePrice.innerHTML = card.salePrice;
        cardBody.appendChild(salePrice)
    }

    var price = document.createElement("p")
    price.innerHTML = card.price;

    if (card.salePrice !== undefined) {
        price.style.display = "inline-block"
        price.style.marginLeft = "10px"
    }

    cardBody.appendChild(price);
    cardElement.appendChild(cardBody);

    var btnContainer = document.createElement("div")
    btnContainer.className = "card-footer p-4 pt-0 border-top-0 bg-transparent text-center";

    var btn = document.createElement("button")
    btn.className = "btn mt-auto "

    if (card.soldout !== undefined) {
        btn.className += "btn-outline-danger"
    } else {
        btn.className += "btn-outline-light"
    }

    btn.innerHTML = "Add to cart";
    btn.onclick = function  () {
        currentCard = card;
        show('popup')
        console.log(currentCard)
    }
    btnContainer.appendChild(btn)
    cardElement.appendChild(btnContainer)

    cardContainer.appendChild(cardElement)

    var parent = document.getElementById('listlmao')
    if (parent == null) {
        console.log('test')
    }

    parent.appendChild(cardContainer)
})

var slider = document.getElementById("rangeSlider");
var output = document.getElementById("rangeValue");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
  output.innerHTML = this.value;
}