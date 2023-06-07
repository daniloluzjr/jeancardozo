const camposDoFormulario = document.querySelectorAll("[required]");

camposDoFormulario.forEach((campo) => {
    campo.addEventListener("blur", () => verificaCampo(campo));

} )
const formulario = document.querySelectorAll("[data-formulario]");

formulario.addEventListener("submit", (e) => {
    e.preventDefault();

    const listaRespostas = {
        "nome": e.target.elements["nome"].value,
        "email": e.target.elements["email"].value,
        "telefone": e.target.elements["telefone"].value,
        "mensagem": e.target.elements["mensagem"].value,
    }

    localStorage.setItem("contato", JSON.stringify(listaRespostas));

    window.location.href = '.abrir-conta-form-2.html';
})


function verificaCampo(campo) {

}