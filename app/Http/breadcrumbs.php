<?php

Breadcrumbs::register('admin', function($breadcrumbs)
{
    $breadcrumbs->push('Inicio', route('admin'));
});


Breadcrumbs::register('usuario.index', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('Usuarios', route('usuario.index'));
});

Breadcrumbs::register('secciones.index', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('Secciones', route('secciones.index'));
});

Breadcrumbs::register('secciones.create', function($breadcrumbs)
{
    $breadcrumbs->parent('secciones.index');
    $breadcrumbs->push('Crear Secciones', route('secciones.create'));
});

Breadcrumbs::register('categorias.index', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('Categorias', route('categorias.index'));
});

Breadcrumbs::register('categorias.create', function($breadcrumbs)
{
    $breadcrumbs->parent('categorias.index');
    $breadcrumbs->push('Crear Categorias', route('categorias.create'));
});

Breadcrumbs::register('articulos.index', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('Articulos', route('articulos.index'));
});

Breadcrumbs::register('articulos.create', function($breadcrumbs)
{
    $breadcrumbs->parent('articulos.index');
    $breadcrumbs->push('Crear Articulos', route('articulos.create'));
});

Breadcrumbs::register('pinturas.index', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('Pinturas', route('pinturas.index'));
});

Breadcrumbs::register('pinturas.create', function($breadcrumbs)
{
    $breadcrumbs->parent('pinturas.index');
    $breadcrumbs->push('Crear Pinturas', route('pinturas.create'));
});

Breadcrumbs::register('secciones.create', function($breadcrumbs)
{
    $breadcrumbs->parent('secciones.index');
    $breadcrumbs->push('Crear Secciones', route('secciones.create'));
});