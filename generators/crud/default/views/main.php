<?php
/**
 * This is the template for generating a CRUD controller class file.
 */

use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator dee\angular\generators\crud\Generator */

$restName = StringHelper::basename($generator->modelClass);

echo "<?php\n";
?>
use yii\helpers\Url;
use dee\angular\Angular;

/* @var $this yii\web\View */
?>
<?php echo "<?=\n" ?>
Angular::widget([
    'requires' => ['ngResource','ui.bootstrap',],
    'routes' => [
        '/' => [
            'view' => 'index',
            'di' => ['<?= $restName;?>',],
        ],
        '/view/:id' => [
            'view' => 'view',
            'di' => ['<?= $restName;?>',],
        ],
        '/update/:id' => [
            'view' => 'update',
            'di' => ['<?= $restName;?>',],
        ],
        '/create' => [
            'view' => 'create',
            'di' => ['<?= $restName;?>',],
        ],
    ],
    'resources' => [
        '<?= $restName;?>' => [
            'url' => Url::to('resource'),
            'actions' =>[
                'update' => [
                    'method' => 'PUT',
                ],
            ]
        ]
    ]
]);?>
