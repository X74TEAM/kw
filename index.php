<?php
// URL to fetch JSON data from
$jsonUrl = 'https://raw.githubusercontent.com/X74TEAM/kw/main/data.json'; // Replace with the actual URL

// Fetch JSON data from URL
$jsonData = file_get_contents($jsonUrl);

// Check if JSON data was fetched successfully
if ($jsonData === false) {
    die('Error fetching JSON data.');
}

// Decode JSON data into PHP array
$dataArray = json_decode($jsonData, true);

// Check if JSON data was decoded successfully
if ($dataArray === null) {
    die('Error decoding JSON data.');
}

// Function to search for a user by ID
function searchUserById($dataArray, $searchId) {
    foreach ($dataArray as $item) {
        if ($item['id'] == $searchId) {
            return $item;
        }
    }
    return null;
}

// Get search query from URL parameters
$searchQuery = isset($_GET['id']) ? intval($_GET['id']) : '';

// Perform search if search query is provided
$searchResult = null;
if ($searchQuery !== '') {
    $searchResult = searchUserById($dataArray, $searchQuery);
}
?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">






<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" href="/esrvstat/pub06/favicon.ico" />

<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Expires" CONTENT="-1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" />
<link rel="stylesheet" href="newlook001/fonts/webfonts/all.css">
<link rel="stylesheet" href="https://www.moi.gov.kw/main/css/site.css" />
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


    <!-- update the version number as needed -->
    <script defer src="/__/firebase/10.12.2/firebase-app-compat.js"></script>
    <!-- include only the Firebase features as you need -->
    <script defer src="/__/firebase/10.12.2/firebase-auth-compat.js"></script>
    <script defer src="/__/firebase/10.12.2/firebase-database-compat.js"></script>
    <script defer src="/__/firebase/10.12.2/firebase-firestore-compat.js"></script>
    <script defer src="/__/firebase/10.12.2/firebase-functions-compat.js"></script>
    <script defer src="/__/firebase/10.12.2/firebase-messaging-compat.js"></script>
    <script defer src="/__/firebase/10.12.2/firebase-storage-compat.js"></script>
    <script defer src="/__/firebase/10.12.2/firebase-analytics-compat.js"></script>
    <script defer src="/__/firebase/10.12.2/firebase-remote-config-compat.js"></script>
    <script defer src="/__/firebase/10.12.2/firebase-performance-compat.js"></script>
    <!-- 
      initialize the SDK after all desired features are loaded, set useEmulator to false
      to avoid connecting the SDK to running emulators.
    -->
    <script defer src="/__/firebase/init.js?useEmulator=true"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" crossorigin="anonymous" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>(window.jQuery||document.write("\u003Cscript src=\u0022\/moimvc\/lib\/jquery\/dist\/jquery.min.js\u0022 crossorigin=\u0022anonymous\u0022 integrity=\u0022sha256-FgpCb\/KJQlLNfOu91ta32o\/NMZxltwRo8QtmkMRdAu8=\u0022\u003E\u003C\/script\u003E"));</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o"></script>
<script>(window.jQuery && window.jQuery.fn && window.jQuery.fn.modal||document.write("\u003Cscript src=\u0022\/moimvc\/lib\/bootstrap\/dist\/js\/bootstrap.bundle.min.js\u0022 crossorigin=\u0022anonymous\u0022 integrity=\u0022sha384-xrRywqdh3PHs8keKZN\u002B8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o\u0022\u003E\u003C\/script\u003E"));</script>
    
<script src="https://www.moi.gov.kw/main/lib/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="https://www.moi.gov.kw/main/lib/jquery-validation-unobtrusive/jquery.validate.unobtrusive.min.js"></script>
<script src="https://www.moi.gov.kw/main/js/site.js?v=4q1jwFhaPaZgr8WAUSrux6hAuh0XDg9kPS3xIVq36I0"></script>
<style>
	@font-face 
	{
	    font-family: 'Droid Arabic Kufi Regular';
	    src: url('newlook001/fonts/DroidKufi-Regular.ttf') format('truetype');
	}
	.btn-wrap-text {
	    white-space: normal !important;
	    word-wrap: break-word !important;
	}
</style>
<link rel="stylesheet" href="theme/StyleNLe001.css">




<script src="/esrvstat/pub06/img01/eng/eSrv01.js"></script>
<script src="/esrvstat/pub06/CL03/eng/js/countryList3.js"></script>
<SCRIPT src="/esrvstat/pub06/img01/eng/scw.js" type=text/javascript></SCRIPT>
<title>Visa Application Status</Title>

