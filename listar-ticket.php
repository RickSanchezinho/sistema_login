<h1>Lista de Tickets</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastar-ticket">
        <div class="mb-3">
            <label>Titulo</label>
            <input type="text" name="titulo_mensagem" class="form-control">
        </div>
        <div class="mb-3">
            <label>Mensagem</label>
            <textarea name="texto_mensagem" rows="S" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
</form>