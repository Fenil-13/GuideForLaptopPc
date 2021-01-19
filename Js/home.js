console.log("Running home.js");


//click on carousel-item categary
let carousel_item = document.getElementsByClassName("carousel-item");
Array.from(carousel_item).forEach(element => {

    element.addEventListener('click', function () {
        window.open(`itemDetails.php?product_id=${element.id}`, "_blank");
    })
});


// click on laptop section
let homeLaptop = document.getElementById("homeLaptop");
homeLaptop.addEventListener('click', function () {
    window.open('laptop.php', '_blank');
});


//click on laptop sub categary
let cattopicLaptop = document.getElementsByClassName("cattopicLaptop");
Array.from(cattopicLaptop).forEach(element => {

    element.addEventListener('click', function () {
        window.open('laptop.php', '_blank');
    })
});


// click on Accessories section
let homeAccessories = document.getElementById("homeAccessories");
homeAccessories.addEventListener('click', function () {
    window.open('Accessories.php', '_blank');
});

//click on Accessories sub categary
let cattopicAccessories = document.getElementsByClassName("cattopicAccessories");
Array.from(cattopicAccessories).forEach(element => {

    element.addEventListener('click', function () {
        window.open('Accessories.php', '_blank');
    })
});

// click on Gaming section
let homeGaming = document.getElementById("homeGaming");
homeGaming.addEventListener('click', function () {
    window.open('gaming.php', '_blank');
});

//click on Gaming sub categary
let cattopicGaming = document.getElementsByClassName("cattopicGaming");
Array.from(cattopicGaming).forEach(element => {
    element.addEventListener('click', function () {
        window.open('gaming.php', '_blank');
    })
});

// click on tips section

let tipHome = document.getElementById("tipHome");
tipHome.addEventListener('click', function () {
    window.open('tips.php', '_blank');
});




//click on Gaming tips categary
let tipCard = document.getElementsByClassName("tipCard");
let count = 0;
Array.from(tipCard).forEach(element => {
    count++;
    element.addEventListener('click', function () {
        window.open(`tipsDetails.php?Tip_No=${count}`, '_blank');

    })
});

//click on item
let homeItem = document.getElementsByClassName("homeItem");
Array.from(homeItem).forEach(element => {
    element.addEventListener('click', function () {
        console.log(" ", element.id);
        window.open(`itemDetails.php?product_id=${element.id}`, "_blank");
    })
});
let brand_number = 0;
//click on Brand Item
let cardbrand = document.getElementsByClassName("cardbrand");
Array.from(cardbrand).forEach(element => {
    element.addEventListener('click', function () {
        if (brand_number = 0) {
            window.open(`details.php?category=Microsoft Laptop&main_category=laptop_category`, '_blank');
        }
        if (brand_number = 1) {
            window.open(`details.php?category=Dell Laptop&main_category=laptop_category`, '_blank');
        }
        if (brand_number = 2) {
            window.open(`details.php?category=Oracle Laptop&main_category=laptop_category`, '_blank');
        }
        if (brand_number = 3) {
            window.open(`details.php?category=Hp Laptop&main_category=laptop_category`, '_blank');
        }
        if (brand_number = 4) {
            window.open(`details.php?category=Lenovo Laptop&main_category=laptop_category`, '_blank');
        }
        if (brand_number = 5) {
            window.open(`details.php?category=Sony Laptop&main_category=laptop_category`, '_blank');
        }
        if (brand_number = 6) {
            window.open(`details.php?category=Apple Laptop&main_category=laptop_category`, '_blank');
        }

    })
});

// click on day of deal section

let shopDealItem = document.getElementsByClassName("shopDealItem");
Array.from(shopDealItem).forEach(element => {
    element.addEventListener('click', function () {
        console.log(" ", element.id);
        window.open(`itemDetails.php?product_id=${element.id}`, "_blank");
    })
});



