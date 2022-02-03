<?php
echo $page;
?>
<header>
    <div id="padding"></div>    
    <div id="title">
        <a href="">ANGELA ROSE</a>
    </div>
    <div id="contact">
        <a href="?contact">CONTACT</a>
    </div>
</header>
<?php
if($page && $page!='home'){
?>
<nav>
    <a href="/" class="fas fa-home"></a>
    </p>
    <p>/</p>
    <p><?=$page?></p>
</nav>

<?php
}

?>