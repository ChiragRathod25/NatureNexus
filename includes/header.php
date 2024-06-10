<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Local Farmer-Consumer Connection App</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="js/scripts.js" defer></script>
</head>
<body>
    <header>
        <h1>Nature Nexus</h1>
        <nav>
            <a href="/index.php">Home</a>
            <?php if(isset($_SESSION['user_id'])): ?>
                <a href="/dashboard.php">Dashboard</a>
                <a href="/product_list.php">Products</a>
                <a href="/cart.php">Cart</a>
                <a href="/order_history.php">Order History</a>
                <a href="/review.php">Reviews</a>
                <a href="/logout.php">Logout</a>
            <?php else: ?>
                <a href="/src/pages/login.php">Login</a>
                <a href="/src/pages/register.php">Register</a>
            <?php endif; ?>
        </nav>
    </header>
    <div class="container">

    </div>
    <script>
        console.log("loaded");
        if (window.location.href.includes("chiragrathod25.github.io")|| window.location.href.includes("localhost")){
        // console.log("inside loaded");
        const addRootRapo = document.querySelectorAll("a");
        const repoName = "/naturenexus";
        for (let i = 0; i < addRootRapo.length; i++)  {
            let val = addRootRapo[i].getAttribute("href");
            // console.log('not changed')
            if(val.includes('..//')){
            // console.log('true');
            // console.log(val)
            }
            if (val != "" || val != "#") {
            val = repoName + val;
            addRootRapo[i].setAttribute("href", val);
            // console.log('changed');
            }
        }
        // console.log('after loop')
    }
    </script>
</body>
</html>
