<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
  <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
           
            <a href="index.php" class="logo">
              <img src="assets/images/sakurtravel_logo.png" alt="Plot Listing">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
<ul class="nav">
              <li><a href="index.php"<?php if ($currentPage === 'index.php') echo ' class="active"'; ?>>Domov</a></li>
              <li><a href="category.php"<?php if ($currentPage === 'category.php') echo ' class="active"'; ?>>Kategória</a></li>
              <li><a href="listing.php"<?php if ($currentPage === 'listing.php') echo ' class="active"'; ?>>Zoznam</a></li>
              <li><a href="o_nas.php"<?php if ($currentPage === 'o_nas.php') echo ' class="active"'; ?>>O nás</a></li>
              <li><a href="contact.php"<?php if ($currentPage === 'contact.php') echo ' class="active"'; ?>>Kontaktujte nás</a></li> 
              <li><div class="main-white-button"><a href="add-listing.php"><i class="fa fa-plus"></i> Pridajte inzerát</a></div></li> 
            </ul>
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
    </div>
  </header>
