<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cart Entity
 *
 * @property int $id
 * @property int $user_id
 * @property float $gross
 * @property float|null $discount
 * @property float|null $tax
 * @property float|null $total_amount
 * @property string|null $order_id
 * @property int|null $payment_mode
 * @property \Cake\I18n\FrozenDate|null $created_at
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\CarList $car_list
 */
class Cart extends Entity
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
        'user_id' => true,
        'gross' => true,
        'discount' => true,
        'tax' => true,
        'total_amount' => true,
        'order_id' => true,
        'payment_mode' => true,
        'created_at' => true,
        'user' => true,
        'car_list' => true,
    ];
}
