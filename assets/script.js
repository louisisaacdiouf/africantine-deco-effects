window.onload = () => {
    // Store tabs variables
    var tabs = document.querySelectorAll("ul.nav-tabs > li");

    tabs.forEach(el=>{
        el.addEventListener("click", switchTab);
    });

    function switchTab(event) {
        event.preventDefault();

        document.querySelector("ul.nav-tabs li.active").classList.remove("active");
        document.querySelector(".tab-pane.active").classList.remove("active");

        let clickedTab =  event.currentTarget;
        clickedTab.classList.add("active");

        let anchor = event.target;
        let activePaneID = anchor.getAttribute("href");
        document.querySelector(activePaneID).classList.add("active");
    }
};