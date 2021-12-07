<div class='text-center txt-nunito'>
    <!-- TITLE -->
    <h2 class="txt-dec-underline-blue mb-4">Contato</h2>

    <form class="row g-3 text-start p-5 pt-1">
        <div class="col-md-8 ">
            <label for="inputEmail4" class="form-label">Nome:</label>
            <input type="email" class="form-control" id="inputEmail4" required>
        </div>
        <div class="col-md-4">
            <label for="inputCnpj" class="form-label">CNPJ:</label>
            <input type="text" class="form-control" id="inputCnpj" required>
        </div>
        <div></div>
        <div class="col-8">
            <label for="inputEmpresa" class="form-label">Empresa:</label>
            <input type="text" class="form-control" id="inputEmpresa" required>
        </div>
        <div class="col-4">
            <label for="inputState" class="form-label">Assunto:</label>
            <select id="inputState" class="form-select" required>
                <option selected disabled>Escolha um assunto</option>
                <option>Validador</option>
                <option>Sistemas whitelabel</option>
                <option>Parceiria</option>
                <option>Outro</option>
            </select>
        </div>

        <div class="col-12">
            <label for="inputMensagem" class="form-label">Mensagem: </label>
            <textarea class="form-control" aria-label="Mensagem" id='inputMensagem' required></textarea>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary col-12">Enviar</button>
        </div>

    </form>

</div>