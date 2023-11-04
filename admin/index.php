<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <nav>
        <div class="navbar">
            <div class="logo">
                aqui va el logo
            </div>
            <div class="menu-icon" onclick="toggleMenu()">&#9776;</div>
            <ul class="menu-items">
                <li><a href="#">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Shopping Cart</a></li>
                <li><a href="login.php">Log in</a></li>
                <li><a href="login.php">Sign up</a></li>
            </ul>
        </div>
    </nav>
    <main>
        <h1>aaaaaa</h1>
        <p>gaaaaaaaaa</p>
    </main>



    <script>
    var isMenuOpen = false;

    function toggleMenu() {
        var menu = document.querySelector('.menu-items');
        menu.classList.toggle('show');
        isMenuOpen = !isMenuOpen;

        // Aplicar margen superior al h1 solo cuando el menú está cerrado
        var h1Element = document.querySelector('main');
        h1Element.style.marginTop = isMenuOpen ? '200px' : '60px'; // Ajusta el valor según la altura de tu nav
    }
    </script>


</body>

</html>