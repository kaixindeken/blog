<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Album;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class AlbumController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Album(), function (Grid $grid) {
            $grid->column('title');
            $grid->column('description')->limit(10);
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Album(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->field('description');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Album(), function (Form $form) {
            $form->display('id');
            $form->text('title');
            $form->textarea('description');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
