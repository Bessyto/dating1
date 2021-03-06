<!--
Bessy Torres-Miller
02/02/2018

The Summary page, shows a summary of the user information.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Dating Website</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!--Link to local css style-->
    <link rel= "stylesheet" href="styles/summary.css">
</head>

<body>

    <header>
        <!-- NAvigation bar -->
        <nav class="navbar navbar-light bg-faded bg-info text-white">
            <a class="navbar-brand" href="./">
                <h5>My Dating Website</h5>
            </a>
        </nav>
    </header>

    <div class="container border border-success">
        <form action="#" method="post" class="form-group">

            <!-- first row -->
            <div class="form-group row">

                <!--first column-->
                <div class=" small col-md-6" id="row1">
                    <ul class="list-group">
                        <li class="list-group-item">Name: <?= ($member->getFname()) ?> <?= ($member->getLname()) ?></li>
                        <li class="list-group-item">Gender: <?= ($member->getGender())."
" ?>
                            <?php foreach (($genres?:[]) as $genreOption): ?>
                                    <?php if ($genreOption == $genres): ?>selected<?php endif; ?>
                                    <?= ($genreOption)."
" ?>
                            <?php endforeach; ?>
                        </li>
                        <li class="list-group-item">Age: <?= ($member->getAge()) ?></li>
                        <li class="list-group-item">Phone: <?= ($member->getPhone()) ?></li>
                        <li class="list-group-item">Email: <?= ($member->getEmail()) ?></li>
                        <li class="list-group-item">State: <?= ($member->getState()) ?></li>
                        <li class="list-group-item">Seeking: <?= ($member->getSeeking()) ?></li>



                        <?php if ($member instanceof PremiumMember): ?>

                            <li class="list-group-item">Interests:

                                <?php foreach (($member->getInDoorInterests()?:[]) as $indoorOption): ?>
                                    <?php if ($indoorOption == $indoor): ?>selected<?php endif; ?>
                                    <?= ($indoorOption)."
" ?>
                                <?php endforeach; ?>

                                <?php foreach (($member->getOutDoorInterests()?:[]) as $outdoorOption): ?>
                                    <?php if ($outdoorOption == $outdoor): ?>selected<?php endif; ?>
                                    <?= ($outdoorOption)."
" ?>
                                <?php endforeach; ?>
                            </li>
                        <?php endif; ?>

                    </ul>
                </div> <!--1 column-->

               <!--2 column -->
                <div class="group-form center col-md-5">
                    <img class="img-fluid rounded mx-auto" src="images/iconUser.jpg" alt="user photo"> <br>

                    <h5>Biography</h5>
                    <div class="card">
                        <div class="card-block"><?= ($biography) ?></div>
                    </div>

                </div>

            </div>  <!--first row -->

            <!--2 row -->
            <div class="form-group row">
                <div class="form-group small col-md-12 mb-0">
                    <div class="text-center">
                        <button type="button" class="btn btn-primary">Contact Me!</button>
                    </div> <br>

                </div>
            </div> <!--2 row -->

        </form>
    </div>

    <!-- bootstrap jquery/popper/javascript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

</body>
</html>