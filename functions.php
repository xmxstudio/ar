<?php
// $siteTitle = "TACO";
$config = new stdClass(); 
$config->siteTitle = "Taco";


global $page;
$isAdmin = false;
session_start();

if(!isset($_SESSION["history"])){
  $_SESSION["history"] = [$page];
} 

function addHistory($page){
  array_push( $_SESSION["history"] , $page);
}
function historyPatternMatches($num =10){
  return count(array_flip(array_slice($_SESSION["history"],-$num)));
}
function clearHistory(){
  $_SESSION["history"] = ['clear'];
}
function getSocials(){
  $socials = array();
  
  $socials[0]->name="Instagram";
  $socials[0]->val="@instauser";
  $socials[1]->name="Twitter";
  $socials[1]->val="@Twitteruser";
  $socials[2]->name="TikTok";
  $socials[2]->val="@TikTokuser";
  $socials[3]->name="Email";
  $socials[3]->val="user@email.com";

  return $socials;
}
function gallery($folder){
  
  
  $handle = opendir(dirname(realpath(__FILE__)).'/'.$folder.'/');
  while($file = readdir($handle)){
    if($file !== '.' && $file !== '..'){
      echo '<img src="'.$folder.'/'.$file.'" border="0" />';
    }
  }
}
if(isset($_GET)){
  $page=array_keys($_GET)[0];
  $page2=array_keys($_GET)[1];
  $validPages = ['','contact','lead','assistant'];
  if(in_array($page,$validPages)){
    if($page == '' ){
      $page = 'home';
    }
    addHistory($page);
  }else{
    header('Location: /');

  }
}


if(strpos($_SERVER[REQUEST_URI],'/admin/')){
  $isAdmin = true;
  $page = 'admin';
}

?>