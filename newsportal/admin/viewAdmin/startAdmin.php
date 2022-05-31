<?php ob_start(); ?>
<h2>Admin panel </h2>
<article>

    <p>Admin panel </p>


</article>
<?php $content = ob_get_clean(); ?>

<?php
include "viewAdmin/templates/layout.php";
