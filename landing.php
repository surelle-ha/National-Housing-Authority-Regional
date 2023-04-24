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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/landing-style.css">
    <title>National Housing Authority</title>
</head>
<body>
    <a href="#" class="refer">💡 We have almost 100+ acquired house and lot!</a>        

    <nav>
        <div class="logo">
            <img src="https://scontent.fmnl18-1.fna.fbcdn.net/v/t1.15752-9/251388057_897044520933745_4821668144666608954_n.png?_nc_cat=103&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeHjZRG2lGri8BNqfUYFe6tknXLyPJNedGCdcvI8k150YC6g_LJ59qMK-wyvGFxnHWoSrdvAdeq2U7PnIV-0P3fC&_nc_ohc=ilaoJncLRX4AX964hPD&_nc_ht=scontent.fmnl18-1.fna&oh=03_AdRg9qiPxu0lcNBw-FavuNMLnX8pzo8SIY7mJvYIDHVpVA&oe=645583A1" alt="logoface" class="logoface">
            <a href="landing.php" target="_blank"><h2 class="sitename">National Housing Authority</h2></a>
        </div>

        <div class="menu">
            <a href="contact.php" class="menu-item">Contact Us</a>
            <?php 
            if(isset($_SESSION['logged_status'])){
                ?><a href="account.php" class="primary-button">Account</a><?php
            }else{
                ?>
                <a href="register.php" class="menu-item">Register</a>
                <a href="login.php" class="primary-button">Login</a>
                <?php
            } 
            ?>
        </div>
    </nav>

    <div class="hero">
        <div class="hero-text">
            <h1>Building <span class="color-effect">homes</span>, building <span class="color-effect">communities</span>, building a better <span class="color-effect">future</span>.</h1>
            <p class="subtitle">Can you afford to miss out on this once-in-a-lifetime opportunity?<br>We offer you the most competitive and cost-effective pricing available.</p>
            <div class="hero-cta">
                <a href="index.php" onclick="highlightToolbar()" class="primary-button">Get Started</a>
                <a href="https://nha.gov.ph/programs/" target="_blank" class="secondary-button">How does it work?</a>
            </div>
            <div class="hero-scroll">
                <svg width="23" height="33" viewBox="0 0 23 33" fill="none">
                    <rect x="0.767442" y="0.767442" width="20.7209" height="31.4651" rx="10.3605" stroke="var(--primary)" stroke-width="1.53488"/>
                    <rect x="9" y="8" width="4" height="8" rx="2" fill="var(--primary)"/>
                </svg>
                <p class="sub">Scroll to see more sections</p>
            </div>
        </div>
        <div class="hero-img">
            <img src="https://shmector.com/_ph/7/848213275.png" height="100%" width="100%" alt="">
        </div>
    </div>

    <main>
        <div class="part1" id="why">
            <h2>Why National Housing Authority?</h2>
            <div class="part1-cards">
                <div class="part1-card">
                    <svg width="117" height="117" viewBox="0 0 117 117" fill="none" style="z-index: 5;" class="part1-card-img">
                        <circle cx="58.5" cy="58.5" r="58.5" fill="var(--secondary)"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M89.4669 8.85912L58.0465 63.9419L2.44746 41.7023C9.66585 17.5806 32.0298 0 58.5 0C69.872 0 80.4861 3.24483 89.4669 8.85912Z" fill="var(--primbuttn)" fill-opacity="0.6"/>
                        <path d="M81.5 22.5L57.1395 64.8489L32 53.5" stroke="var(--primary)" stroke-width="7.25581"/>
                    </svg>
                    <p class="subtitle highlight">Addressing housing needs</p>
                    <p>National Housing Authority (NHA) can play a crucial role in addressing the housing needs of the citizens, particularly those who are living in substandard conditions or unable to afford decent housing. Through its policies and programs, the NHA can provide affordable and adequate housing solutions, especially for low-income families and individuals.</p>
                    <div class="part1-card-bg"></div>
                </div>

                <div class="part1-card">
                    <svg width="112" height="114" viewBox="0 0 112 114" fill="none" style="z-index: 5;" class="part1-card-img">
                        <rect width="58" height="58" fill="var(--secondary)"/>
                        <rect x="69" y="25" width="33" height="33" fill="var(--primbuttn)" fill-opacity="0.6"/>
                        <rect x="69" y="71" width="43" height="43" fill="var(--primary)" fill-opacity="0.2"/>
                        <rect x="20" y="70" width="38" height="39" fill="var(--primary)"/>
                    </svg>
                    <p class="subtitle highlight">Ensuring housing standards</p>
                    <p>By regulating the construction and development of housing projects, the NHA can ensure that the buildings meet the necessary safety, health, and environmental standards. This can prevent substandard housing, overcrowding, and the proliferation of informal settlements, which can have negative consequences on the health and well-being of the residents.</p>
                    <div class="part1-card-bg"></div>
                </div>

                <div class="part1-card">
                    <svg width="179" height="89" viewBox="0 0 179 89" fill="none" style="z-index: 5;" class="part1-card-img">
                        <rect y="26" width="154" height="63" fill="var(--primbuttn)" fill-opacity="0.6"/>
                        <path d="M142 15.5V0" stroke="var(--primary)" stroke-width="8"/>
                        <path d="M163 34L178.5 34" stroke="var(--primary)" stroke-width="8"/>
                        <path d="M158 19.5L170.5 7" stroke="var(--primary)" stroke-width="8"/>
                        <path d="M63 54L74.5 65L95.5 44" stroke="var(--primary)" stroke-width="8"/>
                    </svg>
                    <p class="subtitle highlight">Promoting sustainable development</p>
                    <p>The NHA can promote sustainable development by encouraging the use of eco-friendly and energy-efficient building materials and practices. This can contribute to reducing the carbon footprint of the housing sector, reducing energy costs for residents, and promoting a healthier environment. Additionally, sustainable housing can help create more resilient and adaptive communities in the face of natural disasters and climate change.</p>
                    <div class="part1-card-bg"></div>
                </div>
            </div>
        </div>

        <div class="part2" id="how">
            <div class="part2-left">
                <h2>How Does it Work?</h2>
                <p>You’ll get your house and lot in 4 simple steps.</p>
            </div>
            <div class="part2-right">
                <p class="one step">Create an account and login to NHA Portal.</p>
                <p class="two step">Choose the house/lot you want to apply for loan.</p>
                <p class="three step">Fill out the application form in the NHA Portal and provide all necessary requirement including Government IDs.</p>
                <p class="four step">We'll review your profile and check if you're eligible for this asset. We'll contact you anytime so keep your lines and email open.</p>
            </div>
        </div>

        <div class="part4" id="faq">
            <div class="part4-heading">
                <h2>FAQ</h2>
                <p>Answers to some questions you might have.</p>
            </div>
            
            <div class="faq-list">
                <div class="faq">
                    <div class="faq-q">
                        <h3>MANDATE</h3>
                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" class="faq-icon">
                            <path d="M11.5 0L11.5 23" stroke="var(--accent)" stroke-width="6"/>
                            <path d="M23 11.5L-2.38419e-07 11.5" stroke="var(--accent)" stroke-width="6"/>
                        </svg>
                    </div>
                    <div class="faq-a">
                        <p>Under PD 757 dated 31 July 1975. NHA was tasked to develop and implement a comprehensive and integrated housing program which shall embrace, among others, housing development and resettlement, sources and schemes of financing, and delineation of government and private sector participation.</p>
                    </div>
                </div> 

                <div class="faq">
                    <div class="faq-q">
                        <h3>MISSION</h3>
                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" class="faq-icon">
                            <path d="M11.5 0L11.5 23" stroke="var(--accent)" stroke-width="6"/>
                            <path d="M23 11.5L-2.38419e-07 11.5" stroke="var(--accent)" stroke-width="6"/>
                        </svg>
                    </div>
                    <div class="faq-a">
                        <p>By 2025, NHA shall have addressed 23% of the housing need by building affordable, livable, adequate, and inclusive communities with basic services and socio-economic opportunities.</p>
                    </div>
                </div> 

                <div class="faq">
                    <div class="faq-q">
                        <h3>VISION</h3>
                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" class="faq-icon">
                            <path d="M11.5 0L11.5 23" stroke="var(--accent)" stroke-width="6"/>
                            <path d="M23 11.5L-2.38419e-07 11.5" stroke="var(--accent)" stroke-width="6"/>
                        </svg>
                    </div>
                    <div class="faq-a">
                        <p>A viable organization that leads in the provision of comprehensive and well-planned human settlements for the homeless, marginalized, and low-income families, thereby improving their quality of life.</p>
                    </div>
                </div> 

                <div class="faq">
                    <div class="faq-q">
                        <h3>QUALITY POLICY</h3>
                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" class="faq-icon">
                            <path d="M11.5 0L11.5 23" stroke="var(--accent)" stroke-width="6"/>
                            <path d="M23 11.5L-2.38419e-07 11.5" stroke="var(--accent)" stroke-width="6"/>
                        </svg>
                    </div>
                    <div class="faq-a">
                        <p>We pledge to Building Adequate, Livable, Affordable and Inclusive Filipino Communities (BALAI). 
                        “We ensure the availability of basic services, community facilities and access to social and economic opportunities to homeless,   low-income families” is NHA’s commitment to sustainable development in nation building.
                        We pursue comprehensive, integrated and gender responsive housing programs through effective collaboration and partnership with key stakeholders, towards improved housing beneficiaries’ satisfaction.
                        We pledge to a continuing organizational development that harnesses the potentials and promotes the well-being of our employees in the attainment of corporate goals.
                        We adhere to statutory and applicable laws, issuances, policies, rules, and regulations and continually improve our Quality Management System.
                        We affirm that Quality is synonymous with good governance, work excellence with integrity, accountability, and transparency.</p>
                    </div>
                </div> 
            </div>
            <script>
                const faqQuestions = document.querySelectorAll(".faq");
                const faqAnswers = document.querySelectorAll(".faq-a");
                const faqIcons = document.querySelectorAll(".faq-icon");

                faqQuestions.forEach((faqQuestion, index) => {
                faqQuestion.addEventListener('click', () => {
                    faqIcons[index].classList.toggle("expand");
                    faqAnswers[index].classList.toggle("expand");
                });
                });
            </script>
        </div>

        <div class="part5" id="end">
            <h1>Your <span class="color-effect">Journey</span> Shouldn't End Here.</h1>
            <p class="subtitle">Follow me on social media to stay tuned on more projects.</p>
            <a href="#" target="_blank" class="primary-button">Stay Tuned</a>
        </div>

        <div class="footer" id="footer">
            <div class="logo">
                <img src="https://scontent.fmnl18-1.fna.fbcdn.net/v/t1.15752-9/251388057_897044520933745_4821668144666608954_n.png?_nc_cat=103&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeHjZRG2lGri8BNqfUYFe6tknXLyPJNedGCdcvI8k150YC6g_LJ59qMK-wyvGFxnHWoSrdvAdeq2U7PnIV-0P3fC&_nc_ohc=ilaoJncLRX4AX964hPD&_nc_ht=scontent.fmnl18-1.fna&oh=03_AdRg9qiPxu0lcNBw-FavuNMLnX8pzo8SIY7mJvYIDHVpVA&oe=645583A1" alt="logoface" class="logoface">
                <a href="" target="_blank"><h2 class="sitename reversed">National Housing Authority</h2></a>
            </div>
            <div class="footer-cols">
                <div class="footer-col">
                    <p style="margin: 0;">Visualize your color choices.</p>
                </div>

                <div class="footer-col">
                    <a href="#" class="menu-item reversed">About</a>
                    <!-- <a href="#" class="menu-item reversed">Blog</a> -->
                    <a href="#" class="menu-item reversed">Contact</a>
                </div>

                <div class="footer-col">
                    <a href="" class="menu-item reversed" target="_blank">Facebook</a>
                    <a href="" target="_blank" class="menu-item reversed">Twitter</a>
                    <a href="" target="_blank" class="menu-item reversed">YouTube</a>
                    <a href="" target="_blank" class="menu-item reversed">Official NHA</a>
                </div>
            </div>
            <p class="sub">Made by NHA Dev Team</p>
        </div>

        <div id="tip-bar">
            <button id="close-btn">&times;</button>
            <p><b>Tip:</b> Press the Spacebar to randomize faster!</p>
        </div>

    </main>
</body>
<script src="js/landing-script.js"></script>
</html>