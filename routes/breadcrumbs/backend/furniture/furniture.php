<?php

Breadcrumbs::for('admin.furnitureTable', function ($trail) {
    $trail->push(__('labels.backend.access.Home.furniture'), route('admin.furnitureTable'));
});


