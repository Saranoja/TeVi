function openPopout() {
    //this will stop scrolling ability while modal is open
    document.body.style.position = "fixed";
    document.querySelector('.bg-modal').style.display = "flex";
}

function closePopout() {
    document.body.style.position = "";
    document.querySelector('.bg-modal').style.display = "none";
}
