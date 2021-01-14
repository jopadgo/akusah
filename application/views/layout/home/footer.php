</div>
<div style="background-color:#212529;padding-bottom:1px" class="mt-5 col">
    <div style="padding-bottom:10px;padding-top:10px" class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="<?= base_url('/assets/images/logosah.png'); ?>" width="150" height="70" class="mx-auto d-block img-fluid" alt="">
                <p class="text-justify text-center text-muted">Berbagi Kebahagiaan Pernikahan Kalian Hanya Dengan Sentuhan Tangan</p>
            </div>
        </div>
    </div>
</div>
    <!-- Option 1: jQuery and Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <?php if(!empty($javascript) ) : ?>
        <?php foreach($javascript as $js) : ?>
            <script src="<?= base_url('/assets/js/'. $js . '.js'); ?>"></script>
        <?php endforeach ?>
    <?php endif; ?>
</body>
</html>