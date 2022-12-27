﻿<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:image" content="https:/fillow.dexignlab.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">

	<!-- PAGE TITLE HERE -->
	<title>Admin Dashboard</title>

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

	<!-- Style css -->
	<link href="css/style.css" rel="stylesheet">

</head>

<body>

	<!--*******************
        Preloader start
    ********************-->
	<div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
	</div>
	<!--*******************
        Preloader end
    ********************-->

	<!--**********************************
        Main wrapper start
    ***********************************-->
	<div id="main-wrapper">

		<!--**********************************
            Nav header start
        ***********************************-->
		<div class="nav-header">
			<a class="brand-logo">
			<svg width="180" height="94" viewBox="0 0 264 94" fill="none" xmlns="http://www.w3.org/2000/svg">
					<ellipse cx="47.5" cy="49" rx="47.5" ry="45" fill="#886CC0" />
					<path d="M29.0653 71L36.3097 27.3636H53.5256C56.821 27.3636 59.527 27.9957 61.6435 29.2599C63.7741 30.5099 65.2656 32.25 66.1179 34.4801C66.9844 36.696 67.1832 39.2528 66.7145 42.1506C66.2315 45.0625 65.1804 47.6264 63.5611 49.8423C61.956 52.044 59.8679 53.7628 57.2969 54.9986C54.7259 56.2344 51.7571 56.8523 48.3906 56.8523H37.4176L38.6321 49.4588H48.1136C49.9034 49.4588 51.4304 49.1534 52.6946 48.5426C53.973 47.9176 54.9886 47.0582 55.7415 45.9645C56.4943 44.8565 56.9844 43.5852 57.2116 42.1506C57.4531 40.6875 57.375 39.4162 56.9773 38.3366C56.5795 37.2571 55.848 36.419 54.7827 35.8224C53.7315 35.2116 52.3182 34.9062 50.5426 34.9062H44.321L38.2912 71H29.0653Z" fill="white" />
					<path d="M140.52 25.2C140.52 26.9067 140.12 28.4667 139.32 29.88C138.547 31.2667 137.36 32.3867 135.76 33.24C134.187 34.0667 132.253 34.48 129.96 34.48H126.08V44H118.24V15.8H129.96C132.227 15.8 134.147 16.2 135.72 17C137.32 17.8 138.52 18.9067 139.32 20.32C140.12 21.7333 140.52 23.36 140.52 25.2ZM129.2 28.24C131.413 28.24 132.52 27.2267 132.52 25.2C132.52 23.1467 131.413 22.12 129.2 22.12H126.08V28.24H129.2ZM157.95 44L152.35 33.6H151.51V44H143.67V15.8H156.03C158.296 15.8 160.216 16.2 161.79 17C163.363 17.7733 164.55 18.8533 165.35 20.24C166.15 21.6 166.55 23.1333 166.55 24.84C166.55 26.76 166.016 28.4533 164.95 29.92C163.91 31.36 162.376 32.3867 160.35 33L166.71 44H157.95ZM151.51 28.24H155.39C156.456 28.24 157.256 27.9867 157.79 27.48C158.323 26.9733 158.59 26.24 158.59 25.28C158.59 24.3733 158.31 23.6667 157.75 23.16C157.216 22.6267 156.43 22.36 155.39 22.36H151.51V28.24ZM183.635 44.28C180.995 44.28 178.568 43.6667 176.355 42.44C174.142 41.1867 172.382 39.4667 171.075 37.28C169.795 35.0667 169.155 32.5733 169.155 29.8C169.155 27.0267 169.795 24.5467 171.075 22.36C172.382 20.1467 174.142 18.4267 176.355 17.2C178.568 15.9733 180.995 15.36 183.635 15.36C186.302 15.36 188.728 15.9733 190.915 17.2C193.128 18.4267 194.875 20.1467 196.155 22.36C197.435 24.5467 198.075 27.0267 198.075 29.8C198.075 32.5733 197.435 35.0667 196.155 37.28C194.875 39.4667 193.128 41.1867 190.915 42.44C188.702 43.6667 186.275 44.28 183.635 44.28ZM183.635 37C185.635 37 187.208 36.3467 188.355 35.04C189.528 33.7333 190.115 31.9867 190.115 29.8C190.115 27.56 189.528 25.8 188.355 24.52C187.208 23.2133 185.635 22.56 183.635 22.56C181.608 22.56 180.022 23.2133 178.875 24.52C177.728 25.8 177.155 27.56 177.155 29.8C177.155 32.0133 177.728 33.7733 178.875 35.08C180.022 36.36 181.608 37 183.635 37ZM227.719 44H219.879L209.439 28.24V44H201.599V15.8H209.439L219.879 31.76V15.8H227.719V44Z" fill="#886CC0" />
					<path d="M127.9 64.24C127.78 64.9467 127.493 65.6133 127.04 66.24C126.6 66.8667 125.98 67.38 125.18 67.78C124.38 68.1667 123.407 68.36 122.26 68.36H119.74L118.74 74H116.46L118.92 60.1H123.72C125.12 60.1 126.18 60.4133 126.9 61.04C127.62 61.6533 127.98 62.46 127.98 63.46C127.98 63.6333 127.953 63.8933 127.9 64.24ZM122.58 66.58C123.447 66.58 124.127 66.3733 124.62 65.96C125.127 65.5467 125.44 64.9733 125.56 64.24C125.6 64.04 125.62 63.8467 125.62 63.66C125.62 63.1 125.433 62.6667 125.06 62.36C124.7 62.04 124.147 61.88 123.4 61.88H120.88L120.06 66.58H122.58ZM132.235 64.92C132.688 64.2533 133.221 63.7333 133.835 63.36C134.461 62.9867 135.155 62.8 135.915 62.8L135.495 65.16H134.915C134.035 65.16 133.328 65.38 132.795 65.82C132.261 66.26 131.888 67.02 131.675 68.1L130.635 74H128.355L130.295 62.98H132.575L132.235 64.92ZM139.39 61.52C139.03 61.52 138.737 61.4067 138.51 61.18C138.284 60.9533 138.17 60.6667 138.17 60.32C138.17 59.8533 138.344 59.4533 138.69 59.12C139.05 58.7733 139.457 58.6 139.91 58.6C140.27 58.6 140.557 58.7133 140.77 58.94C140.997 59.1667 141.11 59.4533 141.11 59.8C141.11 60.2667 140.937 60.6733 140.59 61.02C140.244 61.3533 139.844 61.52 139.39 61.52ZM140.25 62.98L138.31 74H136.03L137.97 62.98H140.25ZM148.844 62.8C150.004 62.8 150.924 63.1133 151.604 63.74C152.297 64.3533 152.644 65.24 152.644 66.4C152.644 66.6933 152.61 67.06 152.544 67.5L151.384 74H149.124L150.224 67.84C150.277 67.4667 150.304 67.2 150.304 67.04C150.304 66.3067 150.097 65.7467 149.684 65.36C149.284 64.9733 148.724 64.78 148.004 64.78C147.137 64.78 146.404 65.0467 145.804 65.58C145.217 66.1 144.844 66.8533 144.684 67.84V67.78L143.584 74H141.304L143.244 62.98H145.524L145.304 64.26C145.757 63.8067 146.29 63.4533 146.904 63.2C147.53 62.9333 148.177 62.8 148.844 62.8ZM157.492 70.94C157.465 71.1267 157.452 71.2467 157.452 71.3C157.452 71.58 157.539 71.7867 157.712 71.92C157.885 72.04 158.172 72.1 158.572 72.1H159.972L159.632 74H157.832C156.952 74 156.279 73.8267 155.812 73.48C155.345 73.12 155.112 72.5533 155.112 71.78C155.112 71.4867 155.139 71.2067 155.192 70.94L156.272 64.84H154.972L155.292 62.98H156.612L157.092 60.24H159.392L158.912 62.98H161.572L161.252 64.84H158.572L157.492 70.94ZM165.093 61.52C164.733 61.52 164.44 61.4067 164.213 61.18C163.987 60.9533 163.873 60.6667 163.873 60.32C163.873 59.8533 164.047 59.4533 164.393 59.12C164.753 58.7733 165.16 58.6 165.613 58.6C165.973 58.6 166.26 58.7133 166.473 58.94C166.7 59.1667 166.813 59.4533 166.813 59.8C166.813 60.2667 166.64 60.6733 166.293 61.02C165.947 61.3533 165.547 61.52 165.093 61.52ZM165.953 62.98L164.013 74H161.733L163.673 62.98H165.953ZM174.547 62.8C175.707 62.8 176.627 63.1133 177.307 63.74C178 64.3533 178.347 65.24 178.347 66.4C178.347 66.6933 178.314 67.06 178.247 67.5L177.087 74H174.827L175.927 67.84C175.98 67.4667 176.007 67.2 176.007 67.04C176.007 66.3067 175.8 65.7467 175.387 65.36C174.987 64.9733 174.427 64.78 173.707 64.78C172.84 64.78 172.107 65.0467 171.507 65.58C170.92 66.1 170.547 66.8533 170.387 67.84V67.78L169.287 74H167.007L168.947 62.98H171.227L171.007 64.26C171.46 63.8067 171.994 63.4533 172.607 63.2C173.234 62.9333 173.88 62.8 174.547 62.8ZM186.415 62.8C187.268 62.8 187.995 62.9733 188.595 63.32C189.208 63.6533 189.648 64.0733 189.915 64.58L190.195 62.98H192.495L190.535 74.18C190.348 75.1933 189.975 76.0933 189.415 76.88C188.855 77.68 188.128 78.3067 187.235 78.76C186.342 79.2133 185.335 79.44 184.215 79.44C183.242 79.44 182.388 79.28 181.655 78.96C180.922 78.6533 180.368 78.2067 179.995 77.62C179.622 77.0333 179.462 76.34 179.515 75.54H181.775C181.842 76.1133 182.128 76.5733 182.635 76.92C183.142 77.28 183.788 77.46 184.575 77.46C185.495 77.46 186.288 77.18 186.955 76.62C187.622 76.06 188.048 75.2467 188.235 74.18L188.555 72.34C188.075 72.86 187.475 73.3 186.755 73.66C186.035 74.0067 185.255 74.18 184.415 74.18C183.575 74.18 182.828 73.9933 182.175 73.62C181.522 73.2467 181.008 72.72 180.635 72.04C180.275 71.3467 180.095 70.5533 180.095 69.66C180.095 69.26 180.135 68.8533 180.215 68.44C180.415 67.3333 180.815 66.3533 181.415 65.5C182.028 64.6467 182.775 63.9867 183.655 63.52C184.535 63.04 185.455 62.8 186.415 62.8ZM189.235 68.48C189.288 68.2267 189.315 67.9533 189.315 67.66C189.315 66.7667 189.048 66.0667 188.515 65.56C187.995 65.04 187.342 64.78 186.555 64.78C185.968 64.78 185.395 64.9267 184.835 65.22C184.275 65.5 183.788 65.92 183.375 66.48C182.962 67.0267 182.688 67.68 182.555 68.44C182.502 68.6933 182.475 68.9667 182.475 69.26C182.475 70.1667 182.735 70.8867 183.255 71.42C183.788 71.94 184.448 72.2 185.235 72.2C185.822 72.2 186.395 72.0533 186.955 71.76C187.515 71.4667 188.002 71.04 188.415 70.48C188.828 69.9067 189.102 69.24 189.235 68.48ZM205.946 74.14C204.773 74.14 203.739 73.8933 202.846 73.4C201.953 72.9067 201.259 72.2133 200.766 71.32C200.273 70.4267 200.026 69.4133 200.026 68.28C200.026 66.6933 200.379 65.2667 201.086 64C201.806 62.72 202.793 61.72 204.046 61C205.313 60.28 206.726 59.92 208.286 59.92C209.473 59.92 210.513 60.1667 211.406 60.66C212.299 61.1533 212.993 61.8467 213.486 62.74C213.979 63.62 214.226 64.6267 214.226 65.76C214.226 67.3467 213.866 68.78 213.146 70.06C212.439 71.34 211.453 72.34 210.186 73.06C208.933 73.78 207.519 74.14 205.946 74.14ZM206.266 72.08C207.359 72.08 208.326 71.8 209.166 71.24C210.019 70.68 210.679 69.9333 211.146 69C211.626 68.0533 211.866 67.0267 211.866 65.92C211.866 64.7067 211.519 63.7533 210.826 63.06C210.146 62.3533 209.193 62 207.966 62C206.873 62 205.899 62.28 205.046 62.84C204.206 63.3867 203.553 64.1267 203.086 65.06C202.619 65.9933 202.386 67.02 202.386 68.14C202.386 69.3533 202.726 70.3133 203.406 71.02C204.099 71.7267 205.053 72.08 206.266 72.08ZM222.77 62.8C223.93 62.8 224.85 63.1133 225.53 63.74C226.223 64.3533 226.57 65.24 226.57 66.4C226.57 66.6933 226.536 67.06 226.47 67.5L225.31 74H223.05L224.15 67.84C224.203 67.4667 224.23 67.2 224.23 67.04C224.23 66.3067 224.023 65.7467 223.61 65.36C223.21 64.9733 222.65 64.78 221.93 64.78C221.063 64.78 220.33 65.0467 219.73 65.58C219.143 66.1 218.77 66.8533 218.61 67.84V67.78L217.51 74H215.23L217.17 62.98H219.45L219.23 64.26C219.683 63.8067 220.216 63.4533 220.83 63.2C221.456 62.9333 222.103 62.8 222.77 62.8ZM233.118 59.2L230.498 74H228.218L230.838 59.2H233.118ZM236.851 61.52C236.491 61.52 236.198 61.4067 235.971 61.18C235.745 60.9533 235.631 60.6667 235.631 60.32C235.631 59.8533 235.805 59.4533 236.151 59.12C236.511 58.7733 236.918 58.6 237.371 58.6C237.731 58.6 238.018 58.7133 238.231 58.94C238.458 59.1667 238.571 59.4533 238.571 59.8C238.571 60.2667 238.398 60.6733 238.051 61.02C237.705 61.3533 237.305 61.52 236.851 61.52ZM237.711 62.98L235.771 74H233.491L235.431 62.98H237.711ZM246.305 62.8C247.465 62.8 248.385 63.1133 249.065 63.74C249.758 64.3533 250.105 65.24 250.105 66.4C250.105 66.6933 250.071 67.06 250.005 67.5L248.845 74H246.585L247.685 67.84C247.738 67.4667 247.765 67.2 247.765 67.04C247.765 66.3067 247.558 65.7467 247.145 65.36C246.745 64.9733 246.185 64.78 245.465 64.78C244.598 64.78 243.865 65.0467 243.265 65.58C242.678 66.1 242.305 66.8533 242.145 67.84V67.78L241.045 74H238.765L240.705 62.98H242.985L242.765 64.26C243.218 63.8067 243.751 63.4533 244.365 63.2C244.991 62.9333 245.638 62.8 246.305 62.8ZM258.473 62.8C259.846 62.8 260.94 63.1867 261.753 63.96C262.58 64.7333 262.993 65.7733 262.993 67.08C262.993 67.3867 262.96 67.7533 262.893 68.18C262.84 68.4733 262.746 68.8333 262.613 69.26H254.193C254.18 69.3533 254.173 69.4933 254.173 69.68C254.173 70.4667 254.413 71.0933 254.893 71.56C255.386 72.0267 256.026 72.26 256.813 72.26C258.053 72.26 259.006 71.7467 259.673 70.72H262.133C261.626 71.7333 260.88 72.5667 259.893 73.22C258.906 73.86 257.766 74.18 256.473 74.18C255.553 74.18 254.746 74 254.053 73.64C253.36 73.28 252.82 72.7667 252.433 72.1C252.046 71.42 251.853 70.6267 251.853 69.72C251.853 69.3333 251.893 68.92 251.973 68.48C252.173 67.3467 252.58 66.3533 253.193 65.5C253.806 64.6333 254.566 63.9667 255.473 63.5C256.393 63.0333 257.393 62.8 258.473 62.8ZM260.613 67.62C260.64 67.38 260.653 67.2067 260.653 67.1C260.653 66.3667 260.406 65.7867 259.913 65.36C259.433 64.9333 258.806 64.72 258.033 64.72C257.22 64.72 256.486 64.98 255.833 65.5C255.18 66.02 254.733 66.7267 254.493 67.62H260.613Z" fill="#886CC0" />
				</svg>
		</div>
		<!--**********************************
            Nav header end
        ***********************************-->
		<!--**********************************
            Header start	
        ***********************************-->
		<div class="header border-bottom">
			<div class="header-content">
				<nav class="navbar navbar-expand">
					<div class="collapse navbar-collapse justify-content-between">
						<div class="header-left">
							<div class="dashboard_bar">
								Dashboard
							</div>
						</div>
						<ul class="navbar-nav header-right">

							<li class="nav-item dropdown notification_dropdown">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<svg width="28" height="28" viewbox="0 0 28 28" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M23.3333 19.8333H23.1187C23.2568 19.4597 23.3295 19.065 23.3333 18.6666V12.8333C23.3294 10.7663 22.6402 8.75902 21.3735 7.12565C20.1068 5.49228 18.3343 4.32508 16.3333 3.80679V3.49996C16.3333 2.88112 16.0875 2.28763 15.6499 1.85004C15.2123 1.41246 14.6188 1.16663 14 1.16663C13.3812 1.16663 12.7877 1.41246 12.3501 1.85004C11.9125 2.28763 11.6667 2.88112 11.6667 3.49996V3.80679C9.66574 4.32508 7.89317 5.49228 6.6265 7.12565C5.35983 8.75902 4.67058 10.7663 4.66667 12.8333V18.6666C4.67053 19.065 4.74316 19.4597 4.88133 19.8333H4.66667C4.35725 19.8333 4.0605 19.9562 3.84171 20.175C3.62292 20.3938 3.5 20.6905 3.5 21C3.5 21.3094 3.62292 21.6061 3.84171 21.8249C4.0605 22.0437 4.35725 22.1666 4.66667 22.1666H23.3333C23.6428 22.1666 23.9395 22.0437 24.1583 21.8249C24.3771 21.6061 24.5 21.3094 24.5 21C24.5 20.6905 24.3771 20.3938 24.1583 20.175C23.9395 19.9562 23.6428 19.8333 23.3333 19.8333Z"
											fill="#717579"></path>
										<path
											d="M9.9819 24.5C10.3863 25.2088 10.971 25.7981 11.6766 26.2079C12.3823 26.6178 13.1838 26.8337 13.9999 26.8337C14.816 26.8337 15.6175 26.6178 16.3232 26.2079C17.0288 25.7981 17.6135 25.2088 18.0179 24.5H9.9819Z"
											fill="#717579"></path>
									</svg>
									<span class="badge light text-white bg-warning rounded-circle">12</span>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<div id="DZ_W_Notification1" class="widget-media dlab-scroll p-3"
										style="height:380px;">
										<ul class="timeline">
											<li>
												<div class="timeline-panel">
													<div class="media me-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-info">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-success">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-danger">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-primary">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<a class="all-notification" href="javascript:void(0);">See all notifications <i
											class="ti-arrow-end"></i></a>
								</div>
							</li>


							<li class="nav-item dropdown  header-profile">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
								<img src="upload/<?=$user['pp']?>"class="img-fluid rounded-circle">
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="profile.php" class="dropdown-item ai-icon">
										<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
											width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor"
											stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
											<circle cx="12" cy="7" r="4"></circle>
										</svg>
										<span class="ms-2">Profile </span>
									</a>
									\
									<a href="page-error-404.html" class="dropdown-item ai-icon">
										<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
											width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor"
											stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
											<polyline points="16 17 21 12 16 7"></polyline>
											<line x1="21" y1="12" x2="9" y2="12"></line>
										</svg>
										<span class="ms-2">Logout </span>
									</a>
								</div>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
		<!--**********************************
            Header end ti-comment-alt
        ***********************************-->

		<!--**********************************
            Sidebar start
        ***********************************-->
		<div class="dlabnav">
			<div class="dlabnav-scroll">
				<ul class="metismenu" id="menu">
					<li><a href="index.php" aria-expanded="false">
							<i class="fas fa-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>

					</li>

					<li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="fas fa-info-circle"></i>
							<span class="nav-text">Master Data</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="data-admin.php">Data Admin</a></li>
							<li><a href="data-customer.php">Data Customer</a></li>
							<li><a href="data-daftar-harga-print.html">Daftar Harga Print</a></li>
							<li><a href="data-barang.php">Data Barang</a></li>
						</ul>
					</li>
					<li><a  href="transaksi-invoice.php" aria-expanded="false">
							<i class="fas fa-file-alt"></i>
							<span class="nav-text">Transaksi</span>
						</a>
					</li>
					<li><a href="riwayat.php" aria-expanded="false">
							<i class="fas fa-table"></i>
							<span class="nav-text">Riwayat</span>
						</a>
					</li>
					<div class="copyright">
						<p><strong>PRON TEAM</strong> © 2022 All Rights Reserved</p>
					</div>
				</ul>
			</div>
		</div>
		<!--**********************************
            Sidebar end
        ***********************************-->

		<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body">
			<!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="row">
							<div class="col-xl-6">
								<div class="row">
									<div class="col-xl-12">
										<div class="card">
											<div class="card-header border-0 flex-wrap">
												<h4 class="fs-20 font-w700 mb-2">Project Statistics</h4>
												<div class="d-flex align-items-center project-tab mb-2">
													<div class="dropdown ms-2">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24" height="24" viewbox="0 0 24 24" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5">
																</circle>
																<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5">
																</circle>
																<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5">
																</circle>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item"
																href="javascript:void(0)">Delete</a>
															<a class="dropdown-item" href="javascript:void(0)">Edit</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body">
												<div
													class="d-flex justify-content-between align-items-center flex-wrap">
													<div class="d-flex">
														<div
															class="d-inline-block position-relative donut-chart-sale mb-3">
															<span class="donut1"
																data-peity='{ "fill": ["rgba(136,108,192,1)", "rgba(241, 234, 255, 1)"],   "innerRadius": 20, "radius": 15}'>5/8</span>
														</div>
														<div class="ms-3">
															<h4 class="fs-24 font-w700 ">246</h4>
															<span class="fs-16 font-w400 d-block">Total Projects</span>
														</div>
													</div>
													<div class="d-flex">
														<div class="d-flex me-5">
															<div class="mt-2">
																<svg width="13" height="13" viewbox="0 0 13 13"
																	fill="none" xmlns="http://www.w3.org/2000/svg">
																	<circle cx="6.5" cy="6.5" r="6.5" fill="#FFCF6D">
																	</circle>
																</svg>
															</div>
															<div class="ms-3">
																<h4 class="fs-24 font-w700 ">246</h4>
																<span class="fs-16 font-w400 d-block">On Going</span>
															</div>
														</div>
														<div class="d-flex">
															<div class="mt-2">
																<svg width="13" height="13" viewbox="0 0 13 13"
																	fill="none" xmlns="http://www.w3.org/2000/svg">
																	<circle cx="6.5" cy="6.5" r="6.5" fill="#FFA7D7">
																	</circle>
																</svg>

															</div>
															<div class="ms-3">
																<h4 class="fs-24 font-w700 ">28</h4>
																<span class="fs-16 font-w400 d-block">Unfinished</span>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-content">
													<div class="tab-pane fade active show" id="monthly">
														<div id="chartBar" class="chartBar"></div>
													</div>
													<div class="tab-pane fade" id="Weekly">
														<div id="chartBar1" class="chartBar"></div>
													</div>
													<div class="tab-pane fade" id="Today">
														<div id="chartBar2" class="chartBar"></div>
													</div>
												</div>

											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="card">
											<div class="card-header border-0 pb-0">
												<h4 class="fs-20 font-w700 mb-0">Completion Project Rate</h4>
												<div class="dropdown ">
													<div class="btn-link" data-bs-toggle="dropdown">
														<svg width="24" height="24" viewbox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5">
															</circle>
															<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5">
															</circle>
															<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5">
															</circle>
														</svg>
													</div>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="javascript:void(0)">Delete</a>
														<a class="dropdown-item" href="javascript:void(0)">Edit</a>
													</div>
												</div>
											</div>
											<div class="card-body pb-0">
												<div id="revenueMap" class="revenueMap"></div>
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="card">
											<div class="card-header border-0">
												<div>
													<h4 class="fs-20 font-w700">Recent Emails</h4>
													<span class="fs-14 font-w400">Lorem ipsum dolor sit amet</span>
												</div>
												<div>
													<a href="javascript:void(0);"
														class="btn btn-outline-primary btn-rounded fs-18">View More</a>
												</div>
											</div>
											<div class="card-body px-0">
												<div class="d-flex justify-content-between recent-emails">
													<div class="d-flex">
														<div class="profile-k">
															<span class="bg-success">K</span>
														</div>
														<div class="ms-3">
															<h4 class="fs-18 font-w500">How to improve project
																management flows</h4>
															<span class="font-w400 d-block">Lorem ipsum dolor sit amet,
																consectetur adipiscing elit, sed do<br> eiusmod tempor
																incididunt ut labore et dolore magna aliqua...</span>
														</div>
													</div>
													<div class="email-check">
														<label class="like-btn mb-0">
															<input type="checkbox">
															<span class="checkmark"></span>
														</label>
													</div>
												</div>
												<div class="d-flex justify-content-between recent-emails">
													<div class="d-flex">
														<div class="profile-k">
															<img src="images/profile/small/pic6.jpg" alt="">
														</div>
														<div class="ms-3">
															<h4 class="fs-18 font-w500">Fillow Final UseCase Diagram
															</h4>
															<span class="font-w400 d-block">Lorem ipsum dolor sit amet,
																consectetur adipiscing elit, sed do<br> eiusmod tempor
																incididunt ut labore et dolore magna aliqua...</span>
															<div class="final-badge">
																<span class="badge text-black border"><i
																		class="far fa-file-alt me-3"></i>Master_file.fig</span>
																<span class="badge text-black border"><i
																		class="fas fa-image me-2"></i>CoverPreview.jpg</span>
																<span class="badge border bgl-primary font-w700">4 files
																	more</span>
															</div>
														</div>
													</div>
													<div class="email-check">
														<label class="like-btn mb-0">
															<input type="checkbox">
															<span class="checkmark"></span>
														</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
							<div class="col-xl-6">
								<div class="row">
									<div class="col-xl-12">
										<div class="row">
											<div class="col-xl-6 col-sm-6">
												<div class="card">
													<div class="card-body d-flex px-4 pb-0 justify-content-between">
														<div>
															<h4 class="fs-18 font-w600 mb-4 text-nowrap">Total Clients
															</h4>
															<div class="d-flex align-items-center">
																<h2 class="fs-32 font-w700 mb-0">68</h2>
																<span class="d-block ms-4">
																	<svg width="21" height="11" viewbox="0 0 21 11"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M1.49217 11C0.590508 11 0.149368 9.9006 0.800944 9.27736L9.80878 0.66117C10.1954 0.29136 10.8046 0.291359 11.1912 0.661169L20.1991 9.27736C20.8506 9.9006 20.4095 11 19.5078 11H1.49217Z"
																			fill="#09BD3C"></path>
																	</svg>
																	<small
																		class="d-block fs-16 font-w400 text-success">+0,5%</small>
																</span>
															</div>
														</div>
														<div id="columnChart"></div>
													</div>
												</div>
											</div>
											<div class="col-xl-6 col-sm-6">
												<div class="card">
													<div class="card-body px-4 pb-0">
														<h4 class="fs-18 font-w600 mb-5 text-nowrap">Total Clients</h4>
														<div class="progress default-progress">
															<div class="progress-bar bg-gradient1 progress-animated"
																style="width: 40%; height:10px;" role="progressbar">
																<span class="sr-only">45% Complete</span>
															</div>
														</div>
														<div
															class="d-flex align-items-end mt-2 pb-3 justify-content-between">
															<span>76 left from target</span>
															<h4 class="mb-0">42</h4>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-6 col-sm-6">
												<div class="card">
													<div class="card-body d-flex px-4  justify-content-between">
														<div>
															<div class="">
																<h2 class="fs-32 font-w700">562</h2>
																<span class="fs-18 font-w500 d-block">Total
																	Clients</span>
																<span class="d-block fs-16 font-w400"><small
																		class="text-danger">-2%</small> than last
																	month</span>
															</div>
														</div>
														<div id="NewCustomers"></div>
													</div>
												</div>
											</div>
											<div class="col-xl-6 col-sm-6">
												<div class="card">
													<div class="card-body d-flex px-4  justify-content-between">
														<div>
															<div class="">
																<h2 class="fs-32 font-w700">892</h2>
																<span class="fs-18 font-w500 d-block">New
																	Projects</span>
																<span class="d-block fs-16 font-w400"><small
																		class="text-success">-2%</small> than last
																	month</span>
															</div>
														</div>
														<div id="NewCustomers1"></div>
													</div>
												</div>
											</div>
										</div>

									</div>
									<div class="col-xl-12">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col-xl-6 col-sm-6">
														<div class=" owl-carousel card-slider">
															<div class="items">
																<h4 class="fs-20 font-w700 mb-4">Fillow Company Profile
																	Website Project</h4>
																<span class="fs-14 font-w400">Sed ut perspiciatis unde
																	omnis iste natus error sit voluptatem accusantium
																	doloremque </span>
															</div>
															<div class="items">
																<h4 class="fs-20 font-w700 mb-4">Fillow Company Profile
																	Website Project</h4>
																<span class="fs-14 font-w400">Sed ut perspiciatis unde
																	omnis iste natus error sit voluptatem accusantium
																	doloremque </span>
															</div>
															<div class="items">
																<h4 class="fs-20 font-w700 mb-4">Fillow Company Profile
																	Website Project</h4>
																<span class="fs-14 font-w400">Sed ut perspiciatis unde
																	omnis iste natus error sit voluptatem accusantium
																	doloremque </span>
															</div>
														</div>
													</div>
													<div class="col-xl-6 redial col-sm-6">
														<div id="redial"></div>
														<span class="text-center d-block fs-18 font-w600">On Progress
															<small class="text-success">70%</small></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-12 col-lg-12">
										<div class="row">
											<div class="col-xl-6 col-xxl-12 col-sm-6">
												<div class="card">
													<div class="card-header border-0">
														<div>
															<h4 class="fs-20 font-w700">Email Categories</h4>
															<span class="fs-14 font-w400 d-block">Lorem ipsum dolor sit
																amet</span>
														</div>
													</div>
													<div class="card-body">
														<div id="emailchart"> </div>
														<div class="mb-3 mt-4">
															<h4 class="fs-18 font-w600">Legend</h4>
														</div>
														<div>
															<div
																class="d-flex align-items-center justify-content-between mb-4">
																<span class="fs-18 font-w500">
																	<svg class="me-3" width="20" height="20"
																		viewbox="0 0 20 20" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="20" height="20" rx="6"
																			fill="#886CC0"></rect>
																	</svg>
																	Primary (27%)
																</span>
																<span class="fs-18 font-w600">763</span>
															</div>
															<div
																class="d-flex align-items-center justify-content-between  mb-4">
																<span class="fs-18 font-w500">
																	<svg class="me-3" width="20" height="20"
																		viewbox="0 0 20 20" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="20" height="20" rx="6"
																			fill="#26E023"></rect>
																	</svg>
																	Promotion (11%)
																</span>
																<span class="fs-18 font-w600">321</span>
															</div>
															<div
																class="d-flex align-items-center justify-content-between  mb-4">
																<span class="fs-18 font-w500">
																	<svg class="me-3" width="20" height="20"
																		viewbox="0 0 20 20" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="20" height="20" rx="6"
																			fill="#61CFF1"></rect>
																	</svg>
																	Forum (22%)
																</span>
																<span class="fs-18 font-w600">69</span>
															</div>
															<div
																class="d-flex align-items-center justify-content-between  mb-4">
																<span class="fs-18 font-w500">
																	<svg class="me-3" width="20" height="20"
																		viewbox="0 0 20 20" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="20" height="20" rx="6"
																			fill="#FFDA7C"></rect>
																	</svg>
																	Socials (15%)
																</span>
																<span class="fs-18 font-w600">154</span>
															</div>
															<div
																class="d-flex align-items-center justify-content-between  mb-4">
																<span class="fs-18 font-w500">
																	<svg class="me-3" width="20" height="20"
																		viewbox="0 0 20 20" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="20" height="20" rx="6"
																			fill="#FF86B1"></rect>
																	</svg>
																	Spam (25%)
																</span>
																<span class="fs-18 font-w600">696</span>
															</div>
														</div>

													</div>
													<div class="card-footer border-0 pt-0">
														<a href="javascript:void(0);"
															class="btn btn-outline-primary d-block btn-rounded">Update
															Progress</a>

													</div>
												</div>
											</div>
											<div class="col-xl-6 col-xxl-12 col-sm-6">
												<div class="card">
													<div class="card-header border-0 pb-0">
														<div>
															<h4 class="fs-20 font-w700">Important Projects</h4>
															<span class="fs-14 font-w400 d-block">Lorem ipsum dolor sit
																amet</span>
														</div>
													</div>
													<div class="card-body pb-0">
														<div class="project-details">
															<div
																class="d-flex align-items-center justify-content-between">
																<div class="d-flex align-items-center">
																	<span class="big-wind">
																		<img src="images/big-wind.png" alt="">
																	</span>
																	<div class="ms-3">
																		<h4>Big Wind</h4>
																		<span class="fs-14 font-w400">Creative
																			Agency</span>
																	</div>
																</div>
																<div class="dropdown">
																	<div class="btn-link" data-bs-toggle="dropdown">
																		<svg width="24" height="24" viewbox="0 0 24 24"
																			fill="none"
																			xmlns="http://www.w3.org/2000/svg">
																			<circle cx="12.4999" cy="3.5" r="2.5"
																				fill="#A5A5A5"></circle>
																			<circle cx="12.4999" cy="11.5" r="2.5"
																				fill="#A5A5A5"></circle>
																			<circle cx="12.4999" cy="19.5" r="2.5"
																				fill="#A5A5A5"></circle>
																		</svg>
																	</div>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item"
																			href="javascript:void(0)">Delete</a>
																		<a class="dropdown-item"
																			href="javascript:void(0)">Edit</a>
																	</div>
																</div>
															</div>
															<h4 class="fs-16 font-w600 mt-4">Optimization Dashboard Page
																for indexing in Google</h4>
															<div class="projects">
																<span
																	class="badge bgl-warning text-warning font-w700 me-3">SEO</span>
																<span
																	class="badge bgl-danger text-danger font-w700">MARKETING</span>
															</div>
															<div class="mt-3">
																<div class="progress default-progress">
																	<div class="progress-bar bg-gradient1 progress-animated"
																		style="width: 45%; height:10px;"
																		role="progressbar">
																		<span class="sr-only">45% Complete</span>
																	</div>
																</div>
																<div
																	class="d-flex align-items-end mt-3 pb-3 justify-content-between">
																	<span class="fs-14 font-w400"><small
																			class="font-w700 me-2">12</small>Task
																		Done</span>
																	<span class="fs-14 font-w400">Due date:
																		12/05/2020</span>
																</div>
															</div>
														</div>
														<div class="project-details">
															<div
																class="d-flex align-items-center justify-content-between">
																<div class="d-flex align-items-center">
																	<span class="big-wind">
																		<img src="images/circle-hunt.png" alt="">
																	</span>
																	<div class="ms-3">
																		<h4>Circle Hunt</h4>
																		<span class="fs-14 font-w400">Creative
																			Agency</span>
																	</div>
																</div>
																<div class="dropdown">
																	<div class="btn-link" data-bs-toggle="dropdown">
																		<svg width="24" height="24" viewbox="0 0 24 24"
																			fill="none"
																			xmlns="http://www.w3.org/2000/svg">
																			<circle cx="12.4999" cy="3.5" r="2.5"
																				fill="#A5A5A5"></circle>
																			<circle cx="12.4999" cy="11.5" r="2.5"
																				fill="#A5A5A5"></circle>
																			<circle cx="12.4999" cy="19.5" r="2.5"
																				fill="#A5A5A5"></circle>
																		</svg>
																	</div>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item"
																			href="javascript:void(0)">Delete</a>
																		<a class="dropdown-item"
																			href="javascript:void(0)">Edit</a>
																	</div>
																</div>
															</div>
															<h4 class="fs-16 font-w600 mt-4">Redesign Landing Page
																Website for Company Profile</h4>
															<div class="projects">
																<span
																	class="badge bgl-primary text-primary font-w700 me-3">UI/UX</span>
																<span
																	class="badge bgl-danger text-danger font-w700">WEBSITE</span>
															</div>
															<div class="mt-3">
																<div class="progress default-progress">
																	<div class="progress-bar bg-gradient1 progress-animated"
																		style="width: 45%; height:10px;"
																		role="progressbar">
																		<span class="sr-only">45% Complete</span>
																	</div>
																</div>
																<div
																	class="d-flex align-items-end mt-3 pb-3 justify-content-between">
																	<span class="fs-14 font-w400"><small
																			class="font-w700 me-2">12</small>Task
																		Done</span>
																	<span class="fs-14 font-w400">Due date:
																		12/05/2020</span>
																</div>
															</div>
														</div>
													</div>
													<div class="card-footer pt-0 border-0">
														<a href="javascript:void(0);"
															class="btn btn-outline-primary d-block btn-rounded">Pin
															other projects</a>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--**********************************
            Content body end
        ***********************************-->




		<!--**********************************
            Footer start
        ***********************************-->
		<div class="footer">
			<div class="copyright">
				<p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">DexignLab</a> 2021</p>
			</div>
		</div>
		<!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

		<!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
	<!--**********************************
        Main wrapper end
    ***********************************-->

	<!--**********************************
        Scripts
    ***********************************-->
	<!-- Required vendors -->
	<script src="vendor/global/global.min.js"></script>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>

	<script src="vendor/chart.js/Chart.bundle.min.js"></script>

	<!-- Chart piety plugin files -->
	<script src="vendor/peity/jquery.peity.min.js"></script>
	<!-- Dashboard 1 -->
	<script src="js/dashboard/dashboard-1.js"></script>

	<script src="vendor/owl-carousel/owl.carousel.js"></script>

	<script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>
	<script src="js/demo.js"></script>
	<!-- <script src="js/styleSwitcher.js"></script> -->
	<script>
		function cardsCenter() {

			/*  testimonial one function by = owl.carousel.js */



			jQuery('.card-slider').owlCarousel({
				loop: true,
				margin: 0,
				nav: true,
				//center:true,
				slideSpeed: 3000,
				paginationSpeed: 3000,
				dots: true,
				navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
				responsive: {
					0: {
						items: 1
					},
					576: {
						items: 1
					},
					800: {
						items: 1
					},
					991: {
						items: 1
					},
					1200: {
						items: 1
					},
					1600: {
						items: 1
					}
				}
			})
		}

		jQuery(window).on('load', function () {
			setTimeout(function () {
				cardsCenter();
			}, 1000);
		});

	</script>

</body>

</html>