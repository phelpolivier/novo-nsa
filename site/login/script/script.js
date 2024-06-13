function mudarTema() {
    var trocarEstilo = document.getElementById('mudarCor');
    if (trocarEstilo.href.endsWith('style/style.css')) {
        trocarEstilo.href = 'style/style2.css';
    } else {
        trocarEstilo.href = 'style/style.css';
    }
}

function mudarLogo() {
    var trocarLogo = document.getElementById('mudarPNG')
    if (trocarLogo.src.endsWith('imagens/icons/NSA-claro.png')) {
        trocarLogo.src = 'imagens/icons/NSA-escuro.png';
    } else {
        trocarLogo.src = 'imagens/icons/NSA-claro.png';
    }
}