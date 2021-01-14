</body>

</html>

<!-- Option 1: jQuery and Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe-ui-default.min.js"></script>
<?php if (!empty($cdnJs)) : ?>
    <?php foreach ($cdnJs as $cj) : ?>
        <script src="<?= $cj ?>"></script>
    <?php endforeach ?>
<?php endif ?>
<?php if (!empty($pluginJs)) : ?>
    <?php foreach ($pluginJs as $pj) : ?>
        <script src="<?= base_url('/assets/js/plugins/' . $pj); ?>"></script>
    <?php endforeach ?>
<?php endif ?>
<?php if (!empty($javascript)) : ?>
    <?php foreach ($javascript as $js) : ?>
        <script type="text/javascript"  src="<?= base_url('/assets/js/' . $js . '.js'); ?>"></script>
    <?php endforeach ?>
<?php endif; ?>