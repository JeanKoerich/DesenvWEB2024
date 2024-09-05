function addMediaNota() {
    const tabela = document.getElementById('tabelaNotas');
    const numLinhas = tabela.rows.length;
    const numNotas = tabela.rows[1].cells.length - 1;

    let linhaTotal = tabela.insertRow(numLinhas);
    linhaTotal.classList.add('total');

    let celulaAluno = linhaTotal.insertCell(0);
    celulaAluno.innerHTML = 'Média por Nota';

    for (let i = 1; i <= numNotas; i++) {
        let soma = 0;
        let count = 0;

        for (let j = 1; j < numLinhas - 1; j++) {
            let nota = parseFloat(tabela.rows[j].cells[i].innerText); 
            if (!isNaN(nota)) {
                soma += nota;
                count++;
            }
        }

        let media = soma / count;
        let celulaMedia = linhaTotal.insertCell(i);
        celulaMedia.innerHTML = media.toFixed(2);
    }
}

function addMediaAluno() {
    const tabela = document.getElementById('tabelaNotas');
    const numLinhas = tabela.rows.length;
    const numColunas = tabela.rows[0].cells.length;

    let cabecalho = tabela.rows[0].insertCell(numColunas);
    cabecalho.classList.add('cabecalho');
    cabecalho.setAttribute('rowspan', '2');
    cabecalho.innerHTML = 'Média por Aluno';

    for (let i = 1; i <= numLinhas; i++) {
        let soma = 0;
        let count = 0;

        for (let j = 1; j < numColunas; j++) {
            let nota = parseFloat(tabela.rows[i].cells[j].innerText);
            if (!isNaN(nota)) {
                soma += nota;
                count++;
            }
        }

        let media = soma / count;
        let celulaMedia = tabela.rows[i].insertCell(numColunas);
        celulaMedia.innerHTML = media.toFixed(2);
    }
}