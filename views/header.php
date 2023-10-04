<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Store</title>

  <!-- 
    - favicon
  -->
  <link rel="short icon" href="/E-Store/public/icon/favicon.svg">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="/E-Store/public/css/style.css">
  <link rel="stylesheet" href="/E-Store/public/css/account.css">
  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- Bootstrap -->
  <!-- 
    - preload banner
  -->
  <link rel="preload" href="/E-Store/public/images/hero-banner.png" as="image">

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>

/* Position the search-popup at the top of the header */
.header {
  position: relative;
}
/* Position the search-popup to the right of the search button */
.search-popup {
  display: none;
  position: absolute;
  /* top: 27px; */
  top: 13vh;
  /* right: 200px; */
  right: 50px;
  padding: 0; /* Remove padding */
  z-index: 1000;
  border: 1px solid #ccc;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
  width: 20vw;
  background: none;
}

/* Style the input and buttons */
.search-content {
  display: flex;
  align-items: center;
}

.search-content input[type="text"] {
  flex: 1;
  padding: 5px;
  background: none; /* Remove background color */
}

.search-content button {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 5px 10px;
  cursor: pointer;
}

#search-input {
  font-size: 1.5rem;
}
/* Additional styling as needed */



/* Remove border when the button is clicked (:active) */
#search-button:active {
  outline: none; /* Remove outline when clicked */
}

/* Remove border when the button is focused (:focus) */
#search-button:focus {
  outline: none;
}

#search-button .nav-action-text {
  margin-left: 50px;
}
#search-input{
  outline: none;
}
#close-search-popup {
  /* color: transparent;  */
  color: #ccc;
  background: transparent; 
  border: none;
  padding: 0;
  cursor: pointer;
  outline: none;
  position: relative;
  width: 25px;
  height: 25px;
  right: 5px;
}


    </style>
</head>

<body id="top">

  
<!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="#" class="logo">
        <img src="/E-Store/public/icon/logo.svg" alt="">
      </a>

      <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
          <ion-icon name="close-outline"></ion-icon>
        </button>

        <a href="#" class="logo">
        <img src="/E-Store/public/icon/logo.svg" alt="">
        </a>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="index.php" class="navbar-link">Home</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">About</a>
          </li>

          <li class="navbar-item">
            <a href="product.php" class="navbar-link">Products</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">Shop</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">Blog</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">Contact</a>
          </li>

        </ul>

        <ul class="nav-action-list">

        <li>
          <button id="search-button" class="nav-action-btn">

            <ion-icon name="search-outline" aria-hidden="true"></ion-icon>

            <span class="nav-action-text">Search</span>
          </button>
        </li>

  <!-- Search pop-up box -->
  <div id="search-popup" class="search-popup">
      <div class="search-content">
      <button id="search-submit">Search</button>
        <input type="text" id="search-input" placeholder="">
        <button id="close-search-popup">X</button>
      </div>
    </div>

          <li>
            <a href="account.php" class="nav-action-btn">
              <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

              <span class="nav-action-text">Login / Register</span>
            </a>
          </li>

          <li>
            <button class="nav-action-btn">
              <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>

              <span class="nav-action-text">Wishlist</span>

              <data class="nav-action-badge" value="5" aria-hidden="true">5</data>
            </button>
          </li>

          <li>
            <a href="cart.php"><button class="nav-action-btn">
              <ion-icon name="bag-outline" aria-hidden="true"></ion-icon>

              <data class="nav-action-text" value="318.00">Basket: <strong>$318.00</strong></data>

              <data class="nav-action-badge" value="4" aria-hidden="true">4</data>
            </button>
            </a>
          </li>

        </ul>

      </nav>

    </div>
  </header>


  <script src="/E-Store/public/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script>
$(document).ready(function () {
  // Cache the search popup element
  var searchPopup = $("#search-popup");

  // Cache the search button
  var searchButton = $("#search-button");

  // Cache the close button
  var closePopupButton = $("#close-search-popup");

  // Cache the search input and submit button
  var searchInput = $("#search-input");
  var searchSubmitButton = $("#search-submit");

  // Show the search popup when the search button is clicked
  searchButton.click(function () {
    searchPopup.show();
  });

  // Close the search popup when the close button is clicked
  closePopupButton.click(function () {
    searchPopup.hide();
  });

  searchSubmitButton.click(function () {
    var searchTerm = searchInput.val();
    alert("You searched for: " + searchTerm);
  });

  // Handle Enter key press in the search input field
  searchInput.keydown(function (event) {
    if (event.keyCode === 13) { // Check if Enter key (keyCode 13) is pressed
      event.preventDefault(); // Prevent form submission
      var searchTerm = searchInput.val();
      alert("You searched for: " + searchTerm);
    }
  });

});

</script>

</body>

</html>