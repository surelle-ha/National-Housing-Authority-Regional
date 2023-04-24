<?php
    session_start();
    include "php/environment.php";
    include "php/init.php";
    include "php/connection.php";
    include "php/ClickatellSMS.php";
    include "php/notification.php";
    include "php/dataIn.php";
    include "php/login.php";
    include "php/employee.php";
    include "php/manageCart.php";

    /* USER VERIFY */
    if(isset($_SESSION['logged_status'])){
        // Do Nothing
    }else{
        header('location: landing.php');
    }

    if(!isset($_GET['viewon'])){
        header('location: index.php');
    }

    function getRandomImage() {
        $linksArray = array(
            "https://remaxadvantagephilippines.com/wp-content/uploads/2019/02/Brand-New-Puerto-Real-House-and-Lot-24.jpg",
            "https://www.allproperties.com.ph/wp-content/uploads/2022/01/House-and-Lot-For-Sale-Cavite-Find-Properties-scaled-1.jpg",
            "https://www.bria.com.ph/wp-content/uploads/2021/03/Bettina_Exterior-2.jpg",
            "https://pinnacle.ph/images/properties/P3124858/P3124858.jpg",
            "https://www.crownasia.com.ph/assets/propertiespage/properties/model/1fac99ae7c/Lladro.jpg",
            "https://www.homeshop.com.ph/wp-content/uploads/2022/05/1-8-1170x785.jpg",
            "https://philrealtyglobal.com/wp-content/uploads/2021/07/Marymount-Subdivision-House-and-Lot-for-sale-Los-Banos-Laguna-front.jpg?v=1627006564",
            "https://www.ayalaland.com.ph/app/uploads/2020/01/amaia-scapes-urdaneta.jpg",
            "https://lilianrealestate.com/wp-content/uploads/2020/01/Model-Bernice-675x375.jpg",
            "https://www.clickrealestate.ph/wp-content/uploads/2021/10/St-Judith-House-and-Lot-in-antipolo-3.jpg",
            "https://www.dakbayan.ph/davao-house-and-lot/ilumina/house-models/148.15-2story-house/2story-house-148.15.jpg",
            "https://www.dakbayan.ph/davao-house-and-lot/house-and-lot-for-sale-aster-lavista-monte-subdivision/house-and-lot-for-sale-la-vista-monte2.jpg",
            "https://www.camella.com.ph/wp-content/uploads/2022/08/house-and-lot-and-condominiunms-for-sale-in-the-philippines.jpg",
            "https://www.crownasia.com.ph/assets/d487e3abd5/Bellini-in-Valenza-Wide-Shot-House-and-Lot-for-Sale.jpg",
            "https://www.goldensphere.com.ph/wp-content/uploads/2021/08/House-and-Lot-in-Sun-Valley-Country-Club-Pampanga-by-Golden-Sphere-Realty-3-1170x785.jpg",
            "https://homescaperealty.com.ph/wp-content/uploads/2023/02/received_5787769594605456.jpg",
            "https://pics.nuroa.com/filinvest_heights_subdivision_brand_new_house_lot_4br_for_sale_in_quezon_city_2690001636567874386.jpg",
            "https://cdn-cgabk.nitrocdn.com/LIsgTwqewXQDlFToXDBRxWIvDYxcRvoY/assets/static/optimized/rev-1bbdd41/real-estate-ofws/wp-content/uploads/2021/06/felicia.jpg",
            "https://investmanila.com/wp-content/uploads/2021/06/Corner-Modern-Design-House-and-Lot-for-Sale-at-SanMateo-Facade2.jpg",
            "https://www.realestatebaguio.com/uploads/8/7/3/6/8736493/4b_orig.jpg",
            "https://pinnacle.ph/images/properties/P3123864/P3123864.JPG",
            "https://santosknightfrank.com/wp-content/uploads/2022/06/DSC09913_Jaynee-Sacote-min-scaled.jpg",
            "https://casanovarealty.ph/wp-content/uploads/2020/07/pic-2.jpg",
            "https://www.davaopropertyportal.com/wp-content/uploads/2022/01/gsis-house-and-lot-frontview.jpg",
            "https://philrep.com.ph/wp-content/uploads/2019/01/Montebello13.jpg",
            "https://www.allproperties.com.ph/wp-content/uploads/2022/01/House-and-Lot-in-Antipolo-Surrounding-Locations-Find-Properties-scaled-1.jpg",
            "https://rbgcms-alb-prod.ayalaland.com/content/uploads/objects/1676344102279-5079280-rwj674u4sbb.jpg",
            "https://www.realestatebaguio.com/uploads/8/7/3/6/8736493/4b_orig.jpg",
            "https://casanovarealty.ph/wp-content/uploads/2020/07/pic-2.jpg",
            "https://www.clickrealestate.ph/wp-content/uploads/2021/10/St-Judith-House-and-Lot-in-antipolo-2.jpg",
            "https://homesearch.ph/wp-content/uploads/2023/02/326112305_498963195516307_53638192379633387_n.jpg",
            "https://images.surferseo.art/2592b6c6-d09f-4ed0-a532-04520af3e3e9.png",
            "https://i0.wp.com/investinrealestateph.com/wp-content/uploads/2020/08/11101010-AYALA-ALABANG.png?fit=860%2C487&ssl=1",
            "https://www.clhecorp.ph/wp-content/uploads/2022/06/Lynville-Enclave-540x272.png"
        );
        $randomIndex = array_rand($linksArray);
        return $linksArray[$randomIndex];
    }
      
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index-style.css">
    <title>Listing | <?php echo $_GET['viewon']; ?></title>
