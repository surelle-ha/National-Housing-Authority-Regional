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
    include "php/applicationmanager.php";

    /* USER VERIFY */
    if(isset($_SESSION['logged_status'])){
        // Do Nothing
    }else{
        header('location: landing.php');
    }

    $sql = "SELECT COUNT(*) as count FROM assets_tb WHERE id = '".$_GET['applyon']."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $count = $row['count'];

    if ($count > 0) {

    } else {
      header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/application-style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <title>Application</title>
</head>
<body>
<header class="header">
  <h1 class="toptitle">National Housing Authority Application Form</h1>
  <div class="topbuttons buttons"><a class="topbutton button" href="admin.php" title="test" target="_blank">Check Application Status</a></div>
</header>
<div class="content">
  <div class="content__inner">
    <div class="container" style="display: none;">
      <form class="pick-animation fadeanimation">
        <div class="form-part">
          <div class="textnormal designpagelayout">
            <select class="animationselect form-control">
              <option value="scaleIn">ScaleIn</option>
              <option value="scaleOut">ScaleOut</option>
              <option value="slideHorz">SlideHorz</option>
              <option value="slideVert">SlideVert</option>
              <option value="fadeIn" selected>FadeIn</option>
            </select>
          </div>
        </div>
      </form>
      <h2 class="content__title">Click on steps or 'Prev' and 'Next' buttons</h2>
    </div>
    <div class="container overflow-hidden">
      <div class="multisteps-form">
        <div class="part">
          <div class="page middle designmo sayonato testdesign">
            <div class="page-progress">
              <button class="page-form js-active" type="button" title="User Info">Basic Information</button>
              <button class="page-form" type="button" title="Address">Address</button>
              <button class="page-form" type="button" title="Order Info">Requirements</button>
              <button class="page-form" type="button" title="Comments">Government IDs</button>
              <button class="page-form" type="button" title="Comments">Additional</button>
              <button class="page-form" type="button" title="Comments">T&Cs</button>
            </div>
          </div>
        </div>
        <div class="part">
          <div class="page middle designpagelayout">
            <form class="page-form-form" method="POST">
              <div class="page-panel shadow spacing123 rounded white js-active" data-animation="scaleIn">
                <h3 class="pagetitle">Basic Information</h3>
                <div class="pagecontent">
                  <div class="form-part test">
                    <div class="page small6">
                      <input class="forminput form-control" type="text" name="fname" placeholder="First Name" required/>
                    </div>
                    <div class="page small6 test small0">
                      <input class="forminput form-control" type="text" name="lname" placeholder="Last Name" required/>
                    </div>
                  </div>
                  <div class="form-part test">
                    <div class="page small6">
                      <input class="forminput form-control" type="date" id="birthday" name="birthday" required/>
                    </div>
                    <div class="page small6 test small0">
                      <select class="forminput form-control" name="marital" required>
                        <option value="" disabled selected>Select Status</option>
                        <option value="Married">Married</option>
                        <option value="Single">Single</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-part test">
                    <div class="page small6">
                      <input class="forminput form-control" type="email" name="email" placeholder="Email" required/>
                    </div>
                    <div class="page small6 test small0">
                      <input class="forminput form-control" type="text" name="contact" placeholder="Contact Number" required/>
                    </div>
                  </div>
                  <div class="button-part pagemydesign test">
                    <button class="button buttonblue" onclick="window.location.href='index.php'">Home</button>
                    <button class="button buttonblue designmo js-button-next" type="button" title="Next">Next</button>
                  </div>
                </div>
              </div>
              <div class="page-panel shadow spacing123 rounded white" data-animation="scaleIn">
                <h3 class="pagetitle">Your Address</h3>
                <div class="pagecontent">
                  <div class="form-part test">
                    <div class="horizontalmilan">
                      <input class="forminput form-control" type="text" name="address1" placeholder="Address 1" required/>
                    </div>
                  </div>
                  <div class="form-part test">
                    <div class="horizontalmilan">
                      <input class="forminput form-control" type="text" name="address2" placeholder="Address 2" required/>
                    </div>
                  </div>
                  <div class="form-part test">
                    <div class="page small6">
                      <input class="forminput form-control" type="text" name="city" placeholder="City" required/>
                    </div>
                    <div class="textnormal1 textsmall test small0">
                      <select class="multisteps-form__select form-control" name="state" required>
                        <option selected disabled>State</option>
                        <option value="Ilocos Region">Ilocos Region</option>
                        <option value="Cagayan Valley">Cagayan Valley</option>
                        <option value="Central Luzon">Central Luzon</option>
                        <option value="CALABARZON">CALABARZON</option>
                        <option value="MIMAROPA">MIMAROPA</option>
                        <option value="Bicol Region">Bicol Region</option>
                        <option value="Western Visayas">Western Visayas</option>
                        <option value="Central Visayas">Central Visayas</option>
                        <option value="Eastern Visayas">Eastern Visayas</option>
                        <option value="Zamboanga Peninsula">Zamboanga Peninsula</option>
                        <option value="Northern Mindanao">Northern Mindanao</option>
                        <option value="Davao Region">Davao Region</option>
                        <option value="SOCCSKSARGEN">SOCCSKSARGEN</option>
                        <option value="Cordillera Administrative Region (CAR)">Cordillera Administrative Region (CAR)</option>
                        <option value="National Capital Region (NCR)">National Capital Region (NCR)</option>
                        <option value="Bangsamoro Autonomous Region in Muslim Mindanao (BARMM)">Bangsamoro Autonomous Region in Muslim Mindanao (BARMM)</option>
                        <option value="Caraga">Caraga</option>
                      </select>
                    </div>
                    <div class="textnormal1 textsmall test small0">
                      <input class="forminput form-control" type="text" name="zip" placeholder="Zip" required/>
                    </div>
                  </div>
                  <div class="button-part pagemydesign test">
                    <button class="button buttonblue js-button-prev" type="button" title="Prev">Prev</button>
                    <button class="button buttonblue designmo js-button-next" type="button" title="Next">Next</button>
                  </div>
                </div>
              </div>
              <div class="page-panel shadow spacing123 rounded white" data-animation="scaleIn">
                <h3 class="pagetitle">Requirements</h3>
                <div class="pagecontent">
                  <div class="part">
                    <div class="page middle-page test">
                      <div class="card shadow">
                        <div class="card-body">
                          <h5 class="card-title">Birth Certificaiton</h5>
                          <p class="card-text">You don't have this? <a style="text-decoration: underline;color:blue;" href="https://psa.gov.ph/">Get one</a>.</p><a class="button buttonblue" href="#" title="Item Link">Upload Button</a>
                        </div>
                      </div>
                    </div>
                    <div class="page middle-page test">
                      <div class="card shadow">
                        <div class="card-body">
                          <h5 class="card-title">National ID</h5>
                          <p class="card-text">You don't have this? <a style="text-decoration: underline;color:blue;" href="https://www.philsys.gov.ph/">Get one</a>.</p><a class="button buttonblue" href="#" title="Item Link">Upload Button</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="part">
                    <div class="button-part pagemydesign test page">
                      <button class="button buttonblue js-button-prev" type="button" title="Prev">Prev</button>
                      <button class="button buttonblue designmo js-button-next" type="button" title="Next">Next</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="page-panel shadow spacing123 rounded white" data-animation="scaleIn">
                <h3 class="pagetitle">Government IDs</h3>
                <div class="pagecontent">
                  <div class="part">
                    <div class="page middle-page test">
                      <div class="card shadow">
                        <div class="card-body">
                          <h5 class="card-title">NBI/Police Clearance</h5>
                          <p class="card-text">You don't have this? <a style="text-decoration: underline;color:blue;" href="https://clearance.nbi.gov.ph/">Get one</a>.</p><a class="button buttonblue" href="#" title="Item Link">Upload Button</a>
                        </div>
                      </div>
                    </div>
                    <div class="page middle-page test">
                      <div class="card shadow">
                        <div class="card-body">
                          <h5 class="card-title">UMID ID</h5>
                          <p class="card-text">You don't have this? <a style="text-decoration: underline;color:blue;" href="https://pagibigfund.gov.ph/">Get one</a>.</p><a class="button buttonblue" href="#" title="Item Link">Upload Button</a>
                        </div>
                      </div>
                    </div>
                    <div class="page middle-page test">
                      <div class="card shadow">
                        <div class="card-body">
                          <h5 class="card-title">SSS ID</h5>
                          <p class="card-text">You don't have this? <a style="text-decoration: underline;color:blue;" href="https://www.sss.gov.ph/">Get one</a>.</p><a class="button buttonblue" href="#" title="Item Link">Upload Button</a>
                        </div>
                      </div>
                    </div>
                    <div class="page middle-page test">
                      <div class="card shadow">
                        <div class="card-body">
                          <h5 class="card-title">TIN ID</h5>
                          <p class="card-text">You don't have this? <a style="text-decoration: underline;color:blue;" href="https://www.bir.gov.ph/">Get one</a>.</p><a class="button buttonblue" href="#" title="Item Link">Upload Button</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="part">
                    <div class="button-part pagemydesign test page">
                      <button class="button buttonblue js-button-prev" type="button" title="Prev">Prev</button>
                      <button class="button buttonblue designmo js-button-next" type="button" title="Next">Next</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="page-panel shadow spacing123 rounded white" data-animation="scaleIn">
                <h3 class="pagetitle">Supporting Documents</h3>
                <div class="pagecontent">
                  <div class="part">
                    <div class="page middle-page test">
                      <div class="card shadow">
                        <div class="card-body">
                          <h5 class="card-title">Housing Application Form</h5>
                          <p class="card-text">You don't have this? <a style="text-decoration: underline;color:blue;" href="https://nha.gov.ph/wp-content/uploads/2023/02/Housing-Application-Form.pdf">Get one</a>.</p><a class="button buttonblue" href="#" title="Item Link">Upload Button</a>
                        </div>
                      </div>
                    </div>
                    <div class="page middle-page test">
                      <div class="card shadow">
                        <div class="card-body">
                          <h5 class="card-title">Proof of Billing</h5>
                          <p class="card-text">We need your proof of billing with same address.</p><a class="button buttonblue" href="#" title="Item Link">Upload Button</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="part">
                    <div class="button-part pagemydesign test page">
                      <button class="button buttonblue js-button-prev" type="button" title="Prev">Prev</button>
                      <button class="button buttonblue designmo js-button-next" type="button" title="Next">Next</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="page-panel shadow spacing123 rounded white" data-animation="scaleIn">
                <h3 class="pagetitle">Terms & Conditions</h3>
                <div class="pagecontent">
                  <div class="form-part test">
                    <textarea class="page-textarea form-control" placeholder="Additional Comments and Requirements" style="resize: none;height: 600px;">
Welcome to the National Housing Authority Philippines website. By accessing or using our website, you agree to comply with and be bound by the following terms and conditions of use. If you disagree with any part of these terms and conditions, please do not use our website.

The content of this website is for general information purposes only and is subject to change without notice. While we strive to keep the information up to date and correct, we make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability, or availability with respect to the website or the information, products, services, or related graphics contained on the website for any purpose. Any reliance you place on such information is therefore strictly at your own risk.

In no event will we be liable for any loss or damage including without limitation, indirect or consequential loss or damage, or any loss or damage whatsoever arising from loss of data or profits arising out of, or in connection with, the use of this website.

This website contains material which is owned by or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance, and graphics. Reproduction is prohibited other than in accordance with the copyright notice, which forms part of these terms and conditions.

Unauthorized use of this website may give rise to a claim for damages and/or be a criminal offense.

From time to time, this website may also include links to other websites. These links are provided for your convenience to provide further information. They do not signify that we endorse the website(s). We have no responsibility for the content of the linked website(s).

Your use of this website and any dispute arising out of such use of the website is subject to the laws of the Philippines.

Please note that this is just an example of terms and conditions and you may need to customize it according to your specific needs and requirements. It is recommended to seek legal advice to ensure that your terms and conditions are legally binding and enforceable.
                    </textarea>
                  </div>
                  <div class="button-part pagemydesign test">
                    <input type="hidden" name="assetid" value="<?php echo $_GET['applyon']; ?>">
                    <button class="button buttonblue js-button-prev" type="button" title="Prev">Prev</button>
                    <button class="button button-success designmo" type="submit" title="Send" name="application_sent">Apply Now</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/application-script.js"></script>
</html>