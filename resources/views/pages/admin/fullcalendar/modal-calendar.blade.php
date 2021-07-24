<div class="modal fade" id="modalCalendar" tabindex="-1" role="dialog" aria-labelledby="titleModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="titleModal">Título do modal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div id="message"></div>

            <form id="formEvent" action="#" class="form" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="title" class="col-sm-4 col-form-label">Titulo</label>
                    <div class="col-sm-8">
                        <input type="text" name="title" class="form-control" id="title">

                        <input type="hidden" name="id" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="start" class="col-sm-4 col-form-label">Data Inicial</label>
                    <div class="col-sm-8">
                      <input type="text" name="start" class="form-control date-time" id="start">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="end" class="col-sm-4 col-form-label">Data Final</label>
                    <div class="col-sm-8">
                      <input type="text" name="end" class="form-control date-time" id="end">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="color" class="col-sm-4 col-form-label">Cor</label>
                    <div class="col-sm-8">
                      <input type="color" name="color" class="form-control" id="color">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="col-sm-4 col-form-label">Descrição</label>
                    <div class="col-sm-8">
                      <textarea name="description" id="description" cols="40" rows="4"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="valor" class="col-sm-4 col-form-label">Valor</label>
                    <div class="col-sm-8">
                      <input type="number" name="valor" class="form-control" id="valor">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="status" class="col-sm-4 col-form-label">Status</label>
                    <div class="col-sm-8">
                      <input type="text" name="status" class="form-control" id="status">
                    </div>
                </div>

            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary saveEvent">Salvar</button>
          <button type="button" class="btn btn-danger deleteEvent">Excluir</button>
        </div>
      </div>
    </div>
  </div>
