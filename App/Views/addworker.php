<main>
    <selection>
        <a href="index.php">
            <button class="btn btn-primary">Voltar</button>
        </a>
    </selection>
    <h2 class="mt-3"><?=TITLE?></h2>
    <form method="post" class="row">
        <div class="form-group">
            <label>Tipo</label>

            <div>
                <div class="form-check form-check-inline">
                    <label class="form-control">
                    <input type="radio" name="wor_type" value="1" <?=$obWorker->wor_type == 1 ? 'checked' : ''?>> Recepção
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-control">
                    <input type="radio" name="wor_type" value="2" <?=$obWorker->wor_type == 2 ? 'checked' : ''?>> Enfermagem
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-control">
                    <input type="radio" name="wor_type" value="3" <?=$obWorker->wor_type == 3 ? 'checked' : ''?>> Med
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-control">
                    <input type="radio" name="wor_type" value="4" <?=$obWorker->wor_type == 4 ? 'checked' : ''?>> Farmacia
                    </label>
                </div>
            </div>
            <div class="form-group col-md-8">
                <label class="form-label">Nome: </label>
                <input type="text" class="form-control" name="wor_name" value="<?=$obWorker->wor_name?>">
            </div>
            <div class="form-group col-md-4">
                <label class="form-label">Senha: </label>
                <input type="password" class="form-control" name="wor_password" value="<?=$obWorker->wor_password?>">
            </div>
            <div class="form-group col-md-6">
                <label class="form-label">Email: </label>
                <input type="email" class="form-control" name="wor_email" value="<?=$obWorker->wor_email?>">
            </div>
            <div class="form-group col-md-6">
                <label class="form-label">Documento: </label>
                <input type="text" class="form-control" name="wor_doc" value="<?=$obWorker->wor_doc?>">
            </div>
            <div class="form-group mt-4">
                <button type="submit" class="btn btn-success">Adicionar</button>
            </div>
        </div>
    </form>
</main>