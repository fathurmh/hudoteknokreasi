<header class="header-area">
    <div class="navbar-area headroom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/images/logo.png" alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav m-auto">
                                <li class="nav-item active">
                                    <a href="index.html/#home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.html/#about">About </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.html/#services">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.html/#portfolio">Portfolio</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.html/#blog">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.html/#contact">Contact</a>
                                </li>
                            </ul>
                        </div> <!-- navbar collapse -->
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- navbar area -->

    <?= $this->include('landing/home'); ?>
</header>