console.log("i am custome pc");

window.onload = function () {
    let processorDiv = document.getElementById("processorDiv");
    let motherboradDiv = document.getElementById("motherboradDiv");
    let ramDiv = document.getElementById("ramDiv");
    let storageDiv1 = document.getElementById("storageDiv1");
    let storageDiv2 = document.getElementById("storageDiv2");
    let cabinetDiv = document.getElementById("cabinetDiv");
    let coolerDiv = document.getElementById("coolerDiv");
    let graphicDiv = document.getElementById("graphicDiv");

    let processorBtn = document.getElementById("processorBtn");
    let motherboradBtn = document.getElementById("motherboradBtn");
    let ramBtn = document.getElementById("ramBtn");
    let storageBtn1 = document.getElementById("storageBtn1");
    let storageBtn2 = document.getElementById("storageBtn2");
    let cabinetBtn = document.getElementById("cabinetBtn");
    let coolerBtn = document.getElementById("coolerBtn");
    let graphicBtn = document.getElementById("graphicBtn");

    let divContainer = document.getElementsByClassName("divContainer");
    let selectButtons = document.getElementsByClassName("selectButtons");
    let selectProduct = document.getElementsByClassName("btnSelect");

    let totalCost = document.getElementById("totalCost");
    let productList = document.getElementById("productList");
    let payNow = document.getElementById("payNow");

    payNow.addEventListener('click', () => {
        window.open(`payment.php?total=${total.finalCost}`, "_blank");
    })



    let total = {
        processor: "",
        motherborad: "",
        ram: "",
        storage1: "",
        storage2: "",
        cabinet: "",
        cooler: "",
        graphic: "",
        finalCost: 0
    };

    let btnNext = document.getElementById("btnNext");
    let countDiv = 1;

    hiderOther("processorDiv");
    countDiv++;

    btnNext.addEventListener('click', (Element) => {
        if (countDiv == 1) {
            hiderOther("processorDiv");

        }
        if (countDiv == 2) {
            changeButtonEffect("processorBtn")
            hiderOther("motherboradDiv");

        }
        if (countDiv == 3) {
            changeButtonEffect("motherboradBtn")
            hiderOther("ramDiv");
        }
        if (countDiv == 4) {
            changeButtonEffect("ramBtn")
            hiderOther("storageDiv1");
        }
        if (countDiv == 5) {
            changeButtonEffect("storageBtn1")
            hiderOther("storageDiv2");
        }
        if (countDiv == 6) {
            changeButtonEffect("storageBtn2")
            hiderOther("cabinetDiv");
        }
        if (countDiv == 7) {
            changeButtonEffect("cabinetBtn")
            hiderOther("coolerDiv");
        }
        if (countDiv == 8) {
            changeButtonEffect("coolerBtn")
            hiderOther("graphicDiv");
        }
        if (countDiv == 9) {
            changeButtonEffect("graphicBtn")
            Swal.fire('Every Component Selected Already Total Paybale amount is ' + total.finalCost);
        }
        countDiv++;

        totalCost.innerHTML = total.finalCost;


    })

    Array.from(selectProduct).forEach((Element) => {
        Element.addEventListener('click', (element => {
            let cardSelect = document.getElementById(`card${Element.id}`);
            var i;
            let name = "";
            for (i = 3; i < Element.classList.length; i++) {
                name = name + " " + Element.classList[i];
            }
            addToTotal(Element.value, name);
            cardSelect.style.backgroundColor = "grey"
            Element.style.display = "none";
        }))
    })

    function addToTotal(price, name) {
        if (countDiv == 2) {
            if ((total.processor).localeCompare("") == 0) {
                total.processor = price;
            } else {
                total.processor = "" + (parseInt(total.processor) + parseInt(price));
            }

        }
        if (countDiv == 3) {
            if ((total.motherborad).localeCompare("") == 0) {
                total.motherborad = price;
            } else {
                total.motherborad = "" + (parseInt(total.motherborad) + parseInt(price));
            }

            total.motherborad = price;
        }
        if (countDiv == 4) {

            if ((total.ram).localeCompare("") == 0) {
                total.ram = price;
            } else {
                total.ram = "" + (parseInt(total.ram) + parseInt(price));
            }

            total.ram = price;
        }
        if (countDiv == 5) {

            if ((total.storage1).localeCompare("") == 0) {
                total.storage1 = price;
            } else {
                total.storage1 = "" + (parseInt(total.storage1) + parseInt(price));
            }

            total.storage1 = price;
        }
        if (countDiv == 6) {

            if ((total.storage2).localeCompare("") == 0) {
                total.storage2 = price;
            } else {
                total.storage2 = "" + (parseInt(total.storage2) + parseInt(price));
            }
        }
        if (countDiv == 7) {

            if ((total.cabinet).localeCompare("") == 0) {
                total.cabinet = price;
            } else {
                total.cabinet = "" + (parseInt(total.cabinet) + parseInt(price));
            }

        }
        if (countDiv == 8) {

            if ((total.cooler).localeCompare("") == 0) {
                total.cooler = price;
            } else {
                total.cooler = "" + (parseInt(total.cooler) + parseInt(price));
            }
        }
        if (countDiv == 9) {

            if ((total.graphic).localeCompare("") == 0) {
                total.graphic = price;
            } else {
                total.graphic = "" + (parseInt(total.graphic) + parseInt(price));
            }


            total.graphic = price;
        }
        total.finalCost = total.finalCost + parseInt(price);
        totalCost.innerHTML = total.finalCost;


        let insertString = `<div class="alert alert-primary" role="alert">
        ${name} : ${price}
    </div>`;

        productList.innerHTML = productList.innerHTML + insertString;
    }
    function hiderOther(activeDiv) {

        Array.from(divContainer).forEach((Element) => {
            if ((activeDiv.localeCompare(Element.id)) == 0) {
                Element.style.display = "block";
            } else {
                Element.style.display = "none";
            }

        })
    }

    function changeButtonEffect(activeBtn) {
        Array.from(selectButtons).forEach((Element) => {
            if ((activeBtn.localeCompare(Element.id)) == 0) {
                Element.style.backgroundColor = "black";
            }

        })
    }





}



