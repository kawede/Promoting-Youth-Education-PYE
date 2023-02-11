<?php
$url='';
if(isset($_GET['url']))
{
  $url=explode('/', $_GET['url']);
}
if($url== '')
{
  require 'mains/home.php';
}
else if ($url[0]== 'accueil')
{
  require 'mains/home.php';
}
else if ($url[0]== 'about')
{
  require 'mains/about.php';
}
else if ($url[0]== 'blog') 
{
  require 'mains/blog.php';
}
else if ($url[0]== 'activites') 
{
  require 'activites.php';
}
else if ($url[0]== 'galerie') 
{
  require 'mains/galerie.php';
}
else if ($url[0]== 'membre')
{
  require 'mains/membre.php';
}
else if ($url[0]== 'detail_act')
{
  require 'mains/detail_act.php';
}
else if ($url[0]== 'missions')
{
  require 'mains/missions.php';
}
else if ($url[0]== 'act_with_us')
{
  require 'mains/act_with_us.php';
}
else if ($url[0]== 'technologie')
{
  require 'mains/technologie.php';
}
else if ($url[0]== 'galerie')
{
  require 'mains/galerie.php';
}
else if ($url[0]== 'activitesBlog')
{
  require 'activitesBlog.php';
}
else if ($url[0]== 'contact')
{
  require 'mains/contact.php';
}
else if ($url[0]== 'notre-expertise') 
{
  require 'mains/notre-expertise.php';
}
else if ($url[0]== 'activitesBlog')
{
  require 'activitesBlog.php?pages=1';
}
else if ($url[0]== 'detail_article')
{
  require 'mains/detail_article.php';
}
else if ($url[0]== 'rapport')
{
  require 'mains/rapport.php';
}
else if ($url[0]== 'activites')
{
  require 'mains/activites.php';
}
else
{
  require 'mains/404.php';
}
