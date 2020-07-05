<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CarList Entity
 *
 * @property int $id
 * @property string $name
 * @property int $user_id
 * @property string $car_price
 * @property bool $is_sold
 * @property bool $active
 * @property bool $deleted
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Cart[] $carts
 */
class CarList extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'user_id' => true,
        'car_price' => true,
        'price' => true,
        'is_sold' => true,
        'active' => true,
		'milage' => true,
        'image' => true,
        'model_no' => true,
        'description' => true,
        'category_id' => true,
		'engine_size' => true,
		'power' => true,
        'gearbox' => true,
        'number_of_seats' => true,
        'color' => true,
        'deleted' => true,
        'user' => true,
        'carts' => true,
    ];
}
