<!DOCTYPE html>
<html>

<head>
  <title>Doodle</title>

  <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

  <div class="wrapper">
    <div class="header">
      <div class="headerContent">
        <div class="logoContainer">
          <a href="index.php">
            <img src="assets/image/search.png" alt="">
          </a>

        </div>

        <div class="searchContainer">
          <form action="search.php" method="GET">
            <div class="searchBarContainer">
              <input class="searchBox" type="text" name="term">
              <button class="searchButton">
                <img src="assets/image/icons/searchicon.png">
              </button>
            </div>
          </form>
        </div>
      </div>

      <div class="tabsContainer">
        <ul class="tabList">
          <li>Sites</li>
          <li>Images</li>
        </ul>
      </div>
    </div>

  </div>
</body>

</html>