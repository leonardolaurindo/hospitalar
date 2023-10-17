<main>
    <selection>
        <a href="index.php">
            <button class="btn btn-primary">Voltar</button>
        </a>
    </selection>
    <h2 class="mt-3">Novo Atendimento</h2>
    <form method="post" class="row g-3">
        <div class="form-group col-md-8">
            <label class="form-label">Nome: </label>
            <input type="text" class="form-control" name="pat_name">
        </div>
        <div class="form-group col-md-4">
            <label class="form-label">Naturalidade: </label>
            <input type="text" class="form-control" name="pat_natural">
        </div>
        <div class="form-group">
            <label class="form-label">SUS: </label>
            <input type="number" class="form-control" name="pat_sus">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Cadastrar Ficha</button>
        </div>
    </form>
</main>