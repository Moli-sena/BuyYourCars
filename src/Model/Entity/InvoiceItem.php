<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * InvoiceItem Entity
 *
 * @property int $id
 * @property int|null $seller_id
 * @property int $invoice_id
 * @property int $car_list_id
 * @property float $gross_amount
 * @property int|null $quantity
 * @property float|null $discount_amount
 * @property float $total_amount
 * @property float|null $delivery_charge
 * @property \Cake\I18n\FrozenTime|null $created_at
 *
 * @property \App\Model\Entity\Seller $seller
 * @property \App\Model\Entity\Invoice $invoice
 * @property \App\Model\Entity\CarList $car_list
 */
class InvoiceItem extends Entity
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
        'invoice_id' => true,
        'car_list_id' => true,
        'gross_amount' => true,
        'quantity' => true,
        'discount_amount' => true,
        'total_amount' => true,
        'delivery_charge' => true,
        'created_at' => true,
        'seller' => true,
        'invoice' => true,
        'car_list' => true,
    ];
}
