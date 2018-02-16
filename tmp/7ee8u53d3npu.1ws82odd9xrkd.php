<!--
Bessy Torres-Miller
02/02/2018

The Personal Info page, prompt the user for the name, age, gender and phone. It shows error message when an enter
is not valid, and will post to itself until no error messages are posted.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Dating Website</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!--Link to local css style-->
    <link rel= "stylesheet" href="styles/personalInfo.css">
</head>

<body>

    <header>
        <!-- Navigation bar -->
        <nav class="navbar navbar-light bg-faded bg-info text-white">
            <a class="navbar-brand" href="./">
                <h5>My Dating Website</h5>
            </a>
        </nav>
    </header>

<div class="container border border-success">

    <form action="#" method="post" class="form-group">
        <h2 class="text-left">Personal Information</h2><hr>
        <div class="form-group row mb-0">

            <!--first column-->
            <div class="form-group small col-md-8">
                    <div class="form-group">
                        <?php if ($errors['firstName']): ?>
                            <p class="text-danger"><?= ($errors['firstName']) ?></p>
                        <?php endif; ?>

                        <label for="firstName" class="label">First Name</label>
                        <div class="input-group">
                            <input class="form-control input-lg " id="firstName" type="text" value="<?= ($firstName) ?>" name="firstName">
                        </div>
                    </div>

                    <div class="form-group">
                        <?php if ($errors['lastName']): ?>
                             <p class="text-danger"><?= ($errors['lastName']) ?></p>
                        <?php endif; ?>

                        <label for='lastName' class="label">Last Name</label>
                        <input class='form-control input-lg' id="lastName" type='text' value="<?= ($lastName) ?>" name="lastName">
                    </div>

                    <div class="form-group">
                        <?php if ($errors['age']): ?>
                             <p class="text-danger"><?= (($errors['age'])) ?></p>
                        <?php endif; ?>

                        <label for="age" class="label">Age</label>
                        <input class='form-control input-lg' id="age" type='text' value="<?= ($age) ?>" name="age">
                    </div>

                    <div class="form-group">
                            <?php if ($errors['genre']): ?>
                                <p class="text-danger"><?= ($errors['genre']) ?></p>
                            <?php endif; ?>

                        <label class='label' id="genres">Gender</label><br>

                            <?php foreach (($genres?:[]) as $genreOption): ?>
                                 <input type="radio" name="genre" value="<?= ($genreOption) ?>"><?= ($genreOption)."
" ?>
                            <?php endforeach; ?>


                    </div>

                    <div class="form-group">
                         <?php if ($errors['phone']): ?>
                                <p class="text-danger"><?= ($errors['phone']) ?></p>
                         <?php endif; ?>

                         <label class='form-control-label label'>Phone Number</label>
                                <input class='form-control' type='text' name='phone' value="<?= ($phone) ?>" placeholder="253-222-2222">
                    </div>

                    <div class="form-group">
                          <!--<?php if ($errors['premium']): ?>-->
                               <!--<p class="text-danger"><?= ($errors['premium']) ?></p>-->
                          <!--<?php endif; ?>-->

                          <label class='form-control-label label'>Premium Membership</label><br>
                               <input type='checkbox' name='premium' value="yes" >
                               Sign me up for a Premium Account!
                    </div>

            </div>   <!--first column-->

            <!--Second column-->
            <div class="form-group center col-md-4">
                <div>
                    <p class="border border-info text-center" id="info">
                        <b>Note</b>: All information entered is protected by our <span id="policy">privacy policy</span>. Profile information can only
                    be viewed by others with your permission.
                    </p>
                </div>
            </div>    <!--second column -->

        </div>   <!--row-->

        <!--second row -->
        <div class="form-group row">
            <div class="form-group small col-md-12 mb-0">
                <div class="float-right">
                    <button type="submit" name="submit" class="btn btn-primary" value="NEXT >">NEXT > </button>
                </div>
            </div>
        </div>

    </form>
</div>

    <!-- bootstrap jquery/popper/javascript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

</body>
</html>