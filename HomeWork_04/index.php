<?php
$youname = 'Виктория';
$profession = 'Разработчик';
$city = 'Санкт-Петербург';
$email = '1704_92@mail.ru';
$phone = '8-999-525-29-34';

$skills = [
	[
    	'name' => 'Python',
    	'percent' => 60,
    ],
    [
    	'name' => 'Java',
    	'percent' => 30,
    ],
    [
    	'name' => 'C#',
    	'percent' => 80,
    ],
    [
    	'name' => 'Web-разработка',
    	'percent' => 40,
    ],
];

$experiens = [
	"job_name" => ["Тестировщик", "Дизайнер сайтов", "Веб-разработка"],
	"job_date" => ["Jan 2022 - Настоящее время", "Mar 2015 - Dec 2018", "Apr 2010 - Feb 2015"],
    "description" => ["Ручное тестирование ПО", "Создание сайта магазина", "Frontend разаработка сайта"]
];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Мое резюме</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Jost', sans-serif;
    }
  </style>
</head>
<body class="w3-light-grey">
  <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;">
    <!-- The Grid -->
    <div class="w3-row-padding">
      <!-- Left Column -->
      <div class="w3-third">
        <div class="w3-white w3-text-grey w3-card-4">
          <div class="w3-display-container">
            <img src="https://get.wallhere.com/photo/face-women-model-portrait-long-hair-photography-singer-black-hair-hair-nose-Person-skin-Victoria-Justice-head-supermodel-girl-beauty-smile-eye-woman-lip-hairstyle-portrait-photography-photo-shoot-brown-hair-art-model-hair-coloring-facial-expression-eyebrow-human-body-organ-close-up-layered-hair-221722.jpg"
              style="width:100%" alt="Avatar">
            <div class="w3-display-bottomleft w3-container w3-text-black">
              <h2><?php echo $youname;?></h2>
            </div>
          </div>
          <div class="w3-container">
            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $profession;?></p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $city;?></p>
            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $email;?></p>
            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $phone;?></p>
 
            <hr>
 
            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
            <?php for ($i = 0; $i < count($skills); $i++):?>
           
            <p><?php echo $skills[$i]['name'];?></p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills[$i]['percent']?>%"><?php echo $skills[$i]['percent']?>%</div>
            </div>
            <?php endfor; ?>
            <br>
 
            <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b>
            </p>
            <p>Английский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
            </div>
            <p>Русский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
            </div>
            <br>
          </div>
        </div>
        <br>
        <!-- End Left Column -->
      </div>
      <!-- Right Column -->
      <div class="w3-twothird">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
          
          <?php for ($i = 0; $i < count($experiens); $i++): ?>
          <div class="w3-container">
            <h5 class="w3-opacity">
            <?php echo $experiens['job_name'][$i]; ?>
            
            <h5 class="w3-opacity"><b></b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $experiens['job_date'][$i]; ?>
            </h6>
            <p><?php echo $experiens['description'][$i]; ?></p>
            <br>
          <hr>
          <?php endfor; ?>
          </div>
          
 
        <div class="w3-container w3-card w3-white">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>gb.ru</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
            <p>Web Development! All I need to know in one place</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>London Business School</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
            <p>Master Degree</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>School of Coding</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
            <p>Bachelor Degree</p><br>
          </div>
        </div>
        <!-- End Right Column -->
      </div>
      <!-- End Grid -->
    </div>
    <!-- End Page Container -->
  </div>
  <!-- Footer -->
  <footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <!-- End footer -->
  </footer>
</body>
</html>