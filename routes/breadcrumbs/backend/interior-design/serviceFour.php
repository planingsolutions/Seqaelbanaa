<?php

Breadcrumbs::for('admin.ShowServicess', function ($trail) {
    $trail->push(__('labels.backend.access.Home.servdep1'), route('admin.ShowServicess'));
});


Breadcrumbs::for('admin.ShowServicessMain', function ($trail) {
    $trail->push(__('labels.backend.access.Home.servdep2'), route('admin.ShowServicessMain'));
});

Breadcrumbs::for('admin.ShowServicessCategory', function ($trail) {
    $trail->push(__('labels.backend.access.Home.servdep2-cat'), route('admin.ShowServicessCategory'));
});

Breadcrumbs::for('admin.ShowServiceeThree', function ($trail) {
    $trail->push(__('labels.backend.access.Home.servdep3'), route('admin.ShowServiceeThree'));
});


Breadcrumbs::for('admin.ShowServiceFourMain', function ($trail) {
    $trail->push(__('labels.backend.access.Home.servdep4'), route('admin.ShowServiceFourMain'));
});

Breadcrumbs::for('admin.ShowServiceFourCategory', function ($trail) {
    $trail->push(__('labels.backend.access.Home.servdep4-cat'), route('admin.ShowServiceFourCategory'));
});
Breadcrumbs::for('admin.contactshow', function ($trail) {
    $trail->push(__('labels.backend.access.Home.Conact'), route('admin.contactshow'));
});







