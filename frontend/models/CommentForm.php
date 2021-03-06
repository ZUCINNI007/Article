<?php

namespace app\models;


use yii\base\Model;


class CommentForm extends Model
{
    public $comment;

    public function rules()
    {
        return [
            [['text'], 'required'],
            [['text'], 'string', 'length' =>[3,250]],
        ];
    }
}