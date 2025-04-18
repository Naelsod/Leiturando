let offset = 0;

function carregarResenhas() {
    fetch(`carregar_resenhas.php?offset=${offset}`)
        .then(response => response.json())
        .then(resenhas => {
            const container = document.getElementById('catalogo-container');

            resenhas.forEach(resenha => {
                const div = document.createElement('div');
                div.classList.add('item-resenha');
                div.innerHTML = `
                    <a href="resenha.php?id=${resenha.id}">
                        <img src="uploads/${resenha.capa}" alt="${resenha.titulo}" />
                        <p>${resenha.titulo}</p>
                    </a>
                `;
                container.appendChild(div);
            });

            if (resenhas.length < 6) {
                document.getElementById('carregarMais').style.display = 'none';
            }

            offset += 6;
        });
}

document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('carregarMais').addEventListener('click', carregarResenhas);
    carregarResenhas();
});