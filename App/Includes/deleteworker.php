<main>
    <h2 class="mt-3">Deletar Worker</h2>
    <form method="post" class="row">
        <div class="form-group">
            <p>Você deseja realmente excluir o Worker <strong><?=$obWorker->wor_name?></strong>?</p>
        </div>
        <div class="form-group">
            <a href="index.php">
                <button type="button" class="btn btn-success">Cancelar</button>
            </a>
            <button type="submit" name="delete" class="btn btn-danger">Excluir</button>
        </div>
    </form>
</main>