<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CartItem Entity
 *
 * @property int $id
 * @property int|null $seller_id
 * @property int $cart_id
 * @property int $quantity
 * @property int $car_list_id
 * @property float|null $gross_amount
 * @property int|null $coupon_id
 * @property float|null $discount_amount
 * @property float|null $item_total_amount
 * @property float|null $delivery_charge
 *
 * @property \App\Model\Entity\Seller $seller
 * @property \App\Model\Entity\Cart $cart
 * @property \App\Model\Entity\CarList $car_list
 * @property \App\Model\Entity\Coupon $coupon
 */
class CartItem extends Entity
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
        'seller_id' => true,
        'cart_id' => true,
        'quantity' => true,
        'car_list_id' => true,
        'gross_amount' => true,
        'coupon_id' => true,
        'discount_amount' => true,
        'item_total_amount' => true,
        'delivery_charge' => true,
        'seller' => true,
        'cart' => true,
        'car_list' => true,
        'coupon' => true,
    ];
}
