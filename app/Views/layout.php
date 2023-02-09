<!doctype html>
<html class="no-js" lang="id">
<?= $this->include('components/head'); ?>

<body>
    <!--[if IE]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <?= $this->include('components/preloader'); ?>

    <?= $this->renderSection('main'); ?>

    <?= $this->include('components/footer'); ?>

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <?= $this->include('components/script'); ?>
</body>

</html>