const btnFisica = document.getElementById('btn-fisica');
const btnJuridica = document.getElementById('btn-juridica');
const divPF = document.querySelector('.pf');
const divPJ = document.querySelector('.pj');

btnFisica.addEventListener('click', () => {
    btnFisica.classList.add('ativo');
    btnJuridica.classList.remove('ativo');
    divPF.style.display = 'block';
    divPJ.style.display = 'none';
});

btnJuridica.addEventListener('click', () => {
    btnJuridica.classList.add('ativo');
    btnFisica.classList.remove('ativo');
    divPJ.style.display = 'block';
    divPF.style.display = 'none';
});
