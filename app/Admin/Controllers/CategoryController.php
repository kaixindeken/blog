<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Category;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class CategoryController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Category(), function (Grid $grid) {
            $grid->column('title');
            $grid->column('description');
            $grid->column('path');
            $grid->column('component');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->disableFilterButton();
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
        return Show::make($id, new Category(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->field('description');
            $show->field('path');
            $show->field('component');
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
        return Form::make(new Category(), function (Form $form) {
            $form->display('id');
            $form->text('title');
            $form->text('description');
            $form->text('path');
            $form->text('component');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
