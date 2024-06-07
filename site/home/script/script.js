function clickMenu() {
    if (itens.style.display == 'block') {
        itens.style.display = 'none'
    } else {
        itens.style.display = 'block'
        pessoa.style.display = 'none'
    }
}

function tamanho() {
    if (window.innerWidth >= 800) {
        itens.style.display = 'block'
    } else {
        itens.style.display = 'none'
        pessoa.style.display = 'none'
    }
}

function clickPerson() {
    if (pessoa.style.display == 'block') {
        pessoa.style.display = 'none'
    } else {
        pessoa.style.display = 'block'
    }
}

function temaEscuro() {
    var trocarEstilo = document.getElementById('dark-mode');
    if (trocarEstilo.href.endsWith('style/style.css')) {
        trocarEstilo.href = 'style/style2.css';
    } else {
        trocarEstilo.href = 'style/style.css';
    }
}