<?php
$park = true;
$city = true;
$name = true;
$mail = true;
$title = true;
$match = true;
$error = false;
$pass  = false;
if(isset($_POST['submit'])) {
  $submit = true;
  /* check submission values */
  if(!isset($_POST['res'])) {
    $res = 0;
    $error = true;
    $park = false; /* favorite park not selected */
  } else {
    $res = $_POST['res'];
  }
  if(!isset($_POST['cc'])) {
    $cc = 0;
    $error = true;
    $city = false; /* greenest city not selected */
  } else {
    $cc = $_POST['cc'];
    if($cc === "0") {
      $error = true;
      $city = false; /* greenest city not selected */
    }
  }
  if(isset($_POST['n'])||isset($_POST['em'])||isset($_POST['ev'])) {
    if(isset($_POST['t'])) { $t = $_POST['t']; } else { $t = ""; }
    if(isset($_POST['n'])) { $n = $_POST['n']; } else { $n = ""; }
    if(isset($_POST['em'])) { $em = $_POST['em']; } else { $em = ""; }
    if(isset($_POST['ev'])) { $ev = $_POST['ev']; } else { $ev = ""; }
    if((strlen($n)>0)||(strlen($em)>0)||(strlen($ev)>0)) {
      /* some values provided -> check details */
      if(strlen($n)<1) {
        $error = true;
        $name = false; /* no name provided */
      }
      if(!isset($_POST['t'])) {
        $error = true;
        $title = false; /* no title set */
      }
      if((strlen($em)<6)||(preg_match("/^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$/", $em)==0)) {
        $error = true;
        $mail = false; /* invalid e-mail */
      }
      if((strlen($ev)<6)||($em!=$ev)) {
        $error = true;
        $match = false; /* e-mail mismatch */
      }
    }
  }
  if (!$error) {
    $pass = true;
  }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="pl">
	<head>
		<title><?php
if(isset($submit)) {
  if (!$error) {
    echo "Sondaż Świateł Miasta - Submission Completed [Niedostępna strona Ankieta]";
  } else {
    echo "Sondaż Świateł Miasta - Submission Failed [Niedostępna strona Ankieta]";
  }
} else {
  echo "Sondaż Świateł Miasta [Niedostępna strona Ankieta]";
}?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<style>
      body { 
        color: #000; 
      }
      #main p, td, form {
        color: #000000;
        font: normal 15px/17px "Times New Roman", Times, serif;
        text-decoration: none;
      }
      #main .headline {
        margin-top: 0px;
        color: #41545d;
        font: 24px verdana;
        font-family: impact;
        text-decoration: none;
      }
      .comment {
        margin-top: 1em;
      }
      .hundred {
        font-size: 100%;
      }
      .bordotabella {
        background: #ededed;
        border: 2px solid gray;
      }
      .bordotabellacapitolo {
        background: #a9b8bf;
      }
		</style>
		<link href="../css/meta.css" rel="stylesheet" type="text/css">	
		<script type="text/javascript">
      function ChangeColor(id, colour){
        document.getElementById(id).style.backgroundColor=colour;
      }
      function switchImage(imgName, imgSrc){
        if (document.images){
          if (imgSrc != "none"){
              document.images[imgName].src = imgSrc;
          }
        }
      }
		</script>
		<noscript>Strona używa skryptów!!!</noscript>
		<script src="../js/onload.js" type="text/javascript"></script>	
	</head>	
	<body text="#000000" bgcolor="d7d7cd" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" link="#226c8e" vlink="#226c8e" alink="226c8ee">
	
		<div id="meta-header">
			<p id="skipnav"><a href="#page">Przejdź do demo strony niedostępnej</a></p>

			<p id="logos"><a href="http://www.w3.org/" title="W3C Home"><img alt="W3C logo" src="../img/w3c.png" height="48" width="72"></a><a href="http://www.w3.org/WAI/" title="WAI Home"><img alt="Web Accessibility Initiative (WAI) logo" src="../img/wai.png" height="48"></a></p>
			
			<h1><span class="subhead">Niedostępna strona Ankieta </span><span class="hidden"> -</span> Demo Przed i Po modernizacji</h1>
			<p class="subline">Ulepsz witrynę, używając Web Content Accessibility Guidelines (WCAG) 2.1</p>
			
			<div id="mnav" class="inaccessible">
				<ul>
					<li class="first"><a href="../Overview.html">Przegląd</a></li>
					<li class="first"><a href="home.html">Start</a></li>
					<li><a href="news.html">Nowiny</a></li>
					<li><a href="tickets.html">Bilety</a></li>
					<li class="current"><span class="hidden">Jesteś tutaj: </span>Ankieta
						<div class="subnav">
							<ul>
								<li class="inaccessible"><strong>Niedostępna:</strong><a class="page current"><span class="hidden">Niedostępna </span>strona Ankieta</a><a href="./reports/survey.html" class="report"><span class="hidden">Niedostępna strona Ankieta </span> Raport</a></li>
								<li class="accessible"><strong>Dostępna:</strong><a href="../after/survey.html" class="page"><span class="hidden">Dostępna </span>strona Ankieta</a><a href="../after/reports/survey.html" class="report"><span class="hidden">Dostępna strona Ankieta </span> Raport</a></li>
							</ul>
							<a href="./annotated/survey.html" class="annotoggle">Pokaż <br>adnotacje</a>
						</div>
					</li>
					<li><a href="template.html">Szablon</a></li>
				</ul>
			  </div>
			</div>
			<div id="page">
			<p class="skip" id="startcontent">Demo zaczyna się tutaj</p>
<!-- PAGE TABLE -->
			<table width="100%" align="center" border="0" cellspacing="0" cellpadding="0" bgcolor="#f9f9f9">
				<tr>
					<td width="100%" align="center">
<!-- CONTENT TABLE -->
						<table width="1170" border="0" cellspacing="0" cellpadding="0" bgcolor="white">
							<tr height="1" bgcolor="#e6e6e6">
								<td width="1" background="./img/border.png" bgcolor="#e6e6e6"><img src="./img/border.png" width="1" height="1"></td>
								<td width="1168" background="./img/border.png" bgcolor="#e6e6e6"><img src="./img/border.png" width="1" height="1"></td>
								<td width="1" background="./img/border.png" bgcolor="#e6e6e6"><img src="./img/border.png" width="1" height="1"></td>
							</tr>
<!-- ROW WITH HEADING TABLE -->
							<tr>
								<td width="1" background="./img/border.png" bgcolor="#e6e6e6"><img src="./img/border.png" width="1"></td>
								<td width="1168" align=center>
									<!-- START HEADING TABLE -->
									<table width="1168" height="100" border="0" cellspacing="0" cellpadding="0" bgcolor="white">
										<tr height="14">
											<td colspan="4"></td>
										</tr>
										<tr height="86">
											<td width="750"><a href=home.html><img src="./img/swiatlomiasta.png" width="750" height="86" alt="Niebieska kropka z białą literą 'M'. Za logo znajduje się ciemnoniebieski baner z napisem 'Swiatła Miasta', który jest nazwą portalu internetowego. Dalej umieszczono hasło portalu, 'Twoje okno na miasto', napisane pismem odręcznym lekko pochylone w poprzek górnego paska."></a>
											</td>
											<td width="114" valign="middle"><img src="./img/top_weather.png" width="114" height="86"></td>
											<td width="85" valign="middle"align="right"><img src="./img/logo_end.png" width="70" height="86"></td>
											<td width="220" background="../img/logo_end.png" align="center" valign="middle" height="86">
												<select onchange="location.href = this.value;">
													<option selected>QUICKMENU ----&gt;
													<option VALUE="../offsite.html">Bezpieczeństwo</option>										
													<option VALUE="../offsite.html">Biblioteki publiczne</option>
													<option VALUE="../offsite.html">Domy społeczne</option>										
													<option VALUE="../offsite.html">Edukacja</option>
													<option VALUE="../offsite.html">Energetyka</option>	
													<option VALUE="../offsite.html">Gospodarka odpadami</option>
													<option VALUE="../offsite.html">Pogotowie gazowe</option>
													<option VALUE="../offsite.html">Policja</option>
													<option VALUE="../offsite.html">Polityka rozwoju</option>												
													<option VALUE="../offsite.html">Radio i telewizja</option>
													<option VALUE="../offsite.html">Sport</option>
													<option VALUE="../offsite.html">Straż pożarna</option>
													<option VALUE="../offsite.html">Telekomunikacja</option>
													<option VALUE="../offsite.html">Transport</option>
													<option VALUE="../offsite.html">Turystyka</option>		
													<option VALUE="../offsite.html">Usługi socjalne</option>
													<option VALUE="../offsite.html">Wodociągi i kanalizacja</option>
													<option VALUE="../offsite.html">Wypoczynek</option>										
													<option VALUE="../offsite.html">Zdrowie</option>										
												</select>											
											</td>
										</tr>
										<tr height="14">
											<td colspan="4"></td>
										</tr>
										<tr height="1">
											<td colspan="4" background="./img/border_2_top.svg" bgcolor="#e6e6e6"><img src="./img/border_2_top.svg" height="2"></td>
										</tr>
										<tr height="25">
											<td colspan="4">
												<table width="1168" border="0" cellspacing="0" cellpadding="0">
													<tr height="25">
														<td bgcolor="#EDEDED" width="10"> </td>
														<td bgcolor="#EDEDED" width=380><B> Ruch:</B> Roboty budowlane na głównej drodze</td>
														<td bgcolor="#FFFFFF" align=RIGHT ID="WEATHER"><B>Dzisiaj:</B> 
															<script>
																var now = new Date();
																var days = new Array('Niedziela', 'Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota');
																var months = new Array('stycznia', 'lutego', 'marca', 'kwietnia', 'maja', 'czerwca', 'lipca', 'sierpnia', 'września', 'października', 'listopada', 'grudnia');
																var date = ((now.getDate()<10) ? "0" : "")+ now.getDate();
																function fourdigits(number)	{
																return (number < 1000) ? number + 1900 : number;
																}
																today =  days[now.getDay()] + " " + date + " " + months[now.getMonth()] + " " + (fourdigits(now.getYear())) + ", Słonecznie, 23&deg;C&nbsp;&nbsp;";
																document.all.WEATHER.setAttribute("bgcolor", "#EDEDED", 0);
																document.write(today);
															</script>
														</td>
														<td bgcolor="#EDEDED" width="10"> </td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td colspan=4 width="1168" bgcolor="white" background="./img/border_2_bottom.svg"><img src="./img/border_2_bottom.svg" height="2"></td>
										</tr>
										<tr height="14">
											<td colspan="4"> </td>
										</tr>
									</table>
									<!-- END HEADING TABLE -->
								<td width="1" background="./img/border.png" bgcolor="#e6e6e6"><img src="./img/border.png" width="1"></td>
							<tr>
<!-- ROW WITH CONTENT TABLE -->
							<tr>
								<td width="1" background="./img/border.png" bgcolor="#e6e6e6"><img src="./img/border.png" width="1"></td>
								<td width="1168" align=center>
									<!-- START CONTENT TABLE  -->
									<table width="1168" height="100" border="0" cellspacing="0" cellpadding="0" bgcolor="white">	
										<tr>
											<!-- START LEFT COLUMN CONTENT -->
											<td width="220" bgcolor="#f2f2f2" valign="top">
												<table width="220" border="0" cellspacing="0" cellpadding="0">
													<tr height="57">
														<td width="220"bgcolor="#EDEDED" id="home" onMouseOver="switchImage('nav_home', './img/home_1.png'); ChangeColor('home','#FFF')" onMouseOut="switchImage('nav_home', './img/home_2.png'); ChangeColor('home','#EDEDED')"><a href="javascript:location.href='home.html';" onFocus="blur();"><img name="nav_home" src="./img/home_2.png" width="220" height="57" border="0"></a>
														</td>
													</tr>
													<tr height="57">
														<td width="220" bgcolor="#EDEDED" id="news" onMouseOver="switchImage('nav_news', './img/news_1.png'); ChangeColor('news','#FFF')" onMouseOut="switchImage('nav_news', './img/news_2.png'); ChangeColor('news','#EDEDED')"><a href="javascript:location.href='news.html';" ONFOCUS="blur();"><img src="./img/news_2.png" name="nav_news" width="220" height="57" border="0"></a>
														</td>
													</tr>									
													<tr height="57">
														<td width="220" bgcolor="#EDEDED" id="tickets" onMouseOver="switchImage('nav_facts', './img/ticket_1.png'); ChangeColor('tickets','#FFF')" onMouseOut="switchImage('nav_facts', './img/ticket_2.png'); ChangeColor('tickets','#EDEDED')"><a href="javascript:location.href='tickets.html';" ONFOCUS="blur();"><IMG name="nav_facts" SRC="./img/ticket_2.png" width="220" height="57" border="0"></a>
														</td>
													</tr>									
													<tr height="57">
														<td width="220" bgcolor="#EDEDED" id="survey" onMouseOver="switchImage('nav_survey', './img/survey_1.png'); ChangeColor('survey','#FFF')" onMouseOut="switchImage('nav_survey', './img/survey_2.png'); ChangeColor('survey','#EDEDED')"><a href="javascript:location.href='survey.html';" ONFOCUS="blur();"><img src="./img/survey_2.png" name="nav_survey" width="220" height="57" border="0"></a>
														</td>
													</tr>									
												</table> 
											</td>
											<!-- END LEFT COLUMN CONTENT -->

											<td width="30"><img src="./img/blank_5x5.gif" width="30" height="5"></td>
											<!-- START CONTENT COLUMN -->
											<td width="888" height="600" valign="top" id="main">
											  <p class="headline">Sondaż Świateł Miasta</p><?php
if(isset($submit)&&(!$error)) { /* successful submission */ ?>
          <p>&nbsp;</p><?php
} else { /* print submission form */ ?>
											  <p class="headline"><font size="4">Ankieta tygodnia: Więcej parków miejskich - strata czy zysk?</font></p>
												<form action="survey.php" method="post">
												<table class="bordotabella" width="95%" border="0" cellspacing="2" cellpadding="0">
												  <tr>
													<td>	
													  <table width="122" border="0" cellspacing="2" cellpadding="0">
														<tr>
														  <td><img src="./img/gif.gif" alt="" height="25" width="11" border="0"></td>
														  <td>
															<table width="500" border="0" cellspacing="2" cellpadding="0">
															  <tr>
																<td colspan="4"><img src="./img/gif.gif" alt="" height="10" width="10" border="0"></td>
															  </tr><?php
  if(isset($submit)&&(!$park)) {?>
															  <tr>
																<th align="left" colspan="3"><span><font color="red">Jaki jest twój ulubiony park miejski?</font></span></th>
																<td height="31%"><img src="./img/gif.gif" alt="" height="25" width="5" border="0"></td>
															  </tr><?php
  } else {?>
															  <tr>
																<th align="left" colspan="3"><span>Jaki jest twój ulubiony park miejski?</span></th>
																<td height="31%"><img src="./img/gif.gif" alt="" height="25" width="5" border="0"></td>
															  </tr><?php
  }?>                          
															  <tr height="72">
																<td valign="top" width="35" height="72">
																  <table width="34" border="0" cellspacing="2" cellpadding="0">
																	<tr height="31%">
																	  <td width="24"><input class="align" type="radio" name="res" value="1"></td>
																	  <td height="31%"><img src="./img/gif.gif" alt="" height="25" width="5" border="0"></td>
																	</tr>
																	<tr>
																	  <td width="24"><span><input class="align" type="radio" name="res" value="2"></span></td>
																	  <td><img src="./img/gif.gif" alt="" height="25" width="5" border="0"></td>
																	</tr>
																	<tr>
																	  <td width="24"><input class="align" type="radio" name="res" value="3"></td>
																	  <td><img src="./img/gif.gif" alt="" height="25" width="5" border="0"></td>
																	</tr>
																  </table>
																</td>
																<td valign="top" height="72">
																  <table width="200" border="0" cellspacing="2" cellpadding="0">
																	<tr height="35%">
																	  <td width="135" height="35%">Żaden</td>
																	  <td width="191" height="35%"><img src="./img/gif.gif" alt="" height="25" width="10" border="0"></td>
																	</tr>
																	<tr>
																	  <td width="135">Park Centralny</td>
																	  <td width="191"><img src="./img/gif.gif" alt="" height="25" width="17" border="0"></td>
																	</tr>
																	<tr>
																	  <td width="135">Park Wielki</td>
																	  <td width="191"><img src="./img/gif.gif" alt="" height="25" width="17" border="0"></td>
																	</tr>
																  </table>
																</td>
																<td valign="top" width="35" height="72">
																  <table width="34" border="0" cellspacing="2" cellpadding="0">
																	<tr height="31%">
																	  <td width="24"><input class="align" type="radio" name="res" value="4"></td>
																	  <td height="31%"><img src="./img/gif.gif" alt="" height="25" width="5" border="0"></td>
																	</tr>
																	<tr>
																	  <td width="24"><input class="align" type="radio" name="res" value="5"></td>
																	  <td><img src="./img/gif.gif" alt="" height="25" width="5" border="0"></td>
																	</tr>
																	<tr>
																	  <td width="24"><input class="align" type="radio" name="res" value="6"></td>
																	  <td><img src="./img/gif.gif" alt="" height="25" width="5" border="0"></td>
																	</tr>
																  </table>
																</td>
																<td valign="top" height="72">
																  <table width="200" border="0" cellspacing="2" cellpadding="0">
																	<tr height="35%">
																	  <td width="135" height="35%">Park Jurajski</td>
																	  <td width="191" height="35%"><img src="./img/gif.gif" alt="" height="25" width="10" border="0"></td>
																	</tr>
																	<tr>
																	  <td width="135">Park Południowy</td>
																	  <td width="191"><img src="./img/gif.gif" alt="" height="25" width="17" border="0"></td>
																	</tr>
																	<tr>
																	  <td width="135">Inny</td>
																	  <td width="191"><img src="./img/gif.gif" alt="" height="25" width="17" border="0"></td>
																	</tr>
																  </table>
																</td>
															  </tr>
															</table>
														  </td>
														</tr>
													  </table>
													</td>
												  </tr>
												</table>
												<p></p>
												<table class="bordotabella" width="95%" border="0" cellspacing="2" cellpadding="0">
												  <tr>
													<td>
													  <table border="0" cellspacing="2" cellpadding="0">
														<tr>
														  <td><img src="./img/gif.gif" alt="" height="25" width="11" border="0"></td>
														  <td>
															<table border="0" cellspacing="2" cellpadding="0">
															  <tr>
																<td colspan="2"><img src="./img/gif.gif" alt="" height="10" width="10" border="0"></td>
															  </tr><?php
  if(isset($submit)&&(!$city)) {?>
															  <tr>
																<th align="left" colspan="2"><font color="red">Które miasto uważasz za najbardziej ekologiczne?</font><img src="./img/gif.gif" alt="" height="25" width="5" border="0"></th>
															  </tr><?php
  } else {?>
<tr>
																<th align="left" colspan="2">Które miasto uważasz za najbardziej ekologiczne?<img src="./img/gif.gif" alt="" height="25" width="5" border="0"></th>
															  </tr><?php
  }?>
															  <tr>
																<td valign="middle" colspan="2"><span> 
																	<select name="cc">
																	  <option value="0">Wybierz miasto -----></option>
																	  <option>Afghanistan, Kabul</option>
																	  <option>Albania, Tirana</option>
																	  <option>Algeria, Algiers</option>
																	  <option>Andorra, Andorra la Vella</option>
																	  <option>Angola, Luanda</option>
																	  <option>Antigua and Barbuda, Saint John's</option>
																	  <option>Argentina, Buenos Aires</option>
																	  <option>Armenia, Yerevan</option>
																	  <option>Australia, Canberra</option>
																	  <option>Austria, Vienna</option>
																	  <option>Azerbaijan, Baku (Baki)</option>
																	  <option>Bahamas, The Nassau</option>
																	  <option>Bahrain, Manama</option>
																	  <option>Bangladesh, Dhaka</option>
																	  <option>Barbados, Bridgetown</option>
																	  <option>Belarus, Minsk</option>
																	  <option>Belgium, Brussels</option>
																	  <option>Belize, Belmopan</option>
																	  <option>Benin, Porto-Novo</option>
																	  <option>Bhutan, Thimphu</option>
																	  <option>Bolivia, Sucre</option>
																	  <option>Bosnia and Herzegovina, Sarajevo</option>
																	  <option>Botswana, Gaborone</option>
																	  <option>Brazil, Brasilia</option>
																	  <option>Brunei, Bandar Seri Begawan</option>
																	  <option>Bulgaria, Sofia</option>
																	  <option>Burkina Faso, Ouagadougou</option>
																	  <option>Burma, Rangoon</option>
																	  <option>Burundi, Bujumbura</option>
																	  <option>Cambodia, Phnom Penh</option>
																	  <option>Cameroon, Yaounde</option>
																	  <option>Canada, Ottawa</option>
																	  <option>Cape Verde, Praia</option>
																	  <option>Central African Republic, Bangui</option>
																	  <option>Chad, N'Djamena</option>
																	  <option>Chile, Santiago</option>
																	  <option>China, Beijing</option>
																	  <option>Colombia, Bogota</option>
																	  <option>Comoros, Moroni</option>
																	  <option>Congo, Democratic Republic of the, Kinshasa</option>
																	  <option>Congo, Republic of the, Brazzaville</option>
																	  <option>Cook Islands, Avarua</option>
																	  <option>Costa Rica, San Jose</option>
																	  <option>Cote d'Ivoire, Yamoussoukro</option>
																	  <option>Croatia, Zagreb</option>
																	  <option>Cuba, Havana</option>
																	  <option>Cyprus, Nicosia</option>
																	  <option>Czech Republic, Prague</option>
																	  <option>Denmark, Copenhagen</option>
																	  <option>Djibouti, Djibouti</option>
																	  <option>Dominica, Roseau</option>
																	  <option>Dominican Republic, Santo Domingo</option>
																	  <option>East Timor, Dili</option>
																	  <option>Ecuador, Quito</option>
																	  <option>Egypt, Cairo</option>
																	  <option>El Salvador, San Salvador</option>
																	  <option>Equatorial Guinea, Malabo</option>
																	  <option>Eritrea, Asmara</option>
																	  <option>Estonia, Tallinn</option>
																	  <option>Ethiopia, Addis Ababa</option>
																	  <option>Fiji, Suva</option>
																	  <option>Finland, Helsinki</option>
																	  <option>France, Paris</option>
																	  <option>French Guiana, Cayenne</option>
																	  <option>Gabon, Libreville</option>
																	  <option>Gambia, The, Banjul</option>
																	  <option>Georgia, T'bilisi</option>
																	  <option>Germany, Berlin</option>
																	  <option>Ghana, Accra</option>
																	  <option>Greece, Athens</option>
																	  <option>Grenada, Saint George's</option>
																	  <option>Guatemala, Guatemala</option>
																	  <option>Guinea, Conakry</option>
																	  <option>Guinea-Bissau, Bissau</option>
																	  <option>Guyana, Georgetown</option>
																	  <option>Haiti, Port-au-Prince</option>
																	  <option>Holy See (Vatican City), Vatican City</option>
																	  <option>Honduras, Tegucigalpa</option>
																	  <option>Hong Kong, Hong Kong</option>
																	  <option>Hungary, Budapest</option>
																	  <option>Iceland, Reykjavik</option>
																	  <option>India, New Delhi</option>
																	  <option>Indonesia, Jakarta</option>
																	  <option>Iran, Tehran</option>
																	  <option>Iraq, Baghdad</option>
																	  <option>Ireland, Dublin</option>
																	  <option>Israel, Jerusalem</option>
																	  <option>Italy, Rome</option>
																	  <option>Jamaica, Kingston</option>
																	  <option>Japan, Tokyo</option>
																	  <option>Jordan, Amman</option>
																	  <option>Kazakhstan, Astana</option>
																	  <option>Kenya, Nairobi</option>
																	  <option>Kiribati, Tarawa</option>
																	  <option>Korea, North, P'yongyang</option>
																	  <option>Korea, South, Seoul</option>
																	  <option>Kuwait, Kuwait</option>
																	  <option>Kyrgyzstan, Bishkek</option>
																	  <option>Laos, Vientiane</option>
																	  <option>Latvia, Riga</option>
																	  <option>Lebanon, Beirut</option>
																	  <option>Lesotho, Maseru</option>
																	  <option>Liberia, Monrovia</option>
																	  <option>Libya, Tripoli</option>
																	  <option>Liechtenstein, Vaduz</option>
																	  <option>Lithuania, Vilnius</option>
																	  <option>Luxembourg, Luxembourg</option>
																	  <option>Macau, Macau</option>
																	  <option>Macedonia, The Former Yugoslav Republic of, Skopje</option>
																	  <option>Madagascar, Antananarivo</option>
																	  <option>Malawi, Lilongwe</option>
																	  <option>Malaysia, Kuala Lumpur</option>
																	  <option>Maldives, Male</option>
																	  <option>Mali, Bamako</option>
																	  <option>Malta, Valletta</option>
																	  <option>Marshall Islands, Majuro</option>
																	  <option>Mauritania, Nouakchott</option>
																	  <option>Mauritius, Port Louis</option>
																	  <option>Mexico, Mexico (Distrito Federal)</option>
																	  <option>Micronesia, Federated States of, Palikir</option>
																	  <option>Moldova, Chisinau</option>
																	  <option>Monaco, Monaco</option>
																	  <option>Mongolia, Ulaanbaatar</option>
																	  <option>Morocco, Rabat</option>
																	  <option>Mozambique, Maputo</option>
																	  <option>Namibia, Windhoek</option>
																	  <option>Nauru, Yaren District</option>
																	  <option>Nepal, Kathmandu</option>
																	  <option>Netherlands, Amsterdam</option>
																	  <option>New Zealand, Wellington</option>
																	  <option>Nicaragua, Managua</option>
																	  <option>Niger, Niamey</option>
																	  <option>Nigeria, Abuja</option>
																	  <option>Niue, Alofi</option>
																	  <option>Norway, Oslo</option>
																	  <option>Oman, Muscat</option>
																	  <option>Pakistan, Islamabad</option>
																	  <option>Palau, Koror</option>
																	  <option>Papua New Guinea, Port Moresby</option>
																	  <option>Paraguay, Asuncion</option>
																	  <option>Peru, Lima</option>
																	  <option>Philippines, Manila</option>
																	  <option>Poland, Warsaw</option>
																	  <option>Romania, Bucharest</option>
																	  <option>Russia, Moscow</option>
																	  <option>Rwanda, Kigali</option>
																	  <option>Saint Kitts and Nevis, Basseterre</option>
																	  <option>Saint Lucia, Castries</option>
																	  <option>Saint Vincent and the Grenadines, Kingstown</option>
																	  <option>Samoa, Apia</option>
																	  <option>San Marino, San Marino</option>
																	  <option>Sao Tome and Principe, Sao Tome</option>
																	  <option>Saudi Arabia, Riyadh</option>
																	  <option>Senegal, Dakar</option>
																	  <option>Serbia and Montenegro, Belgrade</option>
																	  <option>Seychelles, Victoria</option>
																	  <option>Sierra Leone, Freetown</option>
																	  <option>Singapore, Singapore</option>
																	  <option>Slovakia, Bratislava</option>
																	  <option>Slovenia, Ljubljana</option>
																	  <option>Solomon Islands, Honiara</option>
																	  <option>Somalia, Mogadishu</option>
																	  <option>South Africa, Pretoria, Cape Town</option>
																	  <option>Spain, Madrid</option>
																	  <option>Sri Lanka, Colombo</option>
																	  <option>Sudan, Khartoum</option>
																	  <option>Suriname, Paramaribo</option>
																	  <option>Swaziland, Mbabane, Lobamba</option>
																	  <option>Sweden, Stockholm</option>
																	  <option>Switzerland, Bern</option>
																	  <option>Syria, Damascus</option>
																	  <option>Taiwan, Taipei</option>
																	  <option>Tajikistan, Dushanbe</option>
																	  <option>Tanzania, Dar es Salaam</option>
																	  <option>Thailand, Bangkok</option>
																	  <option>Togo, Lome</option>
																	  <option>Tonga, Nuku'alofa</option>
																	  <option>Trinidad and Tobago, Port-of-Spain</option>
																	  <option>Tunisia, Tunis</option>
																	  <option>Turkey, Ankara</option>
																	  <option>Turkmenistan, Ashgabat</option>
																	  <option>Tuvalu, Fongafale</option>
																	  <option>Uganda, Kampala</option>
																	  <option>Ukraine, Kiev</option>
																	  <option>United Arab Emirates, Abu Dhabi</option>
																	  <option>United Kingdom, London</option>
																	  <option>United States of America, Washington, D.C.</option>
																	  <option>Uruguay, Montevideo</option>
																	  <option>Uzbekistan, Tashkent</option>
																	  <option>Vanuatu, Port-Vila</option>
																	  <option>Venezuela, Caracas</option>
																	  <option>Vietnam, Hanoi</option>
																	  <option>Yemen, Sanaa</option>
																	  <option>Zambia, Lusaka</option>
																	  <option>Zimbabwe, Harare</option>
																	</select></span><img src="./img/gif.gif" alt="" height="25" width="5" border="0">
																	<p></p>
																</td>
															  </tr>
															</table>
														  </td>
														</tr>
													  </table>
													</td>
												  </tr>
												</table>
												<p></p>
												<table class="bordotabella" width="95%" border="0" cellspacing="2" cellpadding="0">
												<table class="bordotabella" width="95%" border="0" cellspacing="2" cellpadding="0">
												  <tr>
													<td>
													  <table border="0" cellspacing="2" cellpadding="0">
														<tr>
														  <td><img src="./img/gif.gif" alt="" height="25" width="11" border="0"></td>
														  <td>
															<table border="0" cellspacing="2" cellpadding="0">
															  <tr>
																<td colspan="2"><img src="./img/gif.gif" alt="" height="10" width="10" border="0"></td>
															  </tr>
															  <tr>
																<th align="left" colspan="2"><span>Czy chcesz otrzymywać bezpłatny biuletyn?<img src="./img/gif.gif" alt="" height="25" width="5" border="0"></span></th>
															  </tr><?php
if(isset($submit)) { 
  if(!$name) {?>


                          <tr>
                            <td><font color="red">No name provided for the newsletter.</font></td>
                          </tr><?php
  } elseif(!$title) {?>
                          <tr>
                            <td><font color="red">No title provided for your name.</font></td>
                          </tr><?php
  } elseif(!$mail) {?>
                          <tr>
                            <td><font color="red">Incorrect eMail address provided.</font></td>
                          </tr><?php
  } elseif(!$match) { ?>
                          <tr>
                            <td><font color="red">eMail address does not match verification.</font></td>
                          </tr><?php
  }
}?>
															  <tr>
																<td>
																  <table border="0" cellspacing="2" cellpadding="0">
																	<tr>
																	  <td valign="bottom"><img src="./img/gif.gif" alt="" height="25" width="5" border="0"><nobr>Nazwa: <input type="radio" name="t" value="mr"> Pan <input type="radio" name="t" value="mrs"> Pani</nobr><br /><br /><input type="text" name="em" id="em" size="20" /></td>
																	  <td><img src="./img/gif.gif" alt="" height="25" width="5" border="0"></td>
																	  <td valign="bottom"><input type="text" name="n" id="n" size="30" /><br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="ev" id="ev" size="20" /></td>
																	</tr>
																	<tr>
																	  <td valign="top">Adres e-mail</td>
																	  <td><img src="./img/gif.gif" alt="" height="25" width="5" border="0"></td>
																	  <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Powtórz e-mail</td>
																	</tr>
																  </table>
																</td>
															  </tr>
															</table>
															
 														  </td>
														</tr>
													  </table>
													</td>
												  </tr>
												</table>
												<p></p>
												<table width="95%" border="0" cellspacing="2" cellpadding="0">
												  <tr>
													<td><input type="submit" id="submit" value="Wyślij" alt="Wyślij" name="submit"></td>
												  </tr>
												</table>
												<p>&nbsp;</p>
												<hr  />
											  </form><?php
}?>

											  <div style="clear:both;width:100%;padding:0px;margin:0px;">
												<div id="data"style="float:left">
												  <p style="padding-bottom:0px; margin-bottom:0px; width:300px; height:40px; overflow: hidden;" class=headline><font size="3">Wyniki ankiety z ostatniego tygodnia</font></p><b>Jakie są twoje ulubione i najmniej ulubione organy?</b></p>
												  
												  <table width="850" border="1" style="float:left; border: 1px dashed silver;">
													<tr bgcolor="#DBDBDB">
													  <td rowspan="4" width="200" bgcolor="#ffffff" style="border-right: 1px dashed silver;"><p style="background:#DBDBDB;padding-top:3px;padding-bottom:2px;"><br></p><p style="margin-bottom:0px;padding-top:3px; padding-bottom:5px" align="right"><strong>Lubię</strong></p><p style="margin-top:5px;background:#DBDBDB;padding-top:3px; padding-bottom:4px" align="right"><strong>Nie lubię</strong></p></td>
													  <td title="question" width="100"><b>Płuco</b></td>
													  <td title="question" width="100"><b>Trzustka</b></td>
													  <td title="question" width="100"><b>Śledziona</b></td>
													  <td title="question" width="100"><b>Wątroba</b></td>
													  <td title="question" width="100"><b>Skóra</b></td>
													  <td title="question" width="100"><b>Mózg</b></td>

													</tr>
													<tr>
													  <td></td>
													  <td>4</td>
													  <td>10</td>
													  <td>4</td>
													  <td></td>
													  <td>1</td>
													</tr>
													<tr>  
													</tr>
													<tr bgcolor="#DBDBDB">
													  <td>5</td>
													  <td>6</td>
													  <td></td>
													  <td>14</td>
													  <td>1</td>
													  <td></td>
													</tr>
												  </table>
												 <p>&nbsp;</p>
												 </div>
											  </div>

											 </div>
												
											</td>
											<td width="30"><img src="./img/blank_5x5.gif" width="30" height="5"></td>
											<!-- START RIGHT COLUMN CONTENT -->
										</tr>											
											

									</table>
									<!-- END CONTENT TABLE -->
								<td width="1" background="./img/border.png" bgcolor="#e6e6e6"><img src="./img/border.png" width="1"></td>
							</tr>
<!-- ROW WITH FOOTER TABLE -->
							<tr>
								<td width="1" background="./img/border.png" bgcolor="#e6e6e6"><img src="./img/border.png" width="1"></td>
								<td width="1168" align=center>
									<!-- START FOOTER TABLE  -->
									<table width="1168" height="36" border="0" cellspacing="0" cellpadding="0" bgcolor="#ededed">	
										<tr>
											<td colspan="3" width="1" height="1" background="./img/border.png" bgcolor="#e6e6e6"><img src="./img/border.png" width="1" height="1"></td>
										</tr>
										<tr height="36">
											<td width="10"> </td>
											<td align="right" class="footer" >
												<a rel="Copyright" href="https://fundacja.joomla.pl">Copyright</a> &copy; 2018 <a href="https://dostepny.joomla.pl/">Kuźnia Dostępnych Stron</a>
												<a rel="Copyright" href="http://www.w3.org/Consortium/Legal/ipr-notice#Copyright">Copyright</a> &copy; 2012 <a href="http://www.w3.org/"><acronym title="World Wide Web Consortium">W3C</acronym></a><sup>&reg;</sup> (<a href="http://www.csail.mit.edu/"><acronym title="Massachusetts Institute of Technology">MIT</acronym></a>, <a href="http://www.ercim.org/"><acronym title="European Research Consortium for Informatics and Mathematics">ERCIM</acronym></a>, <a href="http://www.keio.ac.jp/">Keio</a>)</td>
											<td width="10"> </td>
										</tr>
									</table>
									<!-- END FOOTER TABLE -->
								<td width="1" background="./img/border.png" bgcolor="#e6e6e6"><img src="./img/border.png" width="1"></td>
							</tr>
							<tr height="1">
								<td width="1" height="1" background="./img/border.png" bgcolor="#e6e6e6"><img src="./img/border.png" width="1" height="1"></td>
								<td width="1168" height="1" background="./img/border.png" bgcolor="#e6e6e6"><img src="./img/border.png" height="1"></td>
								<td width="1" height="1" background="./img/border.png" bgcolor="#e6e6e6"><img src="./img/border.png" width="1" height="1"></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>
    <div id="meta-footer" class="meta">
      <hr>
      <p><strong>Status:</strong> 20 February 2012 (see <a href="../changelog.html">changelog</a>) <br>Editors: <a href="http://www.w3.org/People/shadi/">Shadi Abou-Zahra</a> and the <a href="http://www.w3.org/WAI/EO/">Education and Outreach Working Group (EOWG)</a>. <br>Developed with support from <a href="http://www.w3.org/WAI/TIES/"><acronym title="Web Accessibility Initiative: Training, Implementation, Education, Support">WAI-TIES</acronym></a> and <a href="http://www.w3.org/WAI/WAI-AGE/"><acronym title="Web Accessibility Initiative: Ageing Education and Harmonisation">WAI-AGE</acronym></a> projects, co-funded by the European Commission <acronym title="Information Society Technologies">IST</acronym> Programme. [see <a href="../acks.html">Acknowledgements</a>]</p>
      <p>[<a href="http://www.w3.org/WAI/sitemap.html" shape="rect">WAI Site Map</a>] [<a href="http://www.w3.org/WAI/sitehelp.html" shape="rect">Help with WAI Website</a>] [<a href="http://www.w3.org/WAI/search.php" shape="rect">Search</a>] [<a href="http://www.w3.org/WAI/contacts" shape="rect">Contacting WAI</a>] <br><strong>Feedback welcome to <a href="mailto:wai-eo-editors@w3.org" shape="rect">wai-eo-editors@w3.org</a></strong> (a publicly archived list) or <a href="mailto:wai@w3.org" shape="rect">wai@w3.org</a> (a WAI staff-only list).</p>
      <div class="copyright"><p><a rel="Copyright" href="http://www.w3.org/Consortium/Legal/ipr-notice#Copyright">Copyright</a> &copy; 2012 <a href="http://www.w3.org/"><acronym title="World Wide Web Consortium">W3C</acronym></a><sup>&reg;</sup> (<a href="http://www.csail.mit.edu/"><acronym title="Massachusetts Institute of Technology">MIT</acronym></a>, <a href="http://www.ercim.org/"><acronym title="European Research Consortium for Informatics and Mathematics">ERCIM</acronym></a>, <a href="http://www.keio.ac.jp/">Keio</a>), All Rights Reserved. W3C <a href="http://www.w3.org/Consortium/Legal/ipr-notice#Legal_Disclaimer">liability</a>, <a href="http://www.w3.org/Consortium/Legal/ipr-notice#W3C_Trademarks">trademark</a>, <a rel="Copyright" href="http://www.w3.org/Consortium/Legal/copyright-documents">document use</a> and <a rel="Copyright" href="http://www.w3.org/Consortium/Legal/copyright-software">software licensing</a> rules apply. Your interactions with this site are in accordance with our <a href="http://www.w3.org/Consortium/Legal/privacy-statement#Public">public</a> and <a href="http://www.w3.org/Consortium/Legal/privacy-statement#Members">Member</a> privacy statements.</p></div>
    </div>
  </body>
</html>