<?php include __DIR__ . '/../inicio-html.php'; ?>

    <form action="/salvar-pessoa" method="post">
        <div class="form-group">
            <label for="nomePessoa">Nome da Pessoa</label>
            <input
                type="text"
                id="nomePessoa"
                name="nomePessoa"
                class="form-control">
            <label for="nomePessoa">Email da Pessoa</label>
            <input
                type="text"
                id="emailPessoa"
                name="emailPessoa"
                class="form-control">
            <label for="nomePessoa">Senha da Pessoa</label>
            <input
                type="password"
                id="senhaPessoa"
                name="senhaPessoa"
                class="form-control">
        </div>
        <button class="btn btn-primary">Salvar</button>
    </form>

<?php include __DIR__ . '/../fim-html.php'; ?>