<?php
header("Content-type: text/css");
require('consts.php');
?>
::selection {
   background: #888;
}
a:link {
   color: <?= $linkColor1 ?>;
   text-decoration: none;
   <?php css3('transition', "color 0.5s ease 0.0s"); ?>
}
a:visited {
   color: <?= $linkColor1 ?>;
   text-decoration: none;
}
a:hover {
   color: <?= $linkColor2 ?>;
   text-decoration: underline;
   <?php css3('transition', "color 0.25s ease 0.0s"); ?>
}
a:active {
   color: <?= $linkColor2 ?>;
   text-decoration: underline;
}
a.delphi:link {
   color: <?= $linkDelphiColor1 ?>;
   text-decoration: none;
   <?php css3('transition', "color 0.5s ease 0.0s"); ?>
}
a.delphi:visited {
   color: <?= $linkDelphiColor1 ?>;
   text-decoration: none;
}
a.delphi:hover {
   color: <?= $linkDelphiColor2 ?>;
   text-decoration: underline;
   <?php css3('transition', "color 0.25s ease 0.0s"); ?>
}
a.delphi:active {
   color: <?= $linkDelphiColor2 ?>;
   text-decoration: underline;
}
html, body {
   min-height: 100%;
   margin: 0px;
   padding: 0px;
   font-size: 100%;
}
body {
   height: 100%;
   font-family: <?= $bodyFont ?>;
   color: <?= $foregroundColor3 ?>;
   background-color: <?= $backgroundColor3 ?>;
   background-repeat: no-repeat;
   background-attachment: fixed;
}
div.box_header {
   padding: 0px;
   color: <?= $foregroundColor3 ?>;
   border-bottom: 1px solid <?= $foregroundColor1 ?>;
}
div.box_header_narrow {
   width: 100%;
   height: 55px;
}
div.box_header_fixed0 {
   background-color: <?= $backgroundColor3_under ?>;
   z-index: 1;
}
div.box_header_fixed1 {
   position: fixed;
   top: 0px;
   left: 0px;
   background-color: <?= $backgroundColor3_over ?>;
   z-index: 1;
}
div.box_title {
   font-family: <?= $titleFont ?>;
   font-size: 2em;
   font-weight: bold;
   text-shadow: 0px 0px 10px <?= $foregroundColor1 ?>;
   letter-spacing: 1px;
}
div.box_title_mega {
   font-size: 3em;
   padding: 12px;
   text-align: center;
}
div.box_title_mini {
   padding-top: 4px;
   padding-bottom: 4px;
   padding-left: 24px;
   text-align: left;
   display: inline-block;
   float: left;
}
div.box_subtitle {
   text-align: center;
   padding-bottom: 12px;
   color: <?= $foregroundColor3 ?>;
   text-shadow: 0px 0px 4px <?= $foregroundColor1 ?>;
}
div.box_mininav {
   color: <?= $foregroundColor4 ?>;
   text-align: right;
   font-weight: bold;
   padding-top: 4px;
   padding-bottom: 4px;
   padding-right: 24px;
   display: inline-block;
   float: right;
   text-shadow: 0px 0px 1px <?= $foregroundColor1 ?>;
}
div.box_miniclear {
   clear: both;
}
div.box_content {
   padding: 8px;
   color: <?= $foregroundColor1 ?>;
   background-color: <?= $backgroundColor1 ?>;
   <?php css3('box-shadow', "inset 0px 0px 12px {$backgroundColor3}"); ?>
}
div.box_footer {
   padding: 8px;
   color: <?= $foregroundColor4 ?>;
   text-align: center;
   font-size: 0.8em;
   border-top: 1px solid <?= $foregroundColor1 ?>;
}
div.box_navigation {
   text-align: right;
   position: fixed;
   top: 4px;
   right: 4px;
}
div.box_article {
   width: 90%;
   margin-left: auto;
   margin-right: auto;
   color: <?= $foregroundColor1 ?>;
}
div.box_overlay {
   position: fixed;
   top: 0px;
   left: 0px;
   width: 100%;
   height: 200%;
   background-color: rgba(128, 128, 128, 0.8);
   display: none;
}
div.box_dialog {
   width: 80%;
   max-height: 40%;
   overflow: scroll;
   margin-left: auto;
   margin-right: auto;
   margin-top: 5%;
   border-radius: 6px;
   padding: 15px;
   background-color: <?= $backgroundColor2 ?>;
   <?php css3('box-shadow', "0px 0px 8px 3px {$foregroundColor1}"); ?>
}
div.box_button {
   text-align: center;
   font-weight: bold;
   display: inline-block;
   min-width: 100px;
   height: 20px;
   padding: 4px;
   margin: 5px;
   border-radius: 3px;
   color: <?= $foregroundColor1 ?>;
   cursor: pointer;
   background-color: <?= $inputColor1 ?>;
   <?php css3('box-shadow', "0px 0px 1px 2px {$foregroundColor1}"); ?>
   <?php css3('user-select', 'none'); ?>
}
div.box_button:hover {
   background-color: <?= $backgroundColor2 ?>;
   <?php css3('transition', 'background-color 0.5s ease 0.0s'); ?>
}
div.box_button_icon {
   min-width: 0px;
}
div.box_button_disabled {
   color: <?= $foregroundColor2 ?>;
   background-color: <?= $inputColor2 ?>;
   cursor: progress;
}
div.box_button_disabled:hover {
   background-color: <?= $inputColor2 ?>;
}
div.box_cursor_help {
   cursor: help;
}
div.box_decision {
   display: inline-block;
   vertical-align: top;
   padding-top: 12px;
   padding-bottom: 12px;
   padding-left: 24px;
   padding-right: 24px;
   margin: 8px;
   border: 1px solid <?= $foregroundColor1 ?>;
   border-radius: 5px;
   <?php css3('box-shadow', "inset 0px 0px 12px {$foregroundColor2}"); ?>
}
div.box_decision:hover {
   <?php css3('box-shadow', "inset 0px 0px 12px {$popColor1}"); ?>
   <?php css3('transition', 'box-shadow 0.5s ease 0.0s'); ?>
}
div.box_decision_title {
   font-size: 1.2em;
   font-weight: bold;
   display: inline-block;
   margin-bottom: 10px;
   text-shadow: 0px 0px 1px <?= $foregroundColor1 ?>;
   <?php css3('box-shadow', "0px 8px 8px -8px {$backgroundColor3}"); ?>
}
div.box_section {
   padding: 24px;
}
div.box_section_title {
   font-size: 2.5em;
   font-weight: bold;
   text-align: center;
   padding: 12px;
   margin-bottom: 12px;
   color: <?= $foregroundColor1 ?>;
   background-color: <?= $backgroundColor2 ?>;
   text-shadow: 0px 0px 1px <?= $foregroundColor1 ?>;
   <?php css3('box-shadow', "0px 0px 12px 0px {$backgroundColor4}"); ?>
}
div.box_section_subtitle {
   font-size: 0.4em;
   font-weight: bold;
   margin-top: -4px;
   padding-bottom: 4px;
   color: <?= $foregroundColor2 ?>;
}
div.box_section_subtitle_alert {
   font-size: 0.6em;
   font-weight: bold;
   margin-top: -4px;
   padding-bottom: 4px;
   color: #DC143C;
}
div.box_stat {
   display: inline-block;
   min-width: 200px;
}
div.bot_stat_value {
   font-size: 2em;
   font-weight: bold;
}
div.bot_stat_description {
   margin-top: -6px;
   font-size: 0.75em;
   font-style: italic;
}
div.box_message {
   text-align: center;
   font-weight: bold;
   border-radius: 5px;
   border: 2px solid <?= $foregroundColor1 ?>;
   padding: 8px;
   margin-top: 5px;
   margin-bottom: 5px;
   margin-left: auto;
   margin-right: auto;
   width: 50%;
   <?php css3('box-shadow', "0px 0px 12px 0px {$foregroundColor1}"); ?>
}
div.box_status {
   padding: 4px;
   border-bottom: 1px solid <?= $foregroundColor2 ?>;
}
div.box_float_left {
   display: inline-block;
   float: left;
}
div.box_float_right {
   display: inline-block;
   float: right;
}
div.box_list {
   display: inline-block;
   vertical-align: top;
}
div.box_region_completed {
   background-color: <?= $backgroundColor2 ?>;
}
div.box_info {
   position: absolute;
   display: inline-block;
   border-radius: 3px;
   padding: 5px;
   background-color: <?= $backgroundColor2 ?>;
   font-size: 0.8em;
   <?php css3('box-shadow', "0px 0px 8px 3px {$foregroundColor1}"); ?>
}
div.box_region_nav {
   display: inline-block;
   margin: 2px;
   text-align: center;
   width: 110px;
   height: 110px;
   border-radius: 55px;
   background: <?= $backgroundColor1 ?>;
   cursor: pointer;
   border: 1px solid <?= $linkColor1 ?>;
   <?php css3('box-shadow', "0px 0px 0px 0px {$linkColor1}"); ?>
}
div.box_region_nav:hover {
   <?php css3('box-shadow', "0px 0px 2px 2px {$linkColor1}"); ?>
}
div.box_region_nav_complete {
   color: #06c;
}
div.box_region_nav_incomplete {
   color: #c20;
}
div.box_region_nav_content {
   position: relative;
   text-shadow: 0px 0px 2px <?= $foregroundColor2 ?>;
}
div.box_region_nav_content_stack {
   position: absolute;
   top: 0px;
   left: 0px;
   width: 110px;
   z-index: 0;
}
div.box_status_line {
   padding-left: 10px;
   padding-right: 10px;
   font-weight: bold;
   font-size: 1.1em;
}
div.box_region_label {
   padding-left: 10px;
   padding-top: 5px;
   float: left;
   font-size: 1.5em;
   color: <?= $foregroundColor1 ?>;
   text-shadow: 0px 0px 2px <?= $foregroundColor2 ?>;
}
div.box_status_info {
   padding-right: 10px;
   padding-top: 10px;
   float: right;
}

div.sidebar_entry i.fa {margin-right:5px}
div.sidebar_region {margin-left:15px}
div.sidebar_region i.fa {margin-right:5px}

div.box_scroll_test {
   width: 100%;
   height: 100%;
}
div.box_leaderboard {
   display: inline-block;
   width: 225px;
   margin: 50px;
   vertical-align: top;
   border: 1px solid <?= $foregroundColor2 ?>;
   <?php css3('box-shadow', "0px 0px 12px 0px {$foregroundColor4}"); ?>
}
p {
   margin-top: 8px;
   margin-bottom: 8px;
}
p.text_title {
   font-weight: bold;
   font-size: 1.5em;
}
p.text_body {
   padding-left: 48px;
   padding-right: 48px;
}
span.effect_delphi {
   font-family: <?= $delphiFont ?>;
}
span.effect_fluv {
   font-family: <?= $fluvFont ?>;
   font-style: italic;
   font-size: 0.9em;
   color: <?= $fluvColor ?>;
}
span.effect_footnote {
   font-size: 0.9em;
   font-style: italic;
}
span.effect_highlight {
   font-weight: bold;
   font-size: 1.2em;
   color: <?= $popColor1 ?>;
   text-shadow: 0px 0px 2px <?= $foregroundColor1 ?>;
}
span.effect_tiny_header {
   font-weight: normal;
   font-size: 0.8em;
}
span.effect_tiny {
   font-weight: normal;
   font-size: 0.8em;
}
span.effect_italics {
   font-style: italic;
}
canvas {
   cursor: crosshair;
}
canvas.canvas_drag {
   cursor: move;
}
canvas.canvas_button {
   cursor: pointer;
}
img.img_flag_large {
   width: 55px;
   margin-bottom: -8px;
}
img.img_flag_small {
   width: 20px;
   margin-bottom: -4px;
}
table {
   display: inline-table;
   margin: 16px;
}
tr:nth-child(2n+1) {
   background: <?= $backgroundColor2 ?>;
}
tr:nth-child(2n) {
   background: <?= $backgroundColor1 ?>;
}
tr.leaderboard:nth-child(2) {
   font-weight: bold;
   font-size: 1.25em;
}
td {
   padding: 4px;
   border-bottom: 1px dotted <?= $backgroundColor4 ?>;
}
th {
   padding: 8px;
   border: 1px dotted <?= $backgroundColor4 ?>;
   background-color: #ccc;
   font-size: 1.2em;
}
input.padded {
   margin: 4px;
   margin-bottom: 12px;
}
.centered {
   text-align: center;
}
.left {
   text-align: left;
}
.right {
   text-align: right;
}
.any_failure {
   color: <?= $failureColor1 ?>;
   border-color: <?= $failureColor1 ?>;
   background-color: <?= $failureColor2 ?>;
}
.any_success {
   color: <?= $successColor1 ?>;
   border-color: <?= $successColor1 ?>;
   background-color: <?= $successColor2 ?>;
}
.any_neutral {
   color: <?= $foregroundColor2 ?>;
   border-color: <?= $foregroundColor2 ?>;
   background-color: <?= $backgroundColor2 ?>;
}
.any_hidden {
   display: none;
}
.any_noselect {
   <?php css3('user-select', 'none'); ?>
}
.any_bold {
   font-weight: bold;
}
.any_cursor_pointer {
   cursor: pointer;
}
.any_extrasmall {
   font-size: 0.65em;
}
.any_warning {
   font-weight: bold;
   color: #c22;
}
#box_main_ui {
   margin: 12px;
   <?php css3('user-select', 'none'); ?>
   <?php css3('box-shadow', "0px 0px 12px 0px {$backgroundColor4}"); ?>
}
#box_canvas {
   padding: 0px;
   margin: 0px;
   vertical-align: top;
   display: inline-block;
}
#box_side_bar {
   text-align: center;
   padding: 0px;
   margin: 0px;
   margin-left: auto;
   margin-right: auto;
   vertical-align: top;
   display: inline-block;
}
#box_histories {
   text-align: left;
   width: 152px;
   overflow-y: scroll;
   padding: 4px;
   margin: 0px;
   vertical-align: top;
   display: block;
}

#news li {
    list-style-type:none;
    padding-top:5px;
}

#share .social {
    text-align: center
    }

img.age_group_img {
    height: 65px;
    width: auto;
}

/*** Screen Size Queries ***/
@media only screen and (max-width: 800px), only screen and (max-device-width: 800px), only screen and (max-height: 400px), only screen and (max-device-height: 400px) {
   body {
      font-size: 75%;
   }
   div.box_dialog {
      max-height: 30%;
      overflow: scroll;
      padding: 10px;
   }
   div.box_title_mini {
      padding-top: 0px;
      padding-left: 0px;
      padding-right: 0px;
      padding-bottom: 0px;
      display: block;
      float: none;
      text-align: center;
   }
   div.box_mininav {
      padding-top: 0px;
      padding-left: 0px;
      padding-right: 0px;
      padding-bottom: 3px;
      display: block;
      float: none;
      text-align: center;
   }
   span.effect_tiny_header {
      display: none;
   }
}
@media only screen and (max-width: 639px), only screen and (max-device-width: 639px), only screen and (max-height: 250px), only screen and (max-device-height: 250px) {
   #box_main_ui {
      display: none;
   }
   #box_nocanvas {
      display: block;
   }
   div.box_leaderboard {
      margin: 10px;
   }
}
