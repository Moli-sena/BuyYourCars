<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Invoice Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $order_id
 * @property float $gross
 * @property float|null $discount
 * @property float $tax
 * @property float $total_amount
 * @property \Cake\I18n\FrozenDate $created_at
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Order $order
 * @property \App\Model\Entity\InvoiceItem[] $invoice_items
 */
class Invoice extends Entity
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
        'order_id' => true,
        'gross' => true,
        'discount' => true,
        'tax' => true,
        'total_amount' => true,
        'created_at' => true,
        'user' => true,
        'order' => true,
        'invoice_items' => true,
    ];
}
