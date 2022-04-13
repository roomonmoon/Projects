window.onload = function(){
    document.querySelector('.tabs-header').addEventListener('click', fTabs);

    function fTabs(event) {
        console.log(event);
        let dataTab = (event.target.getAttribute('data-tab'));
        let tabH = document.getElementsByClassName('tab-h');
        for (var i = 0; i<tabH.length; i++) {
            tabH[i].classList.remove('active');
        }
        event.target.classList.add('active');
        let tabBody = document.getElementsByClassName('content-block');
        for (var i = 0; i < tabBody.length; i++) {
            if (dataTab == i) {
                tabBody[i].style.display = 'block';
            }
            else {
                tabBody[i].style.display = 'none';
            }
        }
    }
}

