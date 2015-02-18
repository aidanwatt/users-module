<?php namespace Anomaly\UsersModule\Role\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class RoleFormBuilder
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\UsersModule\Role\Form
 */
class RoleFormBuilder extends FormBuilder
{

    /**
     * The form model.
     *
     * @var string
     */
    protected $model = 'Anomaly\UsersModule\Role\RoleModel';

    /**
     * The form fields.
     *
     * @var array
     */
    protected $fields = ['*'];

    /**
     * The form buttons.
     *
     * @var array
     */
    protected $buttons = [
        'cancel',
        'delete',
    ];

    /**
     * The skipped fields.
     *
     * @var array
     */
    protected $skips = [
        'permissions'
    ];

}