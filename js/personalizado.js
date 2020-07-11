new WOW().init();
document.querySelectorAll('.click-menu').forEach(link =>{
    const conteudo = document.getElementById('conteudo');

    link.onclick = function(e){
        e.preventDefault();
        fetch(link.href)
            .then(resp => resp.text())
            .then(html => conteudo.innerHTML = html)
    }
});

function carregahome(){
    const conteudo = document.getElementById('conteudo');
    fetch('./pages/home.html')
            .then(resp => resp.text())
            .then(html => conteudo.innerHTML = html)
}
carregahome();