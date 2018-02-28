<?php include('includes/header.php'); ?>
<main class="main-content container-fluid">
    <div class="row">
        <div class="col-lg-4 sidebar order-lg-2">
            <aside id="infoblock">
                <h5 id="btnSuche" class="cat-blue collapsed d-block d-sm-block d-lg-none" data-toggle="collapse" data-target="#collapseSuche" aria-expanded="false" aria-controls="collapseSuche">Vornamen- und Hebammensuche</h5>
                <div id="collapseSuche" class="collapse" aria-labelledby="btnSuche" data-parent="#infoblock">
                    <?php include('includes/card-advanced-search.php'); ?>
                </div>
                <h5 id="btnListe" class="cat-yellow collapsed d-block d-sm-block d-lg-none" data-toggle="collapse" data-target="#collapseListe" aria-expanded="false" aria-controls="collapseListe">Die beliebtesten Artikel</h5>
                <div id="collapseListe" class="collapse" aria-labelledby="btnListe" data-parent="#infoblock">
                    <?php include('includes/card-list.php'); ?>
                </div>
                <h5 id="btnText-01" class="cat-pink collapsed d-block d-sm-block d-lg-none" data-toggle="collapse" data-target="#collapseText-01" aria-expanded="false" aria-controls="collapseText-01">Bsp.: Witz der Stunde</h5>
                <div id="collapseText-01" class="collapse cat-yellow mb-5" aria-labelledby="btnText-01" data-parent="#infoblock">
                    <?php include('includes/card-text.php'); ?>
                </div>
                <h5 id="btnText-02" class="cat-green collapsed d-block d-sm-block d-lg-none" data-toggle="collapse" data-target="#collapseText-02" aria-expanded="false" aria-controls="collapseText-02">Bsp.: Tageshoroskop</h5>
                <div id="collapseText-02" class="collapse cat-yellow" aria-labelledby="btnText-02" data-parent="#infoblock">
                    <?php include('includes/card-text.php'); ?>
                </div>
            </aside>
        </div>
        <div class="col-lg-8 content order-lg-1">
            <?php include('includes/big-card.php'); ?>
            <div class="ads d-none d-sm-block">
                <img class="img-fluid" src="img/google-ads.jpg" alt=""/>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>

            <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>

            <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>

            <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>

            <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>
        </div>

</main>
<?php include('includes/footer.php'); ?>
<?php include('includes/modal-search-dialog.php'); ?>