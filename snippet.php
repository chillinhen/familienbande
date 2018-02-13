<div class="card  mb-4 box-shadow">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="tabbedList" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="vornamen" data-toggle="tab" href="#vornamen" role="tab" aria-controls="vornamen" aria-selected="true">Vornamen</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="hebammen" data-toggle="tab" href="#hebammen" role="tab" aria-controls="hebammen" aria-selected="false">Hebammen</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="vornamen">
            <h4 class="card-title">Gesucht wird ein ... Vorname</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <form class="form-inline" id="vornamen-suche">
                <input class="form-control mr-sm-2" type="search" placeholder="Vorname eingeben" aria-label="Suche">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Suche</button>
            </form>
        </div>
        <div class="tab-pane" id="hebammen" role="tabpanel" aria-labelledby="hebammen">
            <h4 class="card-title">Gesucht wird eine ... Hebamme</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <form class="form-inline" id="vornamen-suche">
                <input class="form-control mr-sm-2" type="search" placeholder="PLZ oder Ort eingeben" aria-label="Suche">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Suche</button>
            </form>
        </div>
    </div>
</div>
