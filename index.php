<?php $page_id = 1; require "@tyrositeframework/start.php"; ?>




<header> <?php $cp_navbar(); ?> </header>

<main>

    <?php $cp_carousel(); ?>

    <?php $cp_apropos(); ?>

    <?php $cp_prestation(); ?>

    <?php $cp_prestationv2(); ?>

    <?php $cp_boncadeau(); ?>

    <?php $cp_contact(); ?>

    <?php $cp_faq(); ?>

</main>


<?php $js_exemple(); ?>


<footer style="width: 100%;"> <?php $cp_footer(); ?> </footer>





<?php require "@tyrositeframework/end.php"; ?>