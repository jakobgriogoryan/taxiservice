<div id="content">
    <div class="container">
        <div class="row">
            <div class="span12">
                <h1><?= $service[0]['name_' . $lang] ?></h1>
                <div class="thumb4">
                    <div class="thumbnail clearfix">
                        <figure class="img-polaroid"><img src="/assets/images/services/<?= $service[0]['image'] ?>"
                                                          alt=""></figure>
                        <div class="caption">
                            <p>
                                <?= $service[0]['description_' . $lang] ?>
                            </p>
                        </div>
                    </div>
                </div>
                <h2><?= $this->lang->line('header_menu_cars') ?></h2>


                <div class="row thumbnails" id="isotope-items"
                ">
                <?php foreach ($cars as $car): ?>

                    <?php
                    $image = $this->images_model->getMainImage($car->id);
                    $types = $this->car_type_model->getTypesByString($car->id);
                    ?>
                    <div class="span4 isotope-element<?= $types ?>">
                        <div class="thumb5">
                            <div class="thumbnail clearfix">
                                <a href="#" class="clearfix">
                                    <figure class=""><img src="/assets/images/cars/<?= $image[0]->name ?>"
                                                          alt="">
                                    </figure>
                                    <div class="caption">
                                        <div class="txt1"><?= $car->name ?></div>
                                        <div class="txt2"><?= $car->description ?></div>
                                        <div class="txt3">more</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>

            </div>
        </div>

    </div>
</div>
</div>