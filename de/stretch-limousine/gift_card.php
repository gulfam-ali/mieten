<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Stretch Limousines</title>

  <?php
  require_once('../../inc/head.php');
  ?>
</head>

<body>
  <?php require_once "../app/header.php"; ?>

    <div class="row article-wrapper">
        <div class="col-md-12 col-sm-12 xs-12 page-heading">
            <h2 class="m-0">Geschenkgutschein</h2>
            <p class="small mb-1">Stretch Limousines</p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3 xs-hidden p-0">
            <?php $menu = 'giftcard'; require_once "sidebar-menu.php"; ?>
        </div>

        <div class="col-lg-10 col-md-9 col-sm-9 xs-12 p-0 scrollbar overflow-height-scroll">
            <div class="row category-container">
                <div class="col-md-12 category-heading">
                    Geschenkgutschein im Edelsten Gold-Card Design
                </div>
                <div class="col-md-12 gift-card-details-wrapper">
                    <p style="white-space: pre-line;">
                        Suchen Sie nach einer einmaligen und unvergesslichen Geschenkidee? 

                        Bei unseren Geschenkgutscheinen beginnt der Luxus schon beim auspacken. 
                        Im Edelsten Gold-Card Design mit aufgedrucktem Namen des Karteninhabers, im Stil einer Goldigen Kreditkarte.
                        <br>
                        <img style="max-width: 360px; width: 100%; padding: 2em 0;" src="<?php echo $base_url;?>/assets/images/stretch/giftcard-front.jpg">
                        <br>
                        Egal ob jung oder alt - eine Tour in einer exklusiven Limousine mit eigenem Chauffeur ist für jeden ein einzigartiges Erlebnis. Ob ein Gutschein für eine Bestimmte Fahrt oder in der Form eines Geldbetrages,bei uns ist alles möglich.

                        Das Datum der Fahrt kann auch nach dem Kauf des Gutscheins festgelegt werden. Möchten Sie den Gutschein jemandem in den nächsten 24 Stunden schenken? Bei uns kein Problem.

                        Sie können untenstehend den Gutschein bequem jetzt online bestellen. Bei Fragen sind wir gerne für Sie da
                        <br>
                        <img style="max-width: 360px; width: 100%; padding: 2em 0;" src="<?php echo $base_url;?>/assets/images/stretch/giftcard-back.jpg">
                    </p>             
                </div>
            </div>
        </div>
    </div>

    <?php require_once "../app/footer.php"; ?>
</body>
</html>