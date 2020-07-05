<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CartItems Model
 *
 * @property \App\Model\Table\SellersTable&\Cake\ORM\Association\BelongsTo $Sellers
 * @property \App\Model\Table\CartsTable&\Cake\ORM\Association\BelongsTo $Carts
 * @property \App\Model\Table\CarListsTable&\Cake\ORM\Association\BelongsTo $CarLists
 * @property \App\Model\Table\CouponsTable&\Cake\ORM\Association\BelongsTo $Coupons
 *
 * @method \App\Model\Entity\CartItem get($primaryKey, $options = [])
 * @method \App\Model\Entity\CartItem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CartItem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CartItem|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CartItem saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CartItem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CartItem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CartItem findOrCreate($search, callable $callback = null, $options = [])
 */
class CartItemsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('cart_items');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'seller_id',
        ]);
        $this->belongsTo('Carts', [
            'foreignKey' => 'cart_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('CarLists', [
            'foreignKey' => 'car_list_id',
            'joinType' => 'INNER',
        ]);
       
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        
        $rules->add($rules->existsIn(['cart_id'], 'Carts'));
        $rules->add($rules->existsIn(['car_list_id'], 'CarLists'));
       

        return $rules;
    }
}
