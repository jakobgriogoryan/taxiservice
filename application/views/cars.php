<div id="content">
    <div class="container">
        <div class="row">
            <div class="span12">
                <h2><?= $this->lang->line('suiteable_route_car') ?>
                    <h1><?= $this->lang->line('order_our_cars') ?></h1>
                    <div id="isotope-options">
                        <ul id="isotope-filters" class="clearfix">
                            <li><a href="#" class="selected"
                                   data-filter="*"><?= $this->lang->line('order_all_cars') ?></a></li>
                            <?php foreach ($order_types as $order_type): ?>
                                <li><a href="#"
                                       data-filter=".isotope-filter<?= $order_type['id'] ?>"><?= $order_type['name'] ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <ul class="thumbnails" id="isotope-items">
                        <?php foreach ($cars as $car): ?>

                            <?php
                            $image = $this->images_model->getMainImage($car->id);
                            $types = $this->car_type_model->getTypesByString($car->id);
                            ?>
                            <li class="span4 isotope-element <?= $types ?>">
                                <div class="thumb-isotope">
                                    <div class="thumbnail clearfix">
                                        <a href="https://demo.gridgum.com/templates/bootstrap-templates/22367/images/blank.png">
                                            <figure>
                                                <img src="/assets/images/cars/<?= $image[0]->name ?>" alt=""><em></em>
                                            </figure>
                                            <div class="caption">
                                                <?= $car->name ?>
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
