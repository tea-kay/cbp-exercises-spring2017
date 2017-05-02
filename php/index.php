<?php include 'html_start.php'; ?>    
<?php include 'header.php'; ?>
<?php require_once 'functions.php'; ?>

    <?php 
        
        echo '123<h1>greeting</h1>' 
        
    ?>
    <h2>
        <?php 
            $greeting = 'Hello, world.' 
            ?>
        
       <?= $greeting; ?>     

        <?= 'Hello again' ?>
    </h2>

<?php include 'footer.php'; ?>
<?php include 'html-end.php'; ?>