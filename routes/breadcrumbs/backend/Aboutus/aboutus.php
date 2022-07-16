<?php
Breadcrumbs::for('admin.ShowAboutUss', function ($trail) {
    $trail->push(__('labels.backend.access.Home.AboutusSecOne'), route('admin.ShowAboutUss'));
});

Breadcrumbs::for('admin.ShowAboutUssTwo', function ($trail) {
    $trail->push(__('labels.backend.access.Home.AboutusSecTwo'), route('admin.ShowAboutUssTwo'));
});


Breadcrumbs::for('admin.ShowTeamWork', function ($trail) {
    $trail->push(__('labels.backend.access.Home.AboutusTeamwork'), route('admin.ShowTeamWork'));
});