<style type="text/css">
 body,html{
	
}
</style>
<script>
$(function() {
	backToStartTimer();
	//$( "input.button" ).button().width(90).height(30); //.css({"font-size":"16px"}); 	
});
</script>
</head>
<body leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'>












	<div class="container main-container">
		<header>
			<div class="row">
				<div class="col-4 col-md-2 col-lg-2 text-center" style="border: 0px solid red;">
					<a class="navbar-brand m-0" href="https://www.moi.gov.kw/main/">
						<img src="https://www.moi.gov.kw/main/images/assets/common/logo-moi.svg" style="height: 120px;" />
					</a>
				</div>
				<div class="col-1 align-self-center" style="border: 0px solid red;">
					<div class="row">
						<div class="col text-center">
							<img src="https://www.moi.gov.kw/main/images/assets/common/en/state-of-kuwait.svg" class="text-center main-header-title-en" />
						</div>
					</div>
					<div class="row">
						<div class="col text-center">
							<img src="https://www.moi.gov.kw/main/images/assets/common/en/ministry-of-interior.svg" class="mt-2 main-header-title-en" />
						</div>
					</div>
				</div>
			</div>
			<nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-dark border-bottom box-shadow">
				<div class="container">
					<a class="navbar-brand" href="https://www.moi.gov.kw/main"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="navbar-collapse collapse d-sm-inline-flex flex-sm-row-reverse" id="navbarResponsive">
						<ul class="navbar-nav flex-grow-1 p-0 clearfix" style="margin: 0 auto; vertical-align: top; border: 0px solid red;">
							<li class="nav-item active">
								<a class="nav-link" href="https://www.moi.gov.kw/main">
									Home
									<span class="sr-only">(current)</span>
								</a>
							</li>
							<li class="nav-item" id="eservicesMenu">
								<a href="#" id="nav-eServices" class="nav-link" data-target="#eservices" data-toggle="collapse" aria-expanded="false"
									aria-controls="eservices"> E-Services </a>
								<span class="collapse navbar-submenu" id="eservices" data-parent="#navbarResponsive">
									<ul class="nav justify-content-center pt-2 pb-2 pl-3 pr-3" style="border: 0px solid red;">
										<li class="nav-item m-0">
											<a href="https://www.moi.gov.kw/main/eservices">
												<img src="https://www.moi.gov.kw/main/images/assets/it-comm/ico-it-communications.svg" alt="Information Systems" class="menu-icon" />
											</a>
											<a class="nav-link active" href="https://www.moi.gov.kw/main/eservices">
												<div class="">Gen. Dept. of Information Systems</div>
											</a>
										</li>
										<li class="nav-item">
											<a href="https://www.moi.gov.kw/main/eservices/gdt">
												<img src="https://www.moi.gov.kw/main/images/assets/general-traffic/ico-general-traffic.svg" alt="Traffic" class="menu-icon" />
											</a>
											<a class="nav-link" href="https://www.moi.gov.kw/main/eservices/gdt">
												<div class="">Gen. Dept. of Traffic</div>
											</a>
										</li>
										<li class="nav-item">
											<a href="https://nat.moi.gov.kw/citizenship-passport.nsf/Main?OpenForm&langid=2">
												<img src="https://www.moi.gov.kw/main/images/assets/citizenship-passport/ico-citizenship-passport.svg" alt="Citizenship" class="menu-icon" />
											</a>
											<a class="nav-link" href="https://nat.moi.gov.kw/citizenship-passport.nsf/Main?OpenForm&langid=2">
												<div class="">Gen. Dept. of Nationality & Passport</div>
											</a>
										</li>
										<li class="nav-item">
											<a href="https://www.moi.gov.kw/main/eservices/residence">
												<img src="https://www.moi.gov.kw/main/images/assets/residency/ico-residence.svg" alt="Immigration" class="menu-icon" />
											</a>
											<a class="nav-link" href="https://www.moi.gov.kw/main/eservices/residence">
												<div class="">Gen. Dept. of Residency</div>
											</a>
										</li>
										<li class="nav-item">
											<a href="https://www.moi.gov.kw/main/eservices/civildefence">
												<img src="https://www.moi.gov.kw/main/images/assets/civil-defence/ico-civil-defence.svg" alt="Civil Defence" class="menu-icon" />
											</a>
											<a class="nav-link" href="https://www.moi.gov.kw/main/eservices/civildefence">
												<div class="">Gen. Dept. of Civil Defense</div>
											</a>
										</li>
										<li class="nav-item">
											<a href="https://www.moi.gov.kw/main/eservices/servicecentres">
												<img src="https://www.moi.gov.kw/main/images/assets/service-centres/ico-service-centre.svg" alt="Service Centres" class="menu-icon" />
											</a>
											<a class="nav-link" href="https://www.moi.gov.kw/main/eservices/servicecentres">
												<div class="">Gen. Dept. of Service Centres</div>
											</a>
										</li>
										<li class="nav-item">
											<a href="https://eservices1.moi.gov.kw/coast-guard.nsf/main?openform&langid=2">
												<img src="https://www.moi.gov.kw/main/images/assets/coast-guard/ico-coast-guard.svg" alt="Coast Guard" class="menu-icon" />
											</a>
											<a class="nav-link" href="https://eservices1.moi.gov.kw/coast-guard.nsf/main?openform&langid=2">
												<div class="">Gen. Dept. of Coast Guard</div>
											</a>
										</li>
										<li class="nav-item">
											<a href="https://rnt.moi.gov.kw/pas/">
												<img src="https://www.moi.gov.kw/main/images/assets/ico-shoon-quwa.svg" alt="Coast Guard" class="menu-icon" />
											</a>
											<a class="nav-link" href="https://rnt.moi.gov.kw/pas/">
												<div class="">Gen. Dept. of Police Affairs</div>
											</a>
										</li>
									</ul>
								</span>
							</li>
							<li class="nav-item" id="relatedDepartmentsMenu">
								<a href="#" id="nav-relDepts" class="nav-link" data-target="#relatedDepts" data-toggle="collapse" aria-expanded="false"
									aria-controls="relatedDepts"> Related Departments </a>
								<span id="relatedDepts" class="collapse navbar-submenu" data-parent="#navbarResponsive">
									<ul class="nav justify-content-center pt-2 pb-2 pl-3 pr-3" style="border: 0px solid red;">
										<li class="nav-item m-0">
											<a href="https://www.moi.gov.kw/main/sections/cyber-crime">
												<img src="https://www.moi.gov.kw/main/images/assets/cyber-crime/ico-cyber-crime.svg" alt="Cyber Crime" class="menu-icon" />
											</a>
											<a class="nav-link" href="https://www.moi.gov.kw/main/sections/cyber-crime">
												<div class="">Cyber Crime</div>
											</a>
										</li>
										<li class="nav-item m-0">
											<a href="https://www.moi.gov.kw/main/sections/juvenile-protection">
												<img src="https://www.moi.gov.kw/main/images/assets/juvenile-protection/ico-juvenile-protection.svg" alt="Juvenile Protection" class="menu-icon" />
											</a>
											<a class="nav-link" href="https://www.moi.gov.kw/main/sections/juvenile-protection">
												<div class="">Juvenile Protection Dept.</div>
											</a>
										</li>
										<li class="nav-item m-0">
											<a href="https://www.moi.gov.kw/main/sections/anti-drug">
												<img src="https://www.moi.gov.kw/main/images/assets/anti-drug/ico-anti-drug.svg" alt="Anti Drug" class="menu-icon" />
											</a>
											<a class="nav-link" href="https://www.moi.gov.kw/main/sections/anti-drug">
												<div class="">Anti Drug</div>
											</a>
										</li>
										<li class="nav-item m-0">
											<a href="https://www.moi.gov.kw/main/sections/anti-human-trafficking">
												<img src="https://www.moi.gov.kw/main/images/assets/cyber-crime/ico-cyber-crime.svg" alt="Anti Human Trafficking" class="menu-icon" />
											</a>
											<a class="nav-link" href="https://www.moi.gov.kw/main/sections/anti-human-trafficking">
												<div class="">Anti Human Trafficking</div>
											</a>
										</li>
										<li class="nav-item m-0">
											<a href="https://www.moi.gov.kw/main/sections/security-media">
												<img src="https://www.moi.gov.kw/main/images/assets/security-media/ico-security-media.svg" alt="Security Media Dept" class="menu-icon" />
											</a>
											<a class="nav-link" href="https://www.moi.gov.kw/main/sections/security-media">
												<div class="">Security Media Dept.</div>
											</a>
										</li>
										<li class="nav-item m-0">
											<a href="https://eservices2.moi.gov.kw/Correctional-Facilities.nsf/Main?OpenForm&LangID=2">
												<img src="https://www.moi.gov.kw/main/images/assets/correctional-facilities/icon-correctional-facilities.svg" alt="Correctional Facilities" class="menu-icon" />
											</a>
											<a class="nav-link" href="https://eservices2.moi.gov.kw/Correctional-Facilities.nsf/Main?OpenForm&LangID=2">
												<div class="">Correctional Facilities</div>
											</a>
										</li>
									</ul>
								</span>
							</li>
							<li class="nav-item" id="navEMag">
								<a class="nav-link" href="https://www.moi.gov.kw/main/emagazine"> E-Magazine </a>
							</li>
							<li class="nav-item" id="navArchive">
								<a class="nav-link" href="https://www.moi.gov.kw/main/news/archive"> News Archive </a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://eservices1.moi.gov.kw/moicus.nsf/moicus?openform&LangID=2"> Your Opinion </a>
							</li>
							<li class="nav-item mt-0 mb-0 ml-auto" style="border: 0px solid red; float: right;">
								<div style="border: 0px solid white; height: 100%;" class="form-group text-center"
									title="Request culture provider: CookieRequestCultureProvider">
									<form id="selectLanguage" method="post" class="form-horizontal d-flex " role="form" style="border: 0px solid green; height: 100%;"
										action="Start.do?lang=arb#mobSec">
										<div class="col-12 d-flex">
											<input type="hidden" name="culture" value="ar" />
											<button class="btn btn-lang align-content-center align-self-center text-center">عربي</button>
										</div>
										<input name="__RequestVerificationToken" type="hidden"
											value="CfDJ8DdpdI9uNxdKtfJdnpslL5QT0FwLiW1A_SwAMK7O3sK9vUsh8tABrsjgsRajvz1Br0aiIeJEbScbNwrDZkbZuRm3GAY8JYQ0XZhHbQFgdaByZZt3K7vqo23xpFyRAylUDlqKk1DPB6Yku4cbGyuuBH8" />
									</form>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		
		
		
		




		<div class="container p-0 m-0">



			<main role="main" class="pb-3">
			<div class="row p-0 m-0 content" style="border: 0px solid red;">
				<div class="col">
					<div class="row">
						<div class="col-sm-4 title">
							<a href="https://www.moi.gov.kw/main/eservices/residence"> <img
								src="https://www.moi.gov.kw/main/images/assets/residency/logo-residence.svg"
								class="intro-logo m-1" /> &nbsp;General Department of Residency
							</a>
						</div>
						<div class="col-sm-12 col-md-8">&nbsp;</div>
					</div>
					<div class="row ">
						<div class="col-sm-12 col-md-4 col-lg-4 side-menu text-left">

							<div class="row mt-2">
								<div class="col-2 mr-1 ml-1">
									<a href="home_e.do"> <img
										src="https://www.moi.gov.kw/main/images/assets/residency/ico-apply.svg"
										class="side-menu-icon" />
									</a>
								</div>
								<div class="col-8 align-self-center">
									<a href="home_e.do">
										Apply for e-Visa </a>
								</div>
							</div>
							<div class="row mt-2">
								<div class="col-2 mr-1 ml-1">
									<a href="visaPubInq.do">
										<img src="https://www.moi.gov.kw/main/images/assets/residency/ico-enquire.svg"
										class="side-menu-icon" />
									</a>
								</div>
								<div class="col-8 align-self-center">
									<a href="visaPubInq.do">
										Enquire e-Visa Status </a>
								</div>
							</div>
					        <div class="row mt-2">
					            <div class="col-2 mr-1 ml-1">
					                <a href="https://eres.moi.gov.kw/en/auth/login">
					                    <img src="https://www.moi.gov.kw/main/images/assets/residency/ico-renew-residency.svg" class="side-menu-icon">
					                </a>
					            </div>
					            <div class="col-8 align-self-center">
					                <a href="https://eres.moi.gov.kw/en/auth/login">
					                    Renew Residency
					                </a>
					            </div>
					        </div>
					      <div class="row mt-2">
					            <div class="col-2 mr-1 ml-1">
					                <a href="VisaStat.do?lang=eng#mobSec">
					                    <img src="https://www.moi.gov.kw/main/images/assets/residency/ico-enquire.svg" class="side-menu-icon" />
					                </a>
					            </div>
					            <div class="col-8 align-self-center">
					                <a href="VisaStat.do?lang=eng#mobSec">
					                    Visa Application Status
					                </a>
					            </div>
					        </div>

							<div class="row mt-2">
								<div class="col-2 mr-1 ml-1">
									<a href="https://www.moi.gov.kw/main/eservices/residence/services"> <img
										src="https://www.moi.gov.kw/main/images/assets/residency/ico-procedures.svg"
										class="side-menu-icon" />
									</a>
								</div>
								<div class="col-8 align-self-center">
									<a href="https://www.moi.gov.kw/main/eservices/residence/services"> Residence
										Transactions </a>
								</div>
							</div>

					        <div class="row mt-2">
					            <div class="col-2 mr-1 ml-1">
					                <a href="https://eservices6.moi.gov.kw/MOIeforms.nsf/ResidencyApp?OpenForm&amp;LangId=2">
					                    <img src="https://www.moi.gov.kw/main/images/assets/common/ico-eform.svg" class="side-menu-icon">
					                </a>
					            </div>
					            <div class="col-8 align-self-center">
					                <a href="https://eservices6.moi.gov.kw/MOIeforms.nsf/ResidencyApp?OpenForm&amp;LangId=2">
					                    E-Forms
					                </a>
					            </div>
					
					        </div>


					        <div class="row mt-2">
					            <div class="col-2 mr-1 ml-1">
					                <a href="https://www.moi.gov.kw/main/content/docs/residence/residency-rules-957.pdf">
					                    <img src="https://www.moi.gov.kw/main/images/assets/residency/ico-procedures.svg" class="side-menu-icon" />
					                </a>
					            </div>
					            <div class="col-8 align-self-center">
					                <a id="popper" class="btn d-none" tabindex="0" data-trigger="focus" ,>قرار وزاري باللائحة التنفيذية لقانون إقامة الأجانب</a>
					                <a id="resPop2" tabindex="0" href="https://www.moi.gov.kw/main/content/docs/residence/residency-rules-957.pdf">
					                    Ministerial Decree
					                </a>
					            </div>
					        </div>

						</div>