</head>
<body>
    <div class="app-container">
    <?php include "widget/topbar.php"?>
    <div class="app-content">
        <?php include "widget/sidebar.php"; ?>
        <div class="projects-section">
        <div>
        <main>
            <?php 
                $sql = "SELECT * FROM assets_tb WHERE id = '".$_GET['viewon']."' LIMIT 1;";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
            ?>
            <div class="section" style="">
                <div class="section-content">
                    <div class="product-details">
                        <ul class="product-images">
                            <li class="preview"><img src="<?php echo getRandomImage(); ?>" alt=""></li>
                            <!-- Don't show small pictures if there's only 1 -->
                            <li>
                                <a href="javascript:void(0)"><img src="<?php echo getRandomImage(); ?>" alt=""></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="<?php echo getRandomImage(); ?>" alt=""></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="<?php echo getRandomImage(); ?>" alt=""></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="<?php echo getRandomImage(); ?>" alt=""></a>
                            </li>
                        </ul>
                        <ul class="product-info">
                            <li class="product-name"><?php echo $row['address'].' '.$row['cellsite'].' Barangay '.$row['barangay'].', '.$row['municipality'].' '.$row['region']; ?></li>
                            <li class="product-price"><span>₱ </span><span><?php echo number_format($row['srp'], 2, '.', ',');?></span></li>
                            <li class="product-attributes" style="margin-left: -40px;margin-top:-5px;">
                                <ul class="fields">
                                    <li><div class="field-name">Size: <?php echo $row['size'];?></div></li>
                                    <li><div class="field-name">Type: <?php echo $row['type'];?></div></li>
                                    <li><div class="field-name">Remarks: <?php echo $row['remarks'];?></div></li>
                                    <li><div class="field-name">RGMI: ₱ <?php echo $row['rgmi'];?></div></li>
                                </ul>
                            </li>
                            <li class="product-addtocart">
                                <button onclick="window.location.href='application.php?applyon=<?php echo $row['id']; ?>'">Apply</button>
                            </li>
                            <li class="product-description">
                                <p>This string is randomly generated. The standard default text is designed to ramble about nothing. The standard default text is designed to ramble about nothing. This string is randomly  generated.</p>
                                <p>Whoever evaluates your text cannot evaluate the way you write. Default text creates the illusion of real text. Your design looks awesome by the way. If it is not real text, they will focus on the design.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
            
            <div class="section" style="margin-top: -50px;">
                <div class="section-title"><h2>Check Out More Assets from NHA</h2></div>
                <div class="section-content">
                    <ul class="product-list">
                    <?php 
                        $sql = "SELECT * FROM assets_tb ORDER BY RAND() LIMIT 4;";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                    ?>
                        <li onclick="window.location.href='listing-view.php?viewon=<?php echo $row['id']; ?>'">
                            <a href="javascript:void(0)" class="product">
                                <div class="product-image"><img src="<?php echo getRandomImage(); ?>" alt=""></div>
                                <div class="product-name"><?php echo $row['address'].' '.$row['cellsite'].' Barangay '.$row['barangay'].', '.$row['municipality'].' '.$row['region']; ?></div>
                                <div class="product-price"><span>₱ </span><span><?php echo number_format($row['srp'], 2, '.', ',');?></span></div>
                            </a>
                        </li>
                    <?php
                        }
                    ?>
                    </ul>
                </div>
            </div>
        </main>
        <style scoped>
            @import 'https://fonts.googleapis.com/css?family=Open+Sans&subset=latin-ext';
            * {
            box-sizing: border-box;
            }
            li {
            list-style: none;
            }
            body {
            font-family: "Open Sans", sans-serif;
            font-size: 14px;
            }

            a {
            color: #666;
            text-decoration: none;
            }
            a:hover {
            color: gray;
            text-decoration: underline;
            }

            b, strong, h1, h2, h3, h4, h5, h6 {
            font-weight: bold;
            }

            .hidden {
            display: none;
            }

            .icon {
            width: 18px;
            height: 18px;
            }

            small {
            font-size: 10px;
            color: #666;
            }

            p {
            margin: 0.5em 0;
            }

            img {
            max-width: 100%;
            height: auto;
            }

            header {
            background: #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
            }
            header #brand a, header #menu a, header #cart a {
            display: block;
            padding: 10px;
            margin: 10px;
            }
            header #brand {
            font-weight: bold;
            font-size: 18px;
            }
            header #brand a {
            text-decoration: none;
            }
            header #menu {
            text-align: center;
            display: flex;
            justify-content: center;
            }
            header #menu .trigger {
            display: none;
            }
            @media only screen and (max-width: 959px) {
            header #menu .trigger {
                display: block;
            }
            }
            header #menu .links {
            display: flex;
            justify-content: center;
            }
            @media only screen and (max-width: 959px) {
            header #menu .links {
                display: none;
            }
            }
            header #menu.open {
            background: #fff;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 10;
            border-bottom: 10px solid #000;
            padding-bottom: 20px;
            }
            header #menu.open .links {
            flex-grow: 1;
            margin-left: 58px;
            }
            header #menu.open .trigger {
            display: table;
            }
            header #cart a {
            text-decoration: none;
            position: relative;
            }
            header #cart a:hover .cart-item-count {
            background: #c4c4c4;
            }
            header #cart .cart-item-count {
            position: absolute;
            top: 50%;
            margin-top: -8px;
            left: -16px;
            width: 16px;
            height: 16px;
            line-height: 16px;
            border-radius: 50%;
            background: #aaa;
            font-size: 10px;
            color: #fff;
            text-align: center;
            }

            main .section {
            padding: 40px 0;
            }
            main .section.section-gray {
            background: #eee;
            }
            main .section .section-title {
            text-align: center;
            font-size: 20px;
            margin-bottom: 25px;
            }
            main .section .section-content {
            width: 70%;
            max-width: 1024px;
            margin: 0 auto;
            position: relative;
            }
            @media only screen and (max-width: 959px) {
            main .section .section-content {
                width: calc(100% - 80px);
            }
            }

            /** Product details */
            .product-details {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            }
            .product-details .product-images {
            width: 50%;
            }
            @media only screen and (max-width: 959px) {
            .product-details .product-images {
                width: 100%;
            }
            }
            .product-details .product-images > li {
            display: inline-block;
            width: 64px;
            height: product-dimenstions(64px);
            overflow: hidden;
            margin: 5px;
            }
            .product-details .product-images > li.preview {
            width: 100%;
            height: auto;
            margin: 0;
            }
            .product-details .product-images img {
            display: block;
            width: 100%;
            }
            .product-details .product-info {
            width: 40%;
            margin-left: 10%;
            }
            @media only screen and (max-width: 959px) {
            .product-details .product-info {
                width: 100%;
                margin-left: 0;
            }
            }
            .product-details .product-info > li {
            margin: 10px 0;
            }
            .product-details .product-info .product-name {
            font-size: 20px;
            font-weight: bold;
            }
            .product-details .product-info .product-price {
            font-size: 18px;
            color: #666;
            }
            .product-details .product-info .product-attributes {
            width: 66%;
            margin-top: 40px;
            }
            .product-details .product-info .product-addtocart {
            width: 66%;
            margin: 20px 0 40px;
            }
            @media only screen and (max-width: 959px) {
            .product-details .product-info .product-addtocart {
                width: 33%;
            }
            }
            .product-details .product-info .product-addtocart button {
            width: 100%;
            cursor: pointer;
            background: #000;
            color: #fff;
            display: block;
            border: none;
            outline: none;
            padding: 10px;
            }
            .product-details .product-info .product-addtocart button:hover {
            background: #1a1a1a;
            }
            .product-details .product-info .product-description {
            font-size: 12px;
            }

            /** Product list */
            .product-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            }

            /** Product */
            .product {
            display: block;
            width: 150px;
            height: calc($value + $value * 0.1);
            margin: 5px;
            overflow: hidden;
            text-align: center;
            }
            .product img {
                height: 170px;
            }
            @media only screen and (max-width: 767px) {
            .product {
                width: 280px;
                height: calc($value + $value * 0.1);
            }
            }
            @media only screen and (min-width: 1359px) {
            .product {
                width: 210px;
                height: calc($value + $value * 0.1);
            }
            }
            .product .product-image {
            background: #eee;
            }
            .product .product-image img {
            display: block;
            width: 100%;
            }
            .product .product-name {
            font-weight: bold;
            margin: 10px 0 5px;
            }

            a.product {
            color: #000;
            text-decoration: none;
            }

            /** Fields and forms */
            .fields > li {
            margin-bottom: 10px;
            }
            .fields .field-name {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            }

            label {
            cursor: pointer;
            white-space: nowrap;
            }

        </style>
        <script>
            var Chef = {
    init: function() {
        this.productImagePreview();
        this.menuToggle();
        this.misc();
    },
    
    productImagePreview: function() {
        $(document).on('click', '.product-images li', function() {
            if (!$(this).hasClass('preview')) {
                var src = $(this).find('img').attr('src');
                $('.product-images .preview img').attr('src', src);
            }
        });
    },
    
    menuToggle: function() {
        $(document).on('click', '#menu .trigger', function() {
            // Toggle open and close icons
            $(this).find('img').each(function() {
                if ($(this).hasClass('hidden')) {
                    $(this).removeClass('hidden');
                } else {
                    $(this).addClass('hidden');
                }
            });
            
            // Toggle menu links
            $(this).siblings('.links').stop(true, true).slideToggle(200);
            
            // Toggle open class
            $('#menu').toggleClass('open');
       });
    },
    
    misc: function() {
        // Misc stuff
        
        for (var i = 1; i <= 3; i++) {
            $('.product').parent().eq(0).clone().appendTo('.product-list');
        }
    }
};

$(function() {
    Chef.init();
});
        </script>
        </div>

    </div>
    
</body>
<script src="js/index-script.js"></script>
</html>