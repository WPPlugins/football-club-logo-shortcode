<?php
/**
* Plugin Name: Football Club Logo Shortcode
* Plugin URI: http://keyrunblogs.com
* Description: This plugin will let you add football club's logos anywhere in your website using shortcodes. 
* Version: 1.0 
* Author: Keyrun Adhikari
* Author URI: http://keyrunblogs.com
* License: GPL v3
*/



function liverpoollogo() {
   return ' 
  <img src="' . plugins_url( 'clublogo/liverpool.png', __FILE__ ) . '" style="width:30px;height:30px;border:0" > ';
}
add_shortcode('liverpool', 'liverpoollogo');

function arsenallogo() {
   return ' 
  <img src="' . plugins_url( 'clublogo/arsenal.png', __FILE__ ) . '" style="width:30px;height:30px;border:0" > ';
}
add_shortcode('arsenal', 'arsenallogo');

function astonvillalogo() {
   return '
<img src="' . plugins_url( 'clublogo/aston-villa.png', __FILE__ ) . '" style="width:30px;height:30px;border:0" > ';}
add_shortcode('astonvilla', 'astonvillalogo');

function burnleylogo() {
   return '
<img src="' . plugins_url( 'clublogo/burnley.png', __FILE__ ) . '" style="width:30px;height:30px;border:0" > '; 
}
add_shortcode('burnley', 'burnleylogo');

function chelsealogo() {
   return ' 
  <img src="' . plugins_url( 'clublogo/chelsea.png', __FILE__ ) . '" style="width:30px;height:30px;border:0" > ';
}
add_shortcode('chelsea', 'chelsealogo');

function crystalpalacelogo() {
   return ' 
  <img src="' . plugins_url( 'clublogo/crystal-palace.png', __FILE__ ) . '" style="width:30px;height:30px;border:0" > ';
}
add_shortcode('crystalpalace', 'crystalpalacelogo');

function evertonlogo() {
   return ' 
  <img src="' . plugins_url( 'clublogo/everton.png', __FILE__ ) . '" style="width:30px;height:30px;border:0" > ';
}
add_shortcode('everton', 'evertonlogo');

function manchestercitylogo() {
   return ' 
  <img src="' . plugins_url( 'clublogo/manchester-city.png', __FILE__ ) . '" style="width:30px;height:30px;border:0" > ';
}
add_shortcode('manchestercity', 'manchestercitylogo');

function hullcitylogo() {
   return ' 
  <img src="' . plugins_url( 'clublogo/hull-city.png', __FILE__ ) . '" style="width:30px;height:30px;border:0" > ';
}
add_shortcode('hullcity', 'hullcitylogo');

function leicestercitylogo() {
   return ' 
  <img src="' . plugins_url( 'clublogo/leicester-city.png', __FILE__ ) . '" style="width:30px;height:30px;border:0" > ';
}
add_shortcode('leicestercity', 'leicestercitylogo');

function manchesterunitedlogo() {
   return ' 
  <img src="' . plugins_url( 'clublogo/manchester-united.png', __FILE__ ) . '" style="width:30px;height:30px;border:0" > ';
}
add_shortcode('manchesterunited', 'manchesterunitedlogo');

function newcastleunitedlogo() {
   return ' 
  <img src="' . plugins_url( 'clublogo/newcastle-united.png', __FILE__ ) . '" style="width:30px;height:30px;border:0" > ';
}
add_shortcode('newcastleunited', 'newcastleunitedlogo');

function qprlogo() {
   return '
  <img src="' . plugins_url( 'clublogo/qpr.png', __FILE__ ) . '" style="width:30px;height:30px;border:0" > ';
}
add_shortcode('qpr', 'qprlogo');

function southamptonlogo() {
   return ' 
 <img src="' . plugins_url( 'clublogo/southampton.png', __FILE__ ) . '" style="width:30px;height:30px;border:0" > ';
}
add_shortcode('southampton', 'southamptonlogo');

function sunderlandlogo() {
   return ' 
  <img src="' . plugins_url( 'clublogo/sunderland.png', __FILE__ ) . '" style="width:30px;height:30px;border:0" > ';
}
add_shortcode('sunderland', 'sunderlandlogo');

function stokecitylogo() {
   return ' 
  <img src="' . plugins_url( 'clublogo/stoke-city.png', __FILE__ ) . '" style="width:30px;height:30px;border:0" > ';
}
add_shortcode('stokecity', 'stokecitylogo');

function swanseacitylogo() {
   return ' 
  <img src="' . plugins_url( 'clublogo/swansea-city.png', __FILE__ ) . '" style="width:30px;height:30px;border:0" > ';
}
add_shortcode('swanseacity', 'swanseacitylogo');

function tottenhamlogo() {
   return ' 
  <img src="' . plugins_url( 'clublogo/tottenham.png', __FILE__ ) . '" style="width:30px;height:30px;border:0" > ';
}
add_shortcode('tottenham', 'tottenhamlogo');

function westhamlogo() {
   return ' 
  <img src="' . plugins_url( 'clublogo/west-ham.png', __FILE__ ) . '" style="width:30px;height:30px;border:0" > ';
}
add_shortcode('westham', 'westhamlogo');

function westbromlogo() {
   return ' 
  <img src="' . plugins_url( 'clublogo/west-brom.png', __FILE__ ) . '" style="width:30px;height:30px;border:0" > ';
}
add_shortcode('westbrom', 'westbromlogo');
?>