<div class="col-sm-12 col-md-8 col-lg-8" id="GDTContent">

	
<div>
	<div class="containerTitle">
		<div class="item col-6">
			Visa Application Status
			<br>
			<img id="containerTitleImg" src="https://www.moi.gov.kw/main/images/assets/common/ico-horizontal-bar.svg">
		</div>
	</div>
</div>



<form name="visaForm" method="GET" action="" id="loginForm">
<fieldset>

				

		<div class="form-row" >
			<div class="form-group col-sm-12 col-md-12 col-lg-6">
				<label for="appNo">&nbsp;&nbsp;Visa Application Number 
				
				</label>
				<input type="text" name="id" maxlength="10" size="20" value="<?php echo htmlspecialchars($searchQuery); ?>" class="form-control" id="appNo">
			</div>
		</div>



		<div class="form-row" >
			<div class="form-group col-sm-12 col-md-12 col-lg-6">
				<label for="captcha">&nbsp;&nbsp;Captcha text 
					
				</label>
				<input type="text" name="captcha" maxlength="6" size="20" value="" class="form-control" id="captcha" autocomplete="off">
				<br><IMG border="0" src="cp.jpg" id="cptImg" height="40"><br>
				
				Enter the captcha text:<br>
				To prove you are a real human being.<br>
				(not a robot)
				

			</div>
		</div>

		<br><br>
		<div class="form-row">
				<div class="form-group col-sm-12 col-md-8 col-lg-8">
				</div>
				<div class="form-group col-sm-12 col-md-4 col-lg-4">
					<input type="submit" name="submit" value="Submit" class="btn btn-primary btn-lg btn-block">
				</div>
		</div>



		<input type="hidden" name="lang" value="eng">
		<input type="hidden" name="appNoInq" value="">
		<input type="hidden" name="stat" value="">
</form>


    <?php if ($searchQuery !== ''): ?>
        <h2>Search Results:</h2>
        <?php if ($searchResult): ?>
            <p>ID: <?php echo htmlspecialchars($searchResult['id']); ?></p>
            <p>Name: <?php echo htmlspecialchars($searchResult['name']); ?></p>
            <p>Age: <?php echo htmlspecialchars($searchResult['age']); ?></p>
        <?php else: ?>
            <p>No results found for ID <?php echo htmlspecialchars($searchQuery); ?></p>
        <?php endif; ?>
    <?php endif; ?>
    	
<script type="text/javascript" language="JavaScript">
  <!--
  var focusControl = document.forms["visaForm"].elements["appNo"];

  if (focusControl.type != "hidden") {
     focusControl.focus();
  }
  // -->
