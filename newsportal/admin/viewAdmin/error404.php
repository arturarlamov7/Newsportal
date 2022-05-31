<!-- Заголовок title -->
<?php $title = 'Страница не найдена'; ?>

<?php ob_start() ?>
<h2> Error 404!  </h2>
<article>

    <h3>Error 404, what is this?</h3>
    <p>	URL not found.</p>

</article>
<?php $content = ob_get_clean(); ?>

<?php
include "viewAdmin/templates/layout.php";
