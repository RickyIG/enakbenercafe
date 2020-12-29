window.addEventListener('scroll', () =>{
    //change background color
    var top_header = document.getElementById('top-header');
    top_header.classList.toggle('add-style1', window.scrollY > 0);
});

function showMenu(){
    var menu_nav = document.getElementById('drop_menu');
    menu_nav.classList.toggle('show');

    var top_header = document.getElementById('top-header');
    top_header.classList.toggle('showBackground');
}

