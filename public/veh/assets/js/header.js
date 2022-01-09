var burger = document.querySelector('#menutoggler');
        var rightnav = document.querySelector('.rightnav');
        var leftnav = document.querySelector('.leftnav');
        burger.addEventListener("click", () => {
            rightnav.classList.toggle('rightnav_resp');
            leftnav.classList.toggle('leftnav_resp');
        });
