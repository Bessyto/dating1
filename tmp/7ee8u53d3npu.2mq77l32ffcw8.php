<!--
Bessy Torres-Miller
02/02/2018

The Interests page, prompt the user with a list of activities that the user has to pick in order to find a match in the
 web site. It shows error message if the user doesn't choose any interest, and will post to itself until no error
 messages are posted.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>My Dating Website</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!--Link to local css style-->
    <link rel= "stylesheet" href="styles/interests.css">
</head>

<body>

    <header>
        <!-- navigation bar -->
        <nav class="navbar navbar-light bg-faded bg-info text-white">
            <a class="navbar-brand" href="./">
                <h5>My Dating Website</h5>
            </a>
        </nav>
    </header>

    <div class="container border border-success">
        <form action="#" method="post" class="form-group">
            <h2 class="text-left">Interests</h2><hr>

            <h6 class="text-left">In-door Interests</h6><br>

            <?php if (isset ($errors['indoor'])): ?>
                <p class="text-danger"><?= ($errors['indoor']) ?></p>
            <?php endif; ?>

            <!-- first row -->
            <div class="form-group row mb-0" id="row1">

                <!--1 column -->
                <div class="form-group small col-md-3">
                    <div class="form-group">

                        <input id="tv-input" type="checkbox" name="indoors[]" value="<?= ($indoors['tv']) ?>">
                        <label for="tv-input" ><?= ($indoors['tv']) ?></label><br />

                        <input id="puzzles-input" type="checkbox" name="indoors[]" value="<?= ($indoors['puzzles']) ?>">
                        <label for="puzzles-input"> <?= ($indoors['puzzles']) ?></label>

                    </div>
                </div> <!--1 column -->

                <!--2 column-->
                <div class="form-group small col-md-3">
                    <div class="form-group">

                        <input id="movies-input" type="checkbox" name="indoors[]" value="<?= ($indoors['movies']) ?>">
                        <label for="movies-input"><?= ($indoors['movies']) ?></label><br>

                        <input id="reading-input" type="checkbox" name="indoors[]" value="<?= ($indoors['reading']) ?>">
                        <label for="reading-input"><?= ($indoors['reading']) ?></label>
                    </div>
                </div> <!--2 column -->

                <!--3 column-->
                <div class="form-group small col-md-3">
                    <div class="form-group">
                        <input id="cooking-input" type="checkbox" name="indoors[]" value="<?= ($indoors['cooking']) ?>">
                        <label for="cooking-input"><?= ($indoors['cooking']) ?></label><br>

                        <input id="cards-input" type="checkbox" name="indoors[]" value="<?= ($indoors['playing cards']) ?>">
                        <label for="cards-input"><?= ($indoors['playing cards']) ?></label>
                    </div>
                </div> <!--3 column -->

                <!--4 column-->
                <div class="form-group small col-md-3">
                    <div class="form-group">
                        <input id="games-input" type="checkbox" name="indoors[]" value="<?= ($indoors['board games']) ?>">
                        <label for="games-input"><?= ($indoors['board games']) ?> </label><br>

                        <input id="video-input" type="checkbox" name="indoors[]" value="<?= ($indoors['video games']) ?>">
                        <label for="video-input"><?= ($indoors['video games']) ?></label>
                    </div>
                </div> <!--4 column -->
            </div>  <!--first row -->

            <h6 class="text-left">Out-door Interests</h6><br>

            <?php if (isset ($errors['outdoor'])): ?>
                <p class="text-danger"><?= ($errors['outdoor']) ?></p>
            <?php endif; ?>

            <!-- second row -->
            <div class="form-group row mb-0 " id="row2">

                <!--1 column -->
                <div class="form-group small col-md-3">
                    <div class="form-group">

                        <input id="hiking-input" type="checkbox" name="outdoors[]" value="<?= ($outdoors['hiking']) ?>">
                        <label for="hiking-input"><?= ($outdoors['hiking']) ?></label><br>

                        <input id="walking-input" type="checkbox" name="outdoors[]" value="<?= ($outdoors['walking']) ?>">
                        <label for="walking-input"><?= ($outdoors['walking']) ?></label>
                    </div>
                </div> <!--1 column -->

                <!--2 column -->
                <div class="form-group small col-md-3">
                    <div class="form-group">

                        <input id="biking-input" type="checkbox" name="outdoors[]" value="<?= ($outdoors['biking']) ?>">
                        <label for="biking-input"><?= ($outdoors['biking']) ?></label><br>

                        <input id="climbing-input" type="checkbox" name="outdoors[]" value="<?= ($outdoors['climbing']) ?>">
                        <label for="climbing-input"><?= ($outdoors['climbing']) ?></label>

                    </div>
                </div> <!--2 column -->

                <!--3 column -->
                <div class="form-group small col-md-3">
                    <div class="form-group">

                        <input id="swimming-input" type="checkbox" name="outdoors[]" value="<?= ($outdoors['swimming']) ?>">
                        <label for="swimming-input"><?= ($outdoors['swimming']) ?></label><br>
                    </div>
                </div> <!--3 column -->

                <!--4 column -->
                <div class="form-group small col-md-3">
                    <div class="form-group">

                        <input id="collecting-input" type="checkbox" name="outdoors[]" value="<?= ($outdoors['collecting']) ?>">
                        <label for="collecting-input"><?= ($outdoors['collecting']) ?></label><br>
                    </div>
                </div> <!--4 column -->

            </div> <!--2 row-->

            <!--3 row -->
            <div class="form-group row">
                <div class="form-group small col-md-12 mb-0">
                    <div class="float-right">
                        <button type="submit" name="submit" class="btn btn-primary">Next > </button>
                    </div>
                </div>
            </div> <!--3 row -->

        </form>
    </div>  <!-- container -->

    <!-- bootstrap jquery/popper/javascript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

</body>
</html>