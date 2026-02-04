<!-- Header -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.jpg">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <title>
    <?php bloginfo('name'); ?>
  </title>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <nav class="navbar">
    <div class="container">
      <div class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Mina Logo">
      </div>
      <ul class="nav-links">
        <li class="dropdown">
          <a href="<?php echo get_permalink( get_page_by_path('index') ); ?>">Shop ▼</a>
          <ul class="submenu">
            <li> <a href="<?php echo get_permalink( get_page_by_path('shop-2') ); ?>">
                All products
              </a></li>
            <li><a href="<?php echo get_permalink( get_page_by_path('collection') ); ?>">New collection</a></li>
          </ul>
        </li>
        <li><a href="<?php echo get_permalink( get_page_by_path('sustainability-2') ); ?>">Sustainability</a></li>
        <li><a href="<?php echo get_permalink( get_page_by_path('about-mina-2') ); ?>">About</a></li>
        <li><a href="<?php echo get_permalink( get_page_by_path('contact-2') ); ?>">Contact</a></li>
      </ul>

      <div class="cart" id="openCart">
        <img src="<?php echo get_template_directory_uri(); ?>/images/shopping-bag.png" alt="Shopping Bag"
          class="cart-icon">
        Cart
      </div>

      <div class="cart-overlay" id="cartOverlay"></div>

      <div class="cart-drawer" id="cartDrawer">
        <div class="cart-header">
          <h3>Shopping bag</h3>
          <button class="cart-close" id="closeCart">✕</button>
        </div>

        <div class="cart-body">
          <p class="cart-empty">Shopping bag is empty</p>
        </div>
      </div>
    </div>
  </nav>

  <div class="top-bar">
    <p data-aos="fade-up" data-aos-delay="200">
      Free shipping on orders over $50 amount
    </p>
  </div>

  <script>
document.addEventListener("DOMContentLoaded", function () {
    const openCart = document.getElementById("openCart");
    const closeCart = document.getElementById("closeCart");
    const cartDrawer = document.getElementById("cartDrawer");
    const cartOverlay = document.getElementById("cartOverlay");

    openCart.addEventListener("click", function () {
        cartDrawer.classList.add("active");
        cartOverlay.classList.add("active");
        document.body.style.overflow = "hidden";
    });

    function closeCartPanel() {
        cartDrawer.classList.remove("active");
        cartOverlay.classList.remove("active");
        document.body.style.overflow = "";
    }

    closeCart.addEventListener("click", closeCartPanel);
    cartOverlay.addEventListener("click", closeCartPanel);
});
</script>
