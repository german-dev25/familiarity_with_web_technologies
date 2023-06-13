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

      <?php
$info = [
    'name' => 'Имя',
    'profession' => 'Профессия',
    'location' => 'Город, страна',
    'email' => 'E-mail',
    'phone' => 'Телефон',
    'skills' => [
        ['name' => 'Adobe Photoshop', 'percentage' => 90],
        ['name' => 'Photography', 'percentage' => 80],
        ['name' => 'Illustrator', 'percentage' => 75],
        ['name' => 'Media', 'percentage' => 50]
    ],
    'languages' => [
        ['name' => 'Английский', 'percentage' => 100],
        ['name' => 'Испанский', 'percentage' => 55],
        ['name' => 'Немецкий', 'percentage' => 25]
    ]
];
?>

<div class="w3-white w3-text-grey w3-card-4">
    <div class="w3-display-container">
        <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp" style="width:100%" alt="Avatar">
        <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2><?= $info['name'] ?></h2>
        </div>
    </div>
    <div class="w3-container">
        <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $info['profession'] ?></p>
        <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $info['location'] ?></p>
        <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $info['email'] ?></p>
        <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $info['phone'] ?></p>
        <hr>

        <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
        <?php foreach ($info['skills'] as $skill) : ?>
            <p><?= $skill['name'] ?></p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
                <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?= $skill['percentage'] ?>%"><?= $skill['percentage'] ?>%</div>
            </div>
        <?php endforeach; ?>
        <br>

        <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>
        <?php foreach ($info['languages'] as $language) : ?>
            <p><?= $language['name'] ?></p>
            <div class="w3-light-grey w3-round-xlarge">
                <div class="w3-round-xlarge w3-teal" style="height:24px;width:<?= $language['percentage'] ?>%"></div>
            </div>
        <?php endforeach; ?>
        <br>
    </div>
</div>
<br>

        <!-- End Left Column -->
      </div>

      <!-- Right Column -->
      <div class="w3-twothird">

        <?php
$experience = [
    [
        'position' => 'Front End Developer',
        'date' => 'Jan 2015 - Current',
        'description' => 'Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.'
    ],
    [
        'position' => 'Web Developer / something.com',
        'date' => 'Mar 2012 - Dec 2014',
        'description' => 'Consectetur adipisicing elit. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.'
    ],
    [
        'position' => 'Graphic Designer / designsomething.com',
        'date' => 'Jun 2010 - Mar 2012',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
    ]
];

foreach ($experience as $exp) {
    echo '<div class="w3-container w3-card w3-white w3-margin-bottom">';
    echo '<h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>';
    echo '<div class="w3-container">';
    echo '<h5 class="w3-opacity"><b>' . $exp['position'] . '</b></h5>';
    echo '<h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>' . $exp['date'] . '</h6>';
    echo '<p>' . $exp['description'] . '</p>';
    echo '<hr>';
    echo '</div>';
    echo '</div>';
}
?>
<?php
$education = [
    [
        'school' => 'gb.ru',
        'date' => 'Forever',
        'degree' => 'Web Development! All I need to know in one place'
    ],
    [
        'school' => 'London Business School',
        'date' => '2013 - 2015',
        'degree' => 'Master Degree'
    ],
    [
        'school' => 'School of Coding',
        'date' => '2010 - 2013',
        'degree' => 'Bachelor Degree'
    ]
];

echo '<div class="w3-container w3-card w3-white">';
echo '<h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>';

foreach ($education as $edu) {
    echo '<div class="w3-container">';
    echo '<h5 class="w3-opacity"><b>' . $edu['school'] . '</b></h5>';
    echo '<h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>' . $edu['date'] . '</h6>';
    echo '<p>' . $edu['degree'] . '</p>';
    echo '<hr>';
    echo '</div>';
}

echo '</div>';
?>


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