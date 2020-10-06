<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\SiteInfo;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class SiteInfoController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new SiteInfo(), function (Grid $grid) {
            $grid->column('key');
            $grid->column('value');
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
        return Show::make($id, new SiteInfo(), function (Show $show) {
            $show->field('id');
            $show->field('key');
            $show->field('value');
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
        return Form::make(new SiteInfo(), function (Form $form) {
            $form->display('id');
            $form->text('key');
            $form->text('value');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
