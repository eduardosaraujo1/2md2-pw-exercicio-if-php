let lastNota = 3;

function adicionarCampo() {
    lastNota++;
    const campoFormato = `
        <label for="nota${lastNota}" class="form-label">Nota</label>
        <div class="input-group has-validation">
            <input required type="number" step="0.5" min="0" max="10" name="nota${lastNota}"
                class="form-control" />
            <span class="input-group-text" style="cursor: pointer;">
                <a tabindex="-1" href="#" type="button" class="btn-remover-campo">
                    -
                </a>
            </span>
        </div>
    `;
    const campoParent = document.querySelector('.inputs-notas');
    const addBotao = document.querySelector('.add-nota');
    const campo = document.createElement('div');
    campo.innerHTML = campoFormato;
    campoParent.insertBefore(campo, addBotao);
    const removerBtn = campo.querySelector('.input-group-text');
    removerBtn.addEventListener('click', () => {
        campo.remove();
    });
}

function load() {
    const addBotao = document.querySelector('.add-nota');
    addBotao.addEventListener('click', adicionarCampo);
}

load();
