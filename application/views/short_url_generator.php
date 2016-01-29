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
  <!-- Material Design Lite -->
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="ZeroClipboard.js"></script>
    
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.indigo-pink.min.css">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Design Lite</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

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
    <style type="text/css">
      .demo-layout-transparent {
        background: url('http://getmdl.io/assets/demos/transparent.jpg') center / cover;
      }
      .demo-layout-transparent .mdl-layout__header,
      .demo-layout .mdl-layout__drawer-button {
        /* This background is dark, so we set text to white. Use 87% black instead if
           your background is light. */
          color: #222222;
      }
      #main{
        display: flex;
      align-items: center;  
      
      }
      .error {
    width:200px;
    height:20px;
    height:auto;
    position:absolute;
    left:50%;
    margin-left:-100px;
    bottom:10px;
    background-color: #383838;
    color: #F0F0F0;
    font-family: Calibri;
    font-size: 20px;
    padding:10px;
    text-align:center;
    border-radius: 2px;
    -webkit-box-shadow: 0px 0px 24px -1px rgba(56, 56, 56, 1);
    -moz-box-shadow: 0px 0px 24px -1px rgba(56, 56, 56, 1);
    box-shadow: 0px 0px 24px -1px rgba(56, 56, 56, 1);
}
    </style>
    <script>
    
    $(document).ready(function() {
          
            var client = new ZeroClipboard( document.getElementById('d_clip_button') );
           client.on( 'ready', function(event) {
           console.log( 'movie is loaded' );
  
          client.on( 'copy', function(event) {
            event.clipboardData.setData('text/plain', document.getElementById('shortURLCopy').innerHTML);
          } );
  
          client.on( 'aftercopy', function(event) {
            $('.error').stop().fadeIn(400).delay(1000).fadeOut(400);
            console.log('Copied text to clipboard: ' + event.data['text/plain']);
          } );
        } );
  
        client.on( 'error', function(event) {
          // console.log( 'ZeroClipboard error of type "' + event.name + '": ' + event.message );
          ZeroClipboard.destroy();
        } );
    });
    </script>
  </head>
  <body>
    <div class='error' style='display:none'>URL Copied!</div>
      <div class="mdl-grid" id="main">
    <div class="mdl-cell mdl-cell--4-col"></div>
    <div class="mdl-cell mdl-cell--4-col">
      <!-- Textfield with Floating Label -->
    <center>
    <form action="http://itnsp.com/index.php/short_url" method="POST" style="margin-top:40%;">
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" name="full_link" type="text" id="sample3">
        <label class="mdl-textfield__label" for="sample3">Enter IT Post Link...</label>
        <!-- Accent-colored raised button with ripple -->
      </div>
      <input type="submit" name="SubmitBt" value="Generate Short Link" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
    </form>
    </center>
    </div>
    <div class="mdl-cell mdl-cell--4-col"></div>
      </div>
      <center>
      
      <?php if(isset($short_code)){
      ?>
      <div class="mdl-card mdl-shadow--4dp">
    <div class="mdl-card__title">
      <h2 class="mdl-card__title-text">ITnsp.com</h2>
    </div>
    <div class="mdl-card__supporting-text">
      <?php
      echo '<h4><a id="shortURLCopy" target="_blank" href="http://itnsp.com/index.php/l/'.$short_code.'">http://itnsp.com/l/'. $short_code .'</a></h4>';
      ?>
    
      
    </div>
    <div class="mdl-card__menu">
      <button id="d_clip_button" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect clip_button">
        <i class="material-icons">share</i>
      </button>
    </div>
  </div>
  <?php } ?>
      </center>
      
    <a href="http://itechnospot.com/blog/" target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">ITechnospot.com</a>
    <script src="material.min.js"></script>
  </body>
</html>
