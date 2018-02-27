<?php include('includes/header.php'); ?>
<main class="main-content">
<section class="container-fluid">
    <div class="row">
        <div class="col-md-8">
              <?php include('includes/big-card.php'); ?>
                <div class="ads d-none d-sm-block">
                    <img class="img-fluid" src="img/google-ads.jpg" alt=""/>
                </div>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>

            <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>

            <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>
        </div>
        <div class="col-md-4">
            <aside class="sidebar fixedsticky">
                <h2>Sticky!</h2><p>Maecenas sed diam eget risus varius blandit sit amet non magna. Maecenas faucibus mollis interdum. Maecenas sed diam eget risus varius blandit sit amet non magna justo sit amet risus.</p><a href="#" class="button">Do Something!</a>
                <?php include('includes/card-list.php'); ?>
                <div class="cat-name mb-5"><?php include('includes/card-text.php'); ?></div>
                <div class="cat-event mb-5"><?php include('includes/card-text.php'); ?></div>
                <div class="cat-slogan mb-5"><?php include('includes/card-text.php'); ?></div>
            </aside>
        </div>

  </div>
</section>
    </main>
<?php include('includes/footer.php'); ?>
<?php include('includes/modal-search-dialog.php'); ?>