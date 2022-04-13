document.querySelector('#search').oninput = function(){
    let val = this.value;
    let searchItems = document.querySelectorAll('tr');
    if (val != ' ') {
        searchItems.forEach(function(elem){
            if (elem.innerText.search(val) == -1) {
                elem.classList.add('hide');
            }
            else {
                elem.classList.remove('hide');
                
            }
        });
    }
}