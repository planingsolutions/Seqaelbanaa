<?php

Breadcrumbs::for('admin.ShowMainSlider', function ($trail) {
    $trail->push(__('labels.backend.access.Home.slider'), route('admin.ShowMainSlider'));
});

Breadcrumbs::for('admin.ShowComponents', function ($trail) {
    $trail->push(__('labels.backend.access.Home.components'), route('admin.ShowComponents'));
});

Breadcrumbs::for('admin.ShowVision', function ($trail) {
    $trail->push(__('labels.backend.access.Home.vision_2030'), route('admin.ShowVision'));
});


Breadcrumbs::for('admin.ShowAboutUsMain', function ($trail) {
    $trail->push(__('labels.backend.access.Home.aboutusM'), route('admin.ShowAboutUsMain'));
});


Breadcrumbs::for('admin.ShowAboutUsCate', function ($trail) {
    $trail->push(__('labels.backend.access.Home.AboutUsCat'), route('admin.ShowAboutUsCate'));
});

Breadcrumbs::for('admin.ShowMainProjects', function ($trail) {
    $trail->push(__('labels.backend.access.Home.Projects'), route('admin.ShowMainProjects'));
});

Breadcrumbs::for('admin.ShowWeWorkMain', function ($trail) {
    $trail->push(__('labels.backend.access.Home.WorkM'), route('admin.ShowWeWorkMain'));
});

Breadcrumbs::for('admin.ShowWorkStage', function ($trail) {
    $trail->push(__('labels.backend.access.Home.workStage'), route('admin.ShowWorkStage'));
});


Breadcrumbs::for('admin.ShowServicesMain', function ($trail) {
    $trail->push(__('labels.backend.access.Home.ServiceT'), route('admin.ShowServicesMain'));
});


Breadcrumbs::for('admin.Websitedetails', function ($trail) {
    $trail->push(__('labels.backend.access.Home.website details'), route('admin.Websitedetails'));
});

Breadcrumbs::for('admin.SocialMediaTable', function ($trail) {
    $trail->push(__('labels.backend.access.Home.Social Media'), route('admin.SocialMediaTable'));
});







