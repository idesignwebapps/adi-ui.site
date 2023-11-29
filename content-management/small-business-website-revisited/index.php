<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Andy&apos;s Grocery Store | Home</title>
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
    <div id="wrapper-index">
        <div id="banner">
            <h3>Fresh Grocery and Convenience</h3>
            <p>A Better Grocery Experience Starts Now</p>
        </div>
        <!-- START First Section -->
        <h3>Come Visit Us</h3>
        <p>Outstanding service starts here</p>
        <img src="./images/grocery-aisle.jpg" alt="picture of the household aisle at andy's grocery store">
        <img src="./images/shop-outside.jpg" alt="street view picture of andy's grocery store">
        <img src="./images/grocery-aisle-two.jpg" alt="picture of the fresh food aisle at andy's grocery store">
        <!-- END First Section -->
        <!-- START Second Section -->
        <section>
            <figure>
                <img src="./images/grocery-bag.jpg" alt="picture of a grocery bag with vegetables" width="400" height="400">
            </figure>
            <h2>High-Quality Products at Competitive Prices</h2>
            <p>Our mission is to provide fresh, high-quality products at affordable prices while offering excellent
                customer service.</p>
            <p>Our store is filled with a wide selection of fresh produce, meats, dairy products, and pantry staples.
                We also carry a variety of health and beauty products, household essentials, and frozen foods. We take
                pride in offering a wide selection of organic and locally sourced products, so you can feel good about
                what you're putting in your cart.</p>
        </section>
        <!-- END Second Section -->
        <!-- START Third Section -->
        <section>
            <figure>
                <img src="./images/andy-image.jpg" alt="picture of the store owner, andy" width="400" height="400">
            </figure>
            <h2>Hear from Andy</h2>
            <p>&quot;I believe in offering a personalized shopping experience and my friendly and knowledgeable staff is
                always on hand to assist with any questions or special requests. Whether you're looking for a specific
                product or need help with meal planning, we're here to help.&quot;</p>
            <p>&quot;As a small business owner, I am proud to be a part of the Kelvedon community and am committed to
                supporting local businesses and organizations. Visit us today and experience the difference of shopping
                at a small, family-owned grocery store. We look forward to serving you!&quot;</p>
        </section>
        <!-- END Third Section -->
        <!-- START Fourth Section -->
        <section>
            <figure>
                <img src="./images/shop-outside.jpg" alt="street view picture of andy's grocery store" width="400" height="400">
            </figure>
            <h2>At Your Nearest High Street</h2>
            <p>Your neighborhood's brand new grocery store, located at 100 High St Kelvedon. Our goal is to provide you
                with the
                best shopping
                experience possible, and our convenient location makes it easy to stock up on all your household
                essentials.
            </p>
            <p>We believe in supporting our local community and are committed to offering products from local businesses
                whenever possible.</p>
        </section>
        <!-- END Fourth Section -->
    </div>
    <!-- END Content -->
    <? include $_SERVER['DOCUMENT_ROOT'] . '/content-management/small-business-website-revisited/includes/footer.inc.php'; ?>
</body>

</html>