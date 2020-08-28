<!-- post type restaurant -->

<div class="background-title bkgCallToActionBlackHatche">
    <?php include 'navbar.php'; ?>
    <div class="text-background">
        <h2 class="title-2 regular white">
            <?php the_field('subtitle_restaurant'); ?>
        </h2>
        <h1 class="title-1 uppercase bold white">
            <?php the_field('title_restaurant'); ?>
        </h1>
        <a href="#" class="bold white white-line ">
            check our menu
        </a>
    </div>
</div>

    <main>

            <section class="Presentation light-gray-background">
                <div class="container-margin line-height-section" style="padding-top: 5%; padding-bottom: 7%">
                    <h4 class="title-4 regular center line-height-title">
                        Welcome in Liège
                    </h4>
                    <h3 class="title-3 uppercase bold center line-height-title">
                        Presentation
                    </h3>

                    <div class="card mb-3" >
                        <div class="row no-gutters" style="max-width: 1500px; height: 700px">
                            <div class="col-md-6" >
                                <div class="card-img card-background" style='background:url("<?php the_field('img_1') ?>") no-repeat center;
                                                                            background-size:cover;'>
                                </div>
                            </div>
                            <div class="col-md-6 border-right">
                                <div class="card-body center ">
                                    <h4 class="title-4 regular center title-card-margin line-height-title">
                                        <?php the_field('subtitle_1'); ?>
                                    </h4>
                                    <h3 class="title-3 bold center line-height-title">
                                        <?php the_field('title_1'); ?>
                                    </h3>
                                    <p class="normal description center description-margin">
                                        <?php the_field('description_restaurant_1'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 title-card-margin" >
                        <div class="row no-gutters" style="max-width: 1500px; height: 700px">
                            <div class="col-md-6" >
                                <div class="card-body">
                                    <h4 class="title-4 regular center title-card-margin line-height-title">
                                        <?php the_field('subtitle_2'); ?>
                                    </h4>
                                    <h3 class="title-3 bold center line-height-title">
                                        <?php the_field('title_2'); ?>
                                    </h3>
                                    <p class="normal description center description-margin">
                                        <?php the_field('description_restaurant_2'); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-img  card-background-right" style='background:url("<?php the_field('img_2') ?>") no-repeat center;
                                                                                    background-size:cover;'>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <section class="location bkgCallToActionGreyHatche">
            <div class="location-padding">
                <h4 class="title-4 regular center line-height-title">
                    Find Us
                </h4>
                <h3 class="title-3 uppercase bold center bottom-map-space">
                    Location
                </h3>
                <iframe style="border:0; -webkit-filter: grayscale(100%);filter: grayscale(100%);" src="https://www.google.com/maps?q=<?php the_field('rue').' '. the_field('cp'); ?>  
                    &output=embed" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </section>

        <section class="space-reservation-section" style='height:150vh;'>
            <div style="padding-top: 20%">
                <h4 class="title-4 regular center line-height-title">
                    Submit Information to Place Order
                </h4>
                <h3 class="title-3 uppercase bold center line-height-title">
                    Reserve a table
                </h3>
                <article>
                    <div class="pos-relative">
                        <div class="img-form">
                            <img src="<?php the_field('img_submit') ?>" alt="" style='width: 100%; height: 100%; object-fit: cover;'>
                        </div>
                        <div class="form-div pos-absolute light-gray-background form-div-child">
                                <form>
                                    <div class="width-form">
                                        <div class="form-area pos-relative form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputName">Your Name</label>
                                                <input type="text" style="border:1px solid transparent; border-radius: 0px" class="form-control" id="inputName" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail">Your Email</label>
                                                <input type="email" style="border:1px solid transparent; border-radius: 0px" class="form-control" id="inputEmail"required">
                                            </div>
                                        </div>
                                        <div class="pos-relative form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputPhone">Phone Number</label>
                                                <input type="number" style="border:1px solid transparent; border-radius: 0px" class="form-control" id="inputPhone" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputTable">Table For</label>
                                                <input type="text" style="border:1px solid transparent; border-radius: 0px" class="form-control" id="inputTable" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPlace">Place</label>
                                            <input type="text" style="border:1px solid transparent; border-radius: 0px" class="form-control" id="inputPlace">
                                        </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputTime">Select Time</label>
                                                       <select style="border:1px solid transparent; border-radius: 0px" id="inputTime" class="form-control">
                                                         <option selected>12:30 AM</option>
                                                         <option>...</option>
                                                       </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputDate">Select Date</label>
                                                    <input type="date" style="border:1px solid transparent; border-radius: 0px" class="form-control" id="inputDate">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="inputMessage">Your Message</label>
                                                    <textarea id="inputMessage" style="border:1px solid transparent; border-radius: 0px" class="form-control resize" >
                                                    </textarea>
                                                </div>
                                            </div>
                                            <input class="uppercase bold reserve-btn" style="border:1px solid transparent; border-radius: 0px" type="submit" value="Reserve now">
                                    </div>
                                </form>
                        </div>
                    </div>

                </article>
            </div>
        </section>

        <?php include 'home-menu.php'; ?>

        <?php include 'home-recipes.php'; ?>

    </main>
