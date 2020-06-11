function openPopout() {
    //this will stop scrolling ability while modal is open
    document.body.style.position = "fixed";
    document.querySelector('.bg-modal').style.display = "flex";
    //console.log("opening");
}

function closePopout() {
    document.body.style.position = "";
    document.querySelector('.bg-modal').style.display = "none";
    //console.log("closing");
}

window.onclick = function (event) {
    //console.log("click");
    if (event.target == document.querySelector('.bg-modal')) {
        document.querySelector('.bg-modal').style.display = "none";
    }
}
