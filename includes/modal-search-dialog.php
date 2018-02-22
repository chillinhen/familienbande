<div class="modal fade" id="modalSearchDialog" tabindex="-1" role="dialog" aria-labelledby="modalSearchDialogLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Suche nach Themen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs" id="tabbedList" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="namen-tab" data-toggle="tab" href="#vornamen" role="tab" aria-controls="vornamen" aria-selected="true">Vornamen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="hebammen-tab" data-toggle="tab" href="#hebammen" role="tab" aria-controls="hebammen" aria-selected="false">Hebammen</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="vornamen" role="tabpanel" aria-labelledby="namen-tab">
                        <h3 class="card-title">Gesucht wird ein ... Vorname</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <form class="form-inline d-flex" id="vornamen-suche">
                            <input class="form-control mr-sm-2" type="search" placeholder="Vorname eingeben" aria-label="Suche">
                            <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i><span>Suche</span></button>

                        </form>
                    </div>
                    <div class="tab-pane" id="hebammen" role="tabpanel" aria-labelledby="hebammen-tab">
                        <h3 class="card-title">Gesucht wird eine ... Hebamme</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <form class="form-inline d-flex" id="hebammen-suche">
                            <input class="form-control mr-sm-2" type="search" placeholder="PLZ oder Ort eingeben" aria-label="Suche">
                            <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i><span>Suche</span></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Schliessen</button>
            </div>
        </div>
    </div>
</div>