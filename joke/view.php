<!DOCTYPE html>
<html lang="fr">
<?php $title="joke"; $site_description="Chuck Norris jokes"; require "../head.php"; ?>
<body>
    <?php require "../header.php"; ?>

    <div class="container">
        <p id="joke"></p>
    </div>

    <?php require "../footer.php"; ?>
    <script>
       var joke = document.querySelector('#joke');

       function getNewJoke(){
            fetch('./get.php').then(r => r.json()).then(response => {
                joke.textContent = response;
            });
        }

        setInterval(getNewJoke, 5000);
        getNewJoke();
    </script>
</body>
</html>