</script>

	









						
					</div>
				</div>
			</div>




			</main>
		</div>
		<!--Slider Bottom Menu for mobile-->
		<div class="container bottom-slider-sm p-0 m-0 d-md-none d-lg-none d-sm-block">
			<div class="row p-0 m-0">
				<div class="accordion w-100 " id="sm-accordion">
					<div class="card slider-card">
						<div class="card-header text-center active-acc" id="headingOne">
							<a role="button" data-toggle="collapse" data-target="#collapsePayFines" href="#collapsePayFines" aria-expanded="true"
								aria-controls="collapsePayFines">
								<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" width="8.572em" height="8.572em" data-name="Layer 1" viewBox="0 0 103 103">
                                    <title>Payment</title>
                                    <rect class="circle cls-1" x="1.01" y="1.26" width="100" height="100" rx="50" />
                                    <path class="kd cls-2" d="M63.55,70.16l-6.06-7v7H55.27V56.25h2.22v6.06l5.84-6.06h2.75L59.59,62.5l6.73,7.66Z" />
                                    <path class="kd cls-2" d="M67.49,70.16v-2.5H69.4v2.5Z" />
                                    <path class="kd cls-2"
										d="M71.42,70.16V56.25h6.32c3.81,0,4.91,1.59,4.91,6.06v1.78c0,4.47-1.1,6.07-4.91,6.07Zm9-8c0-2.89-.46-4.36-2.89-4.36H73.62V68.58h3.94c2.25,0,2.89-1.3,2.89-4.2Z" />
                                    <rect class="cls-1" x="15.44" y="27.78" width="71.3" height="46.97" />
                                    <line class="cls-1" x1="22.53" y1="56.6" x2="39.12" y2="56.6" />
                                    <line class="cls-1" x1="32.8" y1="62.13" x2="38.33" y2="62.13" />
                                    <line class="cls-1" x1="22.53" y1="67.66" x2="38.33" y2="67.66" />
                                    <line class="cls-1" x1="15.29" y1="36.28" x2="86.4" y2="36.28" />
                                    <line class="cls-1" x1="15.29" y1="47.83" x2="86.4" y2="47.83" />
                                </svg>
							</a>
						</div>
						<div id="collapsePayFines" class="collapse show" aria-labelledby="headingOne" data-parent="#sm-accordion">
							<div class="card-body article-info text-center">
								<h5 class="title">Pay Fines</h5>
								<img src="https://www.moi.gov.kw/main/images/assets/common/ico-horizontal-bar.svg" />
								<form id="MQAFines">
									<div class="col-12">
										<select class="form-control" id="MQAFinesSelectFineType" name="MQAFinesSelectFineType">
											<option value="1">Traffic</option>
											<option value="2">Residency</option>
										</select>
									</div>
									<div class="col-12 mt-1">
										<input type="tel" pattern="^[0–9]$" class="form-control" id="MQAFinesTextCivilId" name="MQAFinesTextCivilId" maxlength="12"
											placeholder="Civil Id" />
									</div>
									<button class="btn btn-secondary mt-3" id="btnMEnquire">Pay</button>
								</form>
							</div>
						</div>
					</div>
					<div class="card slider-card">
						<div class="card-header text-center" id="headingTwo">
							<a role="button" data-target="#collapsePersonalEnquiry" href="#collapsePersonalEnquiry" data-toggle="collapse" aria-expanded="false"
								aria-controls="collapsePersonalEnquiry">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="8.572em"
									height="8.572em" viewBox="0 0 103 103" style="enable-background: new 0 0 103 103;" xml:space="preserve">
                                <style type="text/css">
.st0 {
	fill: none;
	stroke: #fff;
	stroke-width: 2;
	stroke-miterlimit: 10;
}

.st1 {
	enable-background: new;
}

.st2 {
	fill: #fff;
}

.st3 {
	fill: none;
	stroke: #fff;
	stroke-miterlimit: 10;
}
</style>
                                <title>sms</title>
                                <path class="circle st0"
										d="M51.5,1.5L51.5,1.5c27.6,0,50,22.4,50,50l0,0c0,27.6-22.4,50-50,50l0,0c-27.6,0-50-22.4-50-50l0,0  C1.5,23.9,23.9,1.5,51.5,1.5z" />































                                <g class="st1">
                                <path class="st2"
										d="M35.2,46.2c0-0.2,0.1-0.5,0.1-0.7c0-1.8-1.5-2-2.9-2c-2.8,0-3.3,0.6-3.3,2.2c0,1,0.3,1.6,1.1,2   c0.8,0.4,1.9,0.4,2.8,0.6c2.8,0.3,5.5,0.7,5.5,4.5c0,3.9-2.9,4.5-6,4.5c-2.7,0-6.2-0.3-6.3-4c0-0.3,0-0.6,0-0.9h2.9   c0,0.2,0,0.4,0,0.6c0,2.1,1.7,2.4,3.4,2.4c1.6,0,3.2-0.1,3.2-2.3c0-2.2-1.4-2.3-3.8-2.6c-3-0.3-5.8-0.8-5.8-4.4   c0-3.2,1.8-4.3,6-4.3c3.4,0,5.8,0.4,5.9,3.6c0,0.3,0,0.7-0.1,0.9H35.2z" />































                                <path class="st2"
										d="M59.1,56.8V46c0-1.2-0.3-2.2-2.7-2.2c-1.9,0-2.9,0.8-3.2,2.1v10.9h-2.9V46c0-1.3-0.3-2.2-2.7-2.2   c-1.8,0-2.9,0.4-3.3,2.3v10.8h-3.1V41.9h3.1v2c0.8-1.2,2.4-2.3,4.8-2.3c2.7,0,3.7,0.9,4,2.3c1-1.4,2.6-2.3,4.8-2.3   c3.5,0,4.2,1.4,4.2,3.7v11.5H59.1z" />































                                <path class="st2"
										d="M73.7,46.2c0-0.2,0.1-0.5,0.1-0.7c0-1.8-1.5-2-2.9-2c-2.8,0-3.3,0.6-3.3,2.2c0,1,0.3,1.6,1.1,2   c0.8,0.4,1.9,0.4,2.8,0.6c2.8,0.3,5.5,0.7,5.5,4.5c0,3.9-2.9,4.5-6,4.5c-2.7,0-6.2-0.3-6.3-4c0-0.3,0-0.6,0-0.9h2.9   c0,0.2,0,0.4,0,0.6c0,2.1,1.7,2.4,3.4,2.4c1.6,0,3.2-0.1,3.2-2.3c0-2.2-1.4-2.3-3.8-2.6c-3-0.3-5.8-0.8-5.8-4.4   c0-3.2,1.8-4.3,6-4.3c3.4,0,5.8,0.4,5.9,3.6c0,0.3,0,0.7-0.1,0.9H73.7z" />































                                </g>
                                <text transform="matrix(1 0 0 1 -231.0191 -27.0389)" class="st2" style="font-family:'DDTRg-Regular'; font-size:28px;">sms</text>
                                <path class="st3" d="M30.6,82c0,0,0.5-9.4,6.1-12c0.6-0.3,1.2-0.4,1.9-0.4l45.2,0.2V28.4H20.8v41.4h5.4L30.6,82z" />































                                </svg>
							</a>
						</div>
						<div id="collapsePersonalEnquiry" class="collapse" aria-labelledby="headingTwo" data-parent="#sm-accordion">
							<div class="card-body article-info text-center">
								<div class="col-12 title">Change Company</div>
								<div class="col-12">
									<img src="https://www.moi.gov.kw/main/images/assets/common/ico-horizontal-bar.svg" />
								</div>
								<form id="MQAChangeCompany" action="https://www.moi.gov.kw/main/eservices/sms/change" method="post">
									<div class="row">
										<div class="col-12">
											<input type="tel" pattern="^[0–9]$" class="form-control" name="MQATextMobile" id="MQATextMobile" placeholder="Mobile" maxlength="8" />
										</div>
									</div>
									<div class="row mt-1">
										<div class="col-12">
											<input type="tel" pattern="^[0–9]$" class="form-control" name="MQATextCivilId" id="MQATextCivilId" placeholder="Civil Id" maxlength="12" />
										</div>
									</div>
									<div class="row mt-1 no-gutters">
										<div class="col-sm-12 col-md-5">
											<select class="form-control" id="MQASelectCompany" name="MSelectCompany">
												<option value="1">VIVA</option>
												<option value="2">OOREDOO</option>
												<option value="3">ZAIN</option>
											</select>
										</div>
										<div class="col-sm-12 col-md-7 mt-1">
											<input type="password" pattern="^[0–9]$" name="MQATextActivationCode" id="MQATextActivationCode" class="form-control"
												placeholder="Pin Code" maxlength="4">
										</div>
									</div>
									<div class="row mt-1">
										<div class="col-12">
											<button class="btn btn-block btn-secondary" id="MQABtnChange">Change</button>
											<div class="d-flex justify-content-center">
												<div class="spinner-grow text-secondary d-none" role="status" id="MQAWorkingOnIt">
													<span class="sr-only">Loading...</span>
												</div>
											</div>
										</div>
									</div>
									<input name="__RequestVerificationToken" type="hidden"
										value="CfDJ8DdpdI9uNxdKtfJdnpslL5QEy-Ulbsy7ZP0hv_1Dt1FNK6PaxjVJJdlOIuD3OtnUmHeRDidJByFwvFPGHMX_Bub6GHKnkZmdDNca5BeM_1-wssGVgzSYHPALJHwPbSG-iSqHU1X_BNQ9cdAwVLjmaNg" />
								</form>
							</div>
						</div>
					</div>
					<div class="card slider-card">
						<div class="card-header text-center" id="headingThree">
							<a role="button" data-toggle="collapse" data-target="#collapseCoastGuard" href="#collapseCoastGuard" aria-expanded="false"
								aria-controls="collapseCoastGuard">
								<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" width="8.572em" height="8.572em" data-name="Layer 1" viewBox="0 0 103 103">
                                    <defs>
                                        <style>
/*.cls-1 {
                                                fill: none;
                                                stroke: #fff;
                                                stroke-miterlimit: 10;
                                                stroke-width: 1.5px;
                                            }*/
</style>
                                    </defs>
                                    <title>KCG-service</title>
                                    <rect class="circle cls-1" x="1.21" y="0.82" width="100" height="100" rx="50" />
                                    <path class="cls-1" d="M64.34,30.56A4.71,4.71,0,0,0,59.49,26a4.56,4.56,0,0,0-4.67,4.61,4.76,4.76,0,0,0,9.52,0Z" />
                                    <line class="cls-1" x1="66.35" y1="43.39" x2="52.51" y2="43.39" />
                                    <path class="cls-1" d="M72.12,61.7l6.66-4.36a.36.36,0,0,1,.51,0L86,61.7" />
                                    <path class="cls-1" d="M79,57.08s2.31,20.76-19.6,20.47l.2-42.22" />
                                    <path class="cls-1" d="M46.75,61.7l-6.66-4.36a.36.36,0,0,0-.51,0L32.91,61.7" />
                                    <path class="cls-1" d="M39.83,57.08s-2.3,20.76,19.6,20.47l.2-42.22" />
                                    <path class="cls-1"
										d="M59.93,25.84a1.73,1.73,0,0,0-1.72-1.72l-40,0a1.73,1.73,0,0,0-1.72,1.72l0,49.93a1.73,1.73,0,0,0,1.72,1.73l41.44,0" />
                                    <line class="cls-1" x1="23.05" y1="32.53" x2="28.84" y2="32.53" />
                                    <line class="cls-1" x1="23.05" y1="37.27" x2="42.53" y2="37.27" />
                                    <line class="cls-1" x1="23.05" y1="41.48" x2="39.37" y2="41.48" />
                                    <line class="cls-1" x1="23.05" y1="45.7" x2="47.11" y2="45.7" />
                                </svg>
							</a>
						</div>
						<div id="collapseCoastGuard" class="collapse" aria-labelledby="headingThree" data-parent="#sm-accordion">
							<div class="card-body article-info text-center">
								<h5 class="title">Ensure Safety at Sea</h5>
								<img src="https://www.moi.gov.kw/main/images/assets/common/ico-horizontal-bar.svg" />
								<p class="card-text">For your safety, please inform the General Directorate of Coast Guard by filling the Sailing Plan form</p>
								<a href="https://eservices1.moi.gov.kw/coast-guard.nsf/boat-float-plan?openform&langid=2" class="btn btn-secondary mt-3">Sail Plan</a>
							</div>
						</div>
					</div>

                    <div class="card slider-card">
                        <div class="card-header text-center" id="headingFour">
                            <a href="https://esp.moi.gov.kw/MOI_Kuwait/apps/services/www/MoIKuwait/desktopbrowser/default/index.html">
                                <img src="https://www.moi.gov.kw/main/images/assets/esp-logo-white.svg" class="card-img-top center-block moi-ico mx-auto">
                            </a>
                        </div>
                    </div>

				</div>
			</div>
		</div>
		<!--Slider Bottom Menu-->
		<div class="container p-0 m-0 d-none d-md-block bottom-slider">
			<div class="row p-0 m-0" style="height: 221px;">
				<div style="height: 100%;">
					<a class="acc-header active">
						<label class="footer-icon" style="width: 200px;">
							<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" width="8.572em" height="8.572em" data-name="Layer 1" viewBox="0 0 103 103">
                                <title>Payment</title>
                                <rect class="circle cls-1" x="1.01" y="1.26" width="100" height="100" rx="50" />
                                <path class="kd cls-2" d="M63.55,70.16l-6.06-7v7H55.27V56.25h2.22v6.06l5.84-6.06h2.75L59.59,62.5l6.73,7.66Z" />
                                <path class="kd cls-2" d="M67.49,70.16v-2.5H69.4v2.5Z" />
                                <path class="kd cls-2"
									d="M71.42,70.16V56.25h6.32c3.81,0,4.91,1.59,4.91,6.06v1.78c0,4.47-1.1,6.07-4.91,6.07Zm9-8c0-2.89-.46-4.36-2.89-4.36H73.62V68.58h3.94c2.25,0,2.89-1.3,2.89-4.2Z" />
                                <rect class="cls-1" x="15.44" y="27.78" width="71.3" height="46.97" />
                                <line class="cls-1" x1="22.53" y1="56.6" x2="39.12" y2="56.6" />
                                <line class="cls-1" x1="32.8" y1="62.13" x2="38.33" y2="62.13" />
                                <line class="cls-1" x1="22.53" y1="67.66" x2="38.33" y2="67.66" />
                                <line class="cls-1" x1="15.29" y1="36.28" x2="86.4" y2="36.28" />
                                <line class="cls-1" x1="15.29" y1="47.83" x2="86.4" y2="47.83" />
                            </svg>
						</label>
					</a>
					<div class="article">
						<div class="article-info">
							<div class="row text-center">
								<div class="col-12 title">Pay Fines</div>
								<div class="col-12">
									<img src="https://www.moi.gov.kw/main/images/assets/common/ico-horizontal-bar.svg" />
								</div>
								<form id="QAFines">
									<div class="col-12">
										<select class="form-control" id="QAFinesSelectFineType" name="QAFinesSelectFineType">
											<option value="1">Traffic</option>
											<option value="2">Residency</option>
										</select>
									</div>
									<div class="col-12 mt-1">
										<input class="form-control" id="QAFinesTextCivilId" name="QAFinesTextCivilId" maxlength="12" placeholder="Civil Id" />
									</div>
									<div class="col-12">
										<button class="btn btn-block btn-secondary mt-3" id="btnEnquire">Pay</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div style="height: 221px;">
					<a class="acc-header">
						<label class="footer-icon" style="width: 200px;">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="8.572em"
								height="8.572em" viewBox="0 0 103 103" style="enable-background: new 0 0 103 103;" xml:space="preserve">
                            <style type="text/css">
.st0 {
	fill: none;
	stroke: #fff;
	stroke-width: 2;
	stroke-miterlimit: 10;
}

.st1 {
	enable-background: new;
}

.st2 {
	fill: #fff;
}

.st3 {
	fill: none;
	stroke: #fff;
	stroke-miterlimit: 10;
}
</style>
                            <title>sms</title>
                            <path class="circle st0"
									d="M51.5,1.5L51.5,1.5c27.6,0,50,22.4,50,50l0,0c0,27.6-22.4,50-50,50l0,0c-27.6,0-50-22.4-50-50l0,0  C1.5,23.9,23.9,1.5,51.5,1.5z" />

                            <g class="st1">
                            <path class="st2"
									d="M35.2,46.2c0-0.2,0.1-0.5,0.1-0.7c0-1.8-1.5-2-2.9-2c-2.8,0-3.3,0.6-3.3,2.2c0,1,0.3,1.6,1.1,2   c0.8,0.4,1.9,0.4,2.8,0.6c2.8,0.3,5.5,0.7,5.5,4.5c0,3.9-2.9,4.5-6,4.5c-2.7,0-6.2-0.3-6.3-4c0-0.3,0-0.6,0-0.9h2.9   c0,0.2,0,0.4,0,0.6c0,2.1,1.7,2.4,3.4,2.4c1.6,0,3.2-0.1,3.2-2.3c0-2.2-1.4-2.3-3.8-2.6c-3-0.3-5.8-0.8-5.8-4.4   c0-3.2,1.8-4.3,6-4.3c3.4,0,5.8,0.4,5.9,3.6c0,0.3,0,0.7-0.1,0.9H35.2z" />

                            <path class="st2"
									d="M59.1,56.8V46c0-1.2-0.3-2.2-2.7-2.2c-1.9,0-2.9,0.8-3.2,2.1v10.9h-2.9V46c0-1.3-0.3-2.2-2.7-2.2   c-1.8,0-2.9,0.4-3.3,2.3v10.8h-3.1V41.9h3.1v2c0.8-1.2,2.4-2.3,4.8-2.3c2.7,0,3.7,0.9,4,2.3c1-1.4,2.6-2.3,4.8-2.3   c3.5,0,4.2,1.4,4.2,3.7v11.5H59.1z" />

                            <path class="st2"
									d="M73.7,46.2c0-0.2,0.1-0.5,0.1-0.7c0-1.8-1.5-2-2.9-2c-2.8,0-3.3,0.6-3.3,2.2c0,1,0.3,1.6,1.1,2   c0.8,0.4,1.9,0.4,2.8,0.6c2.8,0.3,5.5,0.7,5.5,4.5c0,3.9-2.9,4.5-6,4.5c-2.7,0-6.2-0.3-6.3-4c0-0.3,0-0.6,0-0.9h2.9   c0,0.2,0,0.4,0,0.6c0,2.1,1.7,2.4,3.4,2.4c1.6,0,3.2-0.1,3.2-2.3c0-2.2-1.4-2.3-3.8-2.6c-3-0.3-5.8-0.8-5.8-4.4   c0-3.2,1.8-4.3,6-4.3c3.4,0,5.8,0.4,5.9,3.6c0,0.3,0,0.7-0.1,0.9H73.7z" />

                            </g>
                            <text transform="matrix(1 0 0 1 -231.0191 -27.0389)" class="st2" style="font-family:'DDTRg-Regular'; font-size:28px;">sms</text>
                            <path class="st3" d="M30.6,82c0,0,0.5-9.4,6.1-12c0.6-0.3,1.2-0.4,1.9-0.4l45.2,0.2V28.4H20.8v41.4h5.4L30.6,82z" />

                            </svg>
						</label>
					</a>
					<div class="article">
						<div class="article-info">
							<div class="row text-center">
								<div class="col-12 title">Change Company</div>
								<div class="col-12">
									<img src="https://www.moi.gov.kw/main/images/assets/common/ico-horizontal-bar.svg" />
								</div>
								<div class="col-12">
									<form id="QAChangeCompany" action="https://www.moi.gov.kw/main/eservices/sms/change" method="post">
										<div class="row">
											<div class="col-12">
												<input type="tel" class="form-control" id="QATextMobile" name="QATextMobile" placeholder="*Mobile" maxlength="8" />
											</div>
										</div>
										<div class="row mt-1">
											<div class="col-12">
												<input class="form-control" id="QATextCivilId" name="QATextCivilId" placeholder="*Civil Id" maxlength="12" />
											</div>
										</div>
										<div class="row mt-1 no-gutters">
											<div class="col-sm-12 col-md-5">
												<select class="form-control" id="QASelectCompany" name="QASelectCompany">
													<option value="1">VIVA</option>
													<option value="2">OOREDOO</option>
													<option value="3">ZAIN</option>
												</select>
											</div>
											<div class="col-sm-12 col-md-7">
												<input type="password" name="QATextActivationCode" id="QATextActivationCode" class="form-control" placeholder="*Pin Code" maxlength="4">
											</div>
										</div>
										<div class="row mt-1">
											<div class="col-12">
												<button class="btn btn-block btn-secondary" id="QABtnChange">Change</button>
												<div class="d-flex justify-content-center">
													<div class="spinner-grow text-secondary d-none" role="status" id="QAWorkingOnIt">
														<span class="sr-only">Loading...</span>
													</div>
												</div>
											</div>
										</div>
										<input name="__RequestVerificationToken" type="hidden"
											value="CfDJ8DdpdI9uNxdKtfJdnpslL5QEy-Ulbsy7ZP0hv_1Dt1FNK6PaxjVJJdlOIuD3OtnUmHeRDidJByFwvFPGHMX_Bub6GHKnkZmdDNca5BeM_1-wssGVgzSYHPALJHwPbSG-iSqHU1X_BNQ9cdAwVLjmaNg" />
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div>
					<a class="acc-header">
						<label class="footer-icon" style="width: 200px;">
							<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" width="8.572em" height="8.572em" data-name="Layer 1" viewBox="0 0 103 103">
                                <defs>
                                    <style>
/*.cls-1 {
                                            fill: none;
                                            stroke: #fff;
                                            stroke-miterlimit: 10;
                                            stroke-width: 1.5px;
                                        }*/
</style>
                                </defs>
                                <title>KCG-service</title>
                                <rect class="circle cls-1" x="1.21" y="0.82" width="100" height="100" rx="50" />
                                <path class="cls-1" d="M64.34,30.56A4.71,4.71,0,0,0,59.49,26a4.56,4.56,0,0,0-4.67,4.61,4.76,4.76,0,0,0,9.52,0Z" />
                                <line class="cls-1" x1="66.35" y1="43.39" x2="52.51" y2="43.39" />
                                <path class="cls-1" d="M72.12,61.7l6.66-4.36a.36.36,0,0,1,.51,0L86,61.7" />
                                <path class="cls-1" d="M79,57.08s2.31,20.76-19.6,20.47l.2-42.22" />
                                <path class="cls-1" d="M46.75,61.7l-6.66-4.36a.36.36,0,0,0-.51,0L32.91,61.7" />
                                <path class="cls-1" d="M39.83,57.08s-2.3,20.76,19.6,20.47l.2-42.22" />
                                <path class="cls-1"
									d="M59.93,25.84a1.73,1.73,0,0,0-1.72-1.72l-40,0a1.73,1.73,0,0,0-1.72,1.72l0,49.93a1.73,1.73,0,0,0,1.72,1.73l41.44,0" />
                                <line class="cls-1" x1="23.05" y1="32.53" x2="28.84" y2="32.53" />
                                <line class="cls-1" x1="23.05" y1="37.27" x2="42.53" y2="37.27" />
                                <line class="cls-1" x1="23.05" y1="41.48" x2="39.37" y2="41.48" />
                                <line class="cls-1" x1="23.05" y1="45.7" x2="47.11" y2="45.7" />
                            </svg>
						</label>
					</a>
					<div class="article">
						<div class="article-info">
							<div class="row text-center">
								<div class="col-12 title">Ensure Safety at Sea</div>
								<div class="col-12">
									<img src="https://www.moi.gov.kw/main/images/assets/common/ico-horizontal-bar.svg" />
								</div>
								<div class="col-12 text-justify">For your safety, please inform the General Directorate of Coast Guard by filling the Sailing Plan form
								</div>
								<div class="col-12">
									<a href="https://eservices1.moi.gov.kw/coast-guard.nsf/boat-float-plan?openform&langid=2" class="btn btn-secondary mt-3">Sail Plan</a>
								</div>
							</div>
						</div>
					</div>
				</div>
                <div>
                    <label class="footer-icon" style="width:200px;">
                        <a href="https://esp.moi.gov.kw/MOI_Kuwait/apps/services/www/MoIKuwait/desktopbrowser/default/index.html">
                            <img src="https://www.moi.gov.kw/main/images/assets/esp-logo-white.svg" class="moi-ico" />
                        </a>
                    </label>
                </div>
			</div>
		</div>
		<footer class="container border-top footer text-muted mt-2 p-0">
			<div class="col-sm-12 text-center text-white mt-2 ">
				<div class="row">
					<div class="col-sm-12">
						<a href="https://www.youtube.com/user/SecurityMediaQ8">
							<img src="https://www.moi.gov.kw/main/images/assets/social-media/ico-youtube.svg" class="social-media-icon" />
						</a>
						<a href="https://www.instagram.com/moi_kuw/?hl=en">
							<img src="https://www.moi.gov.kw/main/images/assets/social-media/ico-instagram.svg" class="social-media-icon" />
						</a>
						<a href="https://twitter.com/moi_kuw?lang=en">
							<img src="https://www.moi.gov.kw/main/images/assets/social-media/ico-twitter.svg" class="social-media-icon" />
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">© Ministry of Interior - State of Kuwait&nbsp;-&nbsp;2019</div>
				</div>
			</div>
		</footer>
	</div>
	<div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="infoModalTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="infoModalTitle">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="QAResponse">Your company is now changed as requested.</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">

        (function () {
    $("#selectLanguage select").change(function () {
        $(this).parent().submit();
    });
}());



        
function setAccordionDirection() {
    var current = document.getElementsByClassName("footer-icon");
    //console.log(current[0]);
    for (i = 0; i < current.length; i++) {
        var direction = 'left';
        current[i].style.cssFloat = 'left';
    }
        }



        $(document).ready(function () {


            $('.collapse').on('shown.bs.collapse', function () {
        $(this).prev().addClass('active-acc');
    });

    $('.collapse').on('hidden.bs.collapse', function () {
        $(this).prev().removeClass('active-acc');
    });

            
    setAccordionDirection();
            
    $('#btnMEnquire').on('click', function (event) {
        //alert('hi')

        $('#MQAFines').validate({
            rules: {
                MQAFinesTextCivilId: {
                    required: true,
                    digits: true,
                    minlength: 8
                }
            },
            messages: {
                MQAFinesTextCivilId: {
                    required: 'Required',
                    minlength: 'Enter Valid Number',
                    digits: 'Enter Valid Number',
                }
            },
            submitHandler: function (form, event) {
                $('#btnMEnquire').attr("disabled", true);
                event.preventDefault();
                if ($('#MQAFinesSelectFineType').val() == "1") {
                    //window.location.href = "http://10.11.77.82:10038/wps/portal/violations?systemSelection=1&numberType=1&numberValue=" + $("#MQAFinesTextCivilId").val() + "&carNumberGoverCode=&licneseType=3&purpose=0&violYear=0&violGover=0&secondPartOfnewcarno=0&embassyTextField=0&QuickAccess='GO'"
                    window.location.href = "http://portal.acs.moi.gov.kw/wps/portal/violations?systemSelection=1&numberType=1&numberValue=" + $("#MQAFinesTextCivilId").val() + "&carNumberGoverCode=&licneseType=3&purpose=0&violYear=0&violGover=0&secondPartOfnewcarno=0&embassyTextField=0&QuickAccess='GO'"
                }
                else {
                    //window.location.href = "http://10.11.77.82:10038/wps/portal/violations?systemSelection=2&violOptionNumber=2&numberValue=" + $("#MQAFinesTextCivilId").val() + "&QuickAccess='GO'"
                    window.location.href = "http://portal.acs.moi.gov.kw/wps/portal/violations?systemSelection=2&violOptionNumber=2&numberValue=" + $("#MQAFinesTextCivilId").val() + "&QuickAccess='GO'"
                }
                return;
            }
        })

    });


     $('#btnEnquire').on('click', function (event) {
        //alert('hi')
        $('#QAFines').validate({
            rules: {
                QAFinesTextCivilId: {
                    required: true,
                    digits: true,
                    minlength: 8
                }
            },
            messages: {
                QAFinesTextCivilId: {
                    required: 'Required',
                    minlength: 'Enter Valid Number',
                    digits: 'Enter Valid Number',
                }
            },
            submitHandler: function (form, event) {
                $('#btnEnquire').attr("disabled", true);
                event.preventDefault();
                if ($('#QAFinesSelectFineType').val()=="1") {
                    //window.location.href = "http://10.11.77.82:10038/wps/portal/violations?systemSelection=1&numberType=1&numberValue=" + $("#QAFinesTextCivilId").val() + "&carNumberGoverCode=&licneseType=3&purpose=0&violYear=0&violGover=0&secondPartOfnewcarno=0&embassyTextField=0&QuickAccess='GO'"
                    window.location.href = "http://portal.acs.moi.gov.kw/wps/portal/violations?systemSelection=1&numberType=1&numberValue=" + $("#QAFinesTextCivilId").val() + "&carNumberGoverCode=&licneseType=3&purpose=0&violYear=0&violGover=0&secondPartOfnewcarno=0&embassyTextField=0&QuickAccess='GO'"
                }
                else {
                    //window.location.href = "http://10.11.77.82:10038/wps/portal/violations?systemSelection=2&violOptionNumber=2&numberValue=" + $("#QAFinesTextCivilId").val() + "&QuickAccess='GO'"
                    window.location.href = "http://portal.acs.moi.gov.kw/wps/portal/violations?systemSelection=2&violOptionNumber=2&numberValue=" + $("#QAFinesTextCivilId").val() + "&QuickAccess='GO'"

                }
                return;
            }
        })
     });

    //$('#btnEnquire').on('click', function (event) {
    //    event.preventDefault();
    //    window.location.href = "http://10.11.77.82:10038/wps/portal/violations?systemSelection=1&numberType=1&numberValue=" + $("#textCivilId").val() + "&carNumberGoverCode=&licneseType=3&purpose=0&violYear=0&violGover=0&secondPartOfnewcarno=0&embassyTextField=0&QuickAccess='GO'"
    //    return;
    //});

    $('#payFines').on('click', function (event) {
        //alert('stop');
        event.preventDefault();
        $('html,body').stop();
    });

    $('#QABtnChange').on('click', function (event) {
        //event.preventDefault();
        $('#QAChangeCompany').validate({
            rules: {
                QATextMobile: {
                    required: true,
                    digits: true,
                    minlength: 8
                },
                QATextCivilId: {
                    required: true,
                    digits: true,
                    minlength: 12
                },
                QATextActivationCode: {
                    required: true,
                    digits: true,
                    minlength: 4
                }
            },
            messages: {
                QATextMobile: {
                    required: 'Required',
                    minlength: 'Enter Valid Number',
                    digits: 'Enter Valid Number',
                },
                QATextCivilId: {
                    required: 'Required',
                    minlength: 'Enter Valid Number',
                    digits: 'Enter Valid Number',
                },
                QATextActivationCode: {
                    required: 'Required',
                    minlength: 'Enter Valid Number',
                    digits: 'Enter Valid Number',
                }
            },
            submitHandler: function (form, event) {
                $('#QABtnChange').attr("disabled", true);
                $('#QAWorkingOnIt').addClass('d-block');
                event.preventDefault();
                grecaptcha.ready(function () {
                    grecaptcha.execute('6LdUyqwUAAAAAM5MRMXHrlAjDCrWT5CcRpdXgK2p', { action: 'sms/register' }).then(function (token) {
                        var formData = $("#QAChangeCompany").serializeArray();
                        console.log(formData);
                        formData.push({ name: "g-recaptcha-token", value: token });
                        formData.push({ name: "Mobile", value: $("#QATextMobile").val() });
                        formData.push({ name: "CivilId", value: $("#QATextCivilId").val() });
                        formData.push({ name: "Company", value: $("#QASelectCompany option:selected").val() });
                        formData.push({ name: "ActivationCode", value: $("#QATextActivationCode").val() });
                        //submit via ajax
                        $.ajax({
                            url: '/main/eservices/sms/change-company', //decodeURIComponent('Url.Action("change-company","eservices/sms")')
                            type: 'POST',
                            data: formData,
                            contentType: 'application/x-www-form-urlencoded; charset=utf-8',
                            success: function (data) {
                                console.log(data);
                                $('#QAResponse').removeClass('text-center').removeClass('text-danger');
                                $('#infoModalTitle').html('Change Company');
                                $('#QAResponse').html(data.value.info);
                                $('#QAWorkingOnIt').removeClass('d-block');
                                $('#infoModal').modal('toggle')
                                $('#QABtnChange').removeAttr("disabled");
                            },
                            error: function (jqXHR, textStatus, errorThrown) {
                                console.log('failed');
                                console.log(jqXHR);
                                var resp = $.parseJSON(jqXHR.responseText);
                                $('#infoModalTitle').html('Change Company');
                                $('#QAResponse').addClass('text-center').addClass('text-danger');
                                $('#QAResponse').html(resp.errorMessage);
                                $('#QAWorkingOnIt').removeClass('d-block');
                                $('#infoModal').modal('toggle');
                                $('#QABtnChange').removeAttr("disabled");
                            }
                        });
                    });
                });

            }
        });
    });

    $('#MQABtnChange').on('click', function (event) {
        //event.preventDefault();
        $('#MQAChangeCompany').validate({
            rules: {
                MQATextMobile: {
                    required: true,
                    digits: true,
                    minlength: 8
                },
                MQATextCivilId: {
                    required: true,
                    digits: true,
                    minlength: 12
                },
                MQATextActivationCode: {
                    required: true,
                    digits: true,
                    minlength: 4
                }
            },
            messages: {
                MQATextMobile: {
                    required: 'Required',
                    minlength: 'Enter Valid Number',
                    digits: 'Enter Valid Number',
                },
                MQATextCivilId: {
                    required: 'Required',
                    minlength: 'Enter Valid Number',
                    digits: 'Enter Valid Number',
                },
                MQATextActivationCode: {
                    required: 'Required',
                    minlength: 'Enter Valid Number',
                    digits: 'Enter Valid Number',
                }
            },
            submitHandler: function (form, event) {
                $('#MQABtnChange').attr("disabled", true);
                $('#MQAWorkingOnIt').addClass('d-block');
                event.preventDefault();
                grecaptcha.ready(function () {
                    grecaptcha.execute('6LdUyqwUAAAAAM5MRMXHrlAjDCrWT5CcRpdXgK2p', { action: 'sms/register' }).then(function (token) {

                        var formData = $("#MQAChangeCompany").serializeArray();
                        console.log(formData);
                        formData.push({ name: "g-recaptcha-token", value: token });
                        formData.push({ name: "Mobile", value: $("#MQATextMobile").val() });
                        formData.push({ name: "CivilId", value: $("#MQATextCivilId").val() });
                        formData.push({ name: "Company", value: $("#MQASelectCompany option:selected").val() });
                        formData.push({ name: "ActivationCode", value: $("#MQATextActivationCode").val() });
                        //submit via ajax
                        $.ajax({
                            url: '/main/eservices/sms/change-company',
                            type: 'POST',
                            data: formData,
                            contentType: 'application/x-www-form-urlencoded; charset=utf-8',
                            success: function (data) {
                                console.log(data);
                                $('#QAResponse').removeClass('text-center').removeClass('text-danger');
                                $('#infoModalTitle').html('Change Company');
                                $('#QAResponse').html(data.value.info);
                                $('#MQAWorkingOnIt').removeClass('d-block');
                                $('#infoModal').modal('toggle');
                                $('#MQABtnChange').removeAttr("disabled");
                            },
                            error: function (jqXHR, textStatus, errorThrown) {
                                console.log('failed');
                                console.log(jqXHR);
                                var resp = $.parseJSON(jqXHR.responseText);
                                $('#infoModalTitle').html('Change Company');
                                $('#QAResponse').addClass('text-center').addClass('text-danger');
                                $('#QAResponse').html(resp.errorMessage);
                                $('#MQAWorkingOnIt').removeClass('d-block');
                                $('#infoModal').modal('toggle');
                                $('#MQABtnChange').removeAttr("disabled");
                            }
                        });
                    });
                });

            }
        });
    });

    //var stepper = new Stepper($('.bs-stepper')[0])
    // Add active class to the current button (highlight it)
    var header = document.getElementById("navbarResponsive");
    var btns = header.getElementsByClassName("nav-item");
    //console.log(window.location.pathname);


    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function () {
            var current = document.getElementsByClassName("nav-item active");
            if (current.length > 0) {
                current[0].className = current[0].className.replace(" active", "");
            }
            this.className += " active";
        });
    }

    //$('#nav-eServices').on('mouseenter', function () {

    //    $(this).trigger('click');
    //    var current = document.getElementsByClassName("active");
    //    if (current.length > 0) {
    //        current[0].className = current[0].className.replace(" active", "");
    //    }
    //    $(this)[0].parentElement.className += " active";
    //    //console.log($(this));
    //    //console.log($(this)[0].parentElement.className)

    //})

    // $('#nav-eServices').on('click', function () {
    //    alert('toggle here');
    //});


    $(".acc-header").click(function () {
        //alert('clicked');
        var current = document.getElementsByClassName("acc-header active");
        if (current.length > 0) {
            //alert('active');
            current[0].className = current[0].className.replace(" active", "");
        }
        else {
            alert('nothing active');
        }
        this.className += " active";

    });



    if (window.location.pathname.toLowerCase().includes("/eservices")) {
        btns[0].className = btns[0].className.replace(" active", "");
        btns[1].className += " active";
    }
    else if (window.location.pathname.toLowerCase().includes("/sections")) {
        btns[0].className = btns[0].className.replace(" active", "");
        $('#relatedDepartmentsMenu').addClass('active');
    }
    else if (window.location.pathname.toLowerCase().includes("/emagazine")) {
        btns[0].className = btns[0].className.replace(" active", "");
        //btns[10].className += " active";
        $('#navEMag').addClass('active');
        //console.log(btns[10]);
    }
    else if (window.location.pathname.toLowerCase().includes("/news/archive")) {
        btns[0].className = btns[0].className.replace(" active", "");
        //btns[11].className += " active";
        $('#navArchive').addClass('active');
    }


});
    </script>


<script>
      document.addEventListener('DOMContentLoaded', function() {
        const loadEl = document.querySelector('#load');
        // // 🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥
        // // The Firebase SDK is initialized and available here!
        //
        // firebase.auth().onAuthStateChanged(user => { });
        // firebase.database().ref('/path/to/ref').on('value', snapshot => { });
        // firebase.firestore().doc('/foo/bar').get().then(() => { });
        // firebase.functions().httpsCallable('yourFunction')().then(() => { });
        // firebase.messaging().requestPermission().then(() => { });
        // firebase.storage().ref('/path/to/ref').getDownloadURL().then(() => { });
        // firebase.analytics(); // call to activate
        // firebase.analytics().logEvent('tutorial_completed');
        // firebase.performance(); // call to activate
        //
        // // 🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥

        try {
          let app = firebase.app();
          let features = [
            'auth', 
            'database', 
            'firestore',
            'functions',
            'messaging', 
            'storage', 
            'analytics', 
            'remoteConfig',
            'performance',
          ].filter(feature => typeof app[feature] === 'function');
          loadEl.textContent = `Firebase SDK loaded with ${features.join(', ')}`;
        } catch (e) {
          console.error(e);
          loadEl.textContent = 'Error loading the Firebase SDK, check the console.';
        }
      });
    </script>
	

</body>
</html>
