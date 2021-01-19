console.log("i am update js");

let btnDetails = document.getElementsByClassName("btnDetails");

Array.from(btnDetails).forEach((Element) => {
    Element.addEventListener("click", () => {
        console.log(Element.id);
        window.open(`updateDetails.php?id=${Element.id}`, "_blank");
    })
})