<div id="content">
    <div class="container">
        <div class="row">
            <div class="span12">
                <h1>
                    <?php if($lang == 'ru'): ?>
                    <?= $service[0]['name'] ?>
                    <?php else: ?>
                    <?= $service[0]['name_' . $lang] ?>
                    <?php endif; ?>
                </h1>
                <div class="thumb4">
                    <div class="thumbnail clearfix">
                        <figure class="img-polaroid"><img src="/assets/images/services/<?= $service[0]['image'] ?>"
                                                          alt=""></figure>
                        <div class="caption">
                            <p>
                                <?php if($lang == 'ru'): ?>
                                    <?= $service[0]['description'] ?>
                                <?php else: ?>
                                    <?= $service[0]['description_' . $lang] ?>
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <h2><?= $this->lang->line('header_menu_cars') ?></h2>

                <ul class="thumbnails" id="isotope-items">
                    <?php foreach ($cars as $car): ?>

                        <?php
                        $image = $this->images_model->getMainImage($car->id);
                        ?>
                        <li class="span4">
                            <div class="thumb-isotope">
                                <div class="thumbnail clearfix">
                                    <a data-id="<?=$car->id ?>" data-lang="<?=$lang ?>" class="car-info" href="javascript:;">
                                        <figure>
                                            <img src="/assets/images/cars/<?= $image[0]->name ?>" alt=""><em></em>
                                        </figure>
                                        <div class="caption">
                                            <?php if($lang == 'ru'): ?>
                                            <?= $car->name ?>
                                            <?php else: ?>
                                            <?= $car->name_en ?>
                                            <?php endif; ?>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                    <?php endforeach ?>
                </ul>
        </div>

    </div>
</div>
</div>