<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Design Lite</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon-192x192.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link href='//fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="material.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
  <body>
    <?php  
      if(isset($_REQUEST['type'])){
            $type = $_REQUEST['type'];
        }
    ?>
    <div class="demo-blog demo-blog--blogpost mdl-layout mdl-js-layout has-drawer is-upgraded">
      <main class="mdl-layout__content">
        <div class="demo-back">
          <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" href="index.html" title="go back" role="button">
            <i class="material-icons" role="presentation">arrow_back</i>
          </a>
        </div>
        <?php 
        if ($type == "admin" ) {
          echo'
        <div class="demo-blog__posts admin mdl-grid">
          <div class="mdl-card on-the-road-again mdl-cell mdl-cell--12-col">
            <div class="mdl-card__media mdl-color-text--grey-50">
            </div>
            <div class="mdl-color-text--grey-700 mdl-card__supporting-text meta">
              
              <div class="section-spacer"></div>
              
            </div>
            <div class="mdl-color-text--grey-700 mdl-card__supporting-text">
            <h3 style="align-self: right;">Administrative Block</h3>
              </br>
              <p>
                The Administrative Block, officially known as the Richadell Hall, houses most of the members of staff at Ashesi University, along with Faculty with the business and Art and Science Departments. 
              </p>
              </br>
              <p>
                This block is home to the Finance Department, the HR Department, and the Admitions Departmet. Since it also houses the Ofiice of Student and Community Affairs, it also serves as a safe haven for students who may need counselling on various issues they face in their student life. The Career Service Office, always ready to guide students in making the right future Career choices today is also in this block and always has its doors open to students.
              </p>
            </div>
          </div>
        </div>';
      }
      else if ($type == "eng" ) {
          echo'
        <div>
          <div class="mdl-card engineering mdl-cell mdl-cell--12-col">
            <div class="mdl-card__media mdl-color-text--grey-50">
            </br></br></br></br></br></br>
            </div>
            <div class="mdl-color-text--grey-700 mdl-card__supporting-text meta">
              
              <div class="section-spacer"></div>
              
            </div>
            <div class="mdl-color-text--grey-700 mdl-card__supporting-text">
            <h3 style="align-self: right;">Engineering</h3>
              </br>
              <p>
                The engineering block is the newest addition to Ashesi on the academic front. Arriving just in time to support the adoption of our first Engineering class, it houses valuable infrastructure needed for holistic education of all students.
              </p>
              </br>
              <p>
                The Engineering block is home to the biggest congregational hall in Ashesi, the Norton-Motolsky Hall. When not in use, it provides two ultra-mordern classrooms where teaching and learning can take place flexibly with its easily movable chairs and tables. The block also houses an office for Faculty Interns, offices for Engineering and Computer Science Faculty, an Electronics Lab, a Design Lab and an IT office.
              </p>
              <p>
                For many visitors and even students, the beautiful fountain that greets you on entering the block is the icing on the cake of the beautiful architecture which blens in nicely with the rest of the campus
              </p>
            </div>
          </div>
        </div>';
      }
      else if ($type == "host" ) {
          echo'
        <div>
          <div class="mdl-card hostel mdl-cell mdl-cell--12-col">
            <div class="mdl-card__media mdl-color-text--grey-50">
            </br></br></br></br></br></br>
            </div>
            <div class="mdl-color-text--grey-700 mdl-card__supporting-text meta">
              
            </div>
            <div class="mdl-color-text--grey-500 mdl-card__supporting-text">
              <h3 style="align-self: right;">Student Hostels</h3>
              </br>
              <p>
                Ashesi is made up of 8 traditional student halls. The recently added 3 are yet to be named and ordanined as halls although they are in use by students. Ashesi houses half of the Ashesi student population on campus. the other half live in hostels nearby.
              </p>
              </br>
              <p>
                The traditional hostels are Efua Sutherland, Ephraim Amu, Walter Sisulu and Oteng Korankye. The hostel are well furnished housing a maximum of four students in a room. Although students on campus are not allowed to cook in the faciity, kitchens have been provided with microwaves, fidges and kettles to make life comfortable for students
              </p>
              <p>
                Also housed in the Student Hostel is the Bliss Student Lounge which has a 24 - hour snack bar. The snack bar provides a fine cushion for the hungry tummies of students studying all night. All hostels have wifi connection and there are distributed hungout spaces to facilitate group studies.
              </p>
            </div>
          </div>
        </div>';
      }
        ?>
        <footer class="mdl-mini-footer">
          <div class="mdl-mini-footer--left-section">
            <button class="mdl-mini-footer--social-btn social-btn social-btn__twitter">
              <span class="visuallyhidden">Twitter</span>
            </button>
            <button class="mdl-mini-footer--social-btn social-btn social-btn__blogger">
              <span class="visuallyhidden">Facebook</span>
            </button>
            <button class="mdl-mini-footer--social-btn social-btn social-btn__gplus">
              <span class="visuallyhidden">Google Plus</span>
            </button>
          </div>
          <div class="mdl-mini-footer--right-section">
            <button class="mdl-mini-footer--social-btn social-btn__share">
              <i class="material-icons" role="presentation">share</i>
              <span class="visuallyhidden">share</span>
            </button>
          </div>
        </footer>
      </main>
      <div class="mdl-layout__obfuscator"></div>
    </div>
    <script src="../../material.min.js"></script>
  </body>
</html>
