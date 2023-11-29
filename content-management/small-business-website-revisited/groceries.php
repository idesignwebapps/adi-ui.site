<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Andy&apos;s Grocery Store | Groceries</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Montserrat:wght@500;600&display=swap" rel="stylesheet">
    <script src="./js/script.js"></script>
</head>

<body>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/content-management/small-business-website-revisited/includes/header.inc.php'; ?>
    <? include $_SERVER['DOCUMENT_ROOT'] . '/content-management/small-business-website-revisited/includes/navigation.inc.php'; ?>
    <!-- START Content -->
    <div id="wrapper-groceries">
        <section aria-label="stock image of fresh food like carrots, tomatoes">
            <h3>Fresh Food</h3>
            <p>Nature's best, always fresh</p>
            <p>Vegetables, Fruits, Dairy & more</p>
        </section>
        <section aria-label="stock image of water flowing out of a bottle">
            <h3>Drinks</h3>
            <p>The drink you need, always nearby</p>
            <p>Water, Juices, Soft Drinks & more</p>
        </section>
        <section aria-label="stock image of a white decor style household">
            <h3>Household</h3>
            <p>Life's little luxuries, always in reach</p>
            <p>Laundry, Cleaning, Essentials & more</p>
        </section>
        <section aria-label="stock image of creme textured beauty products">
            <h3>Health & Beauty</h3>
            <p>Looking good, feeling great</p>
            <p>Haircare, Skincare, Toiletries & more</p>
        </section>
        <section aria-label="stock image of meat and salt on a lot of ice">
            <h3>Frozen Food</h3>
            <p>Freeze time, with every meal</p>
            <p>Pizzas, Meat, Ready Meals & more</p>
        </section>
        <section aria-label="stock image of a store customer on a call">
            <h3>&amp; We Have More</h3>
            <p>Order & stay one step ahead</p>
            <a href="./contact.html">Call Us Today!</a>
        </section>
    </div>
    <!-- END Content -->
    <? include $_SERVER['DOCUMENT_ROOT'] . '/content-management/small-business-website-revisited/includes/footer.inc.php'; ?>
</body>

</html>