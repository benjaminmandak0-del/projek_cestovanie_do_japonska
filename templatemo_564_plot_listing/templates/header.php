<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <?php
        $currentPage = basename($_SERVER['PHP_SELF']);
        $section = basename(dirname($_SERVER['SCRIPT_NAME']));
        $assetPrefix = '../';
        $mainPrefix = $section === 'secondary' ? '../main/' : '';
    ?>
  <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="<?= $mainPrefix ?>index.php" class="logo">
              <img src="<?= $assetPrefix ?>assets/images/sakurtravel_logo.png" alt="Sakura Travel">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
<ul class="nav">
              <li><a href="<?= $mainPrefix ?>index.php"<?php if ($currentPage === 'index.php') echo ' class="active"'; ?>>Domov</a></li>
              <li><a href="<?= $mainPrefix ?>category.php"<?php if ($currentPage === 'category.php') echo ' class="active"'; ?>>Kategória</a></li>
              <li><a href="<?= $mainPrefix ?>listing.php"<?php if ($currentPage === 'listing.php') echo ' class="active"'; ?>>Zoznam</a></li>
              <li><a href="<?= $mainPrefix ?>o_nas.php"<?php if ($currentPage === 'o_nas.php') echo ' class="active"'; ?>>O nás</a></li>
              <li><a href="<?= $mainPrefix ?>contact.php"<?php if ($currentPage === 'contact.php') echo ' class="active"'; ?>>Kontaktujte nás</a></li> 
              <li><div class="main-white-button"><a href="<?= $mainPrefix ?>add-listing.php"><i class="fa fa-plus"></i> Pridajte inzerát</a></div></li> 
            </ul>
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
    </div>
  </header>
