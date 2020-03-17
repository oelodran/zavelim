<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: #e3f2fd;" >
    <div class="container-fluid">

        <a class="navbar-brand" href="index.php">Zavelim</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo url_for('index.php'); ?>">Naslovna</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url_for('o_nama.php'); ?>">O nama</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Prodaja
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo url_for('oplate.php'); ?>">Oplate</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url_for('visece_bine.php'); ?>">Viseće bine</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url_for('tribine_podijumi.php'); ?>">Tribine i podijumi</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url_for('nosivi_tornjevi.php'); ?>">Nosivi Tornjevi</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url_for('usluge.php'); ?>">Usluge</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url_for('akcija.php'); ?>">Akcija</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url_for('kontakt.php'); ?>">Kontakt</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url_for('kontakt.php'); ?>">Kontakt</a>
                </li>
            </ul>
        </div>
    </div>
</nav>