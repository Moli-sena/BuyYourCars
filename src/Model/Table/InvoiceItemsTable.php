<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InvoiceItems Model
 *
 * @property \App\Model\Table\SellersTable&\Cake\ORM\Association\BelongsTo $Sellers
 * @property \App\Model\Table\InvoicesTable&\Cake\ORM\Association\BelongsTo $Invoices
 * @property \App\Model\Table\CarListsTable&\Cake\ORM\Association\BelongsTo $CarLists
 *
 * @method \App\Model\Entity\InvoiceItem get($primaryKey, $options = [])
 * @method \App\Model\Entity\InvoiceItem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\InvoiceItem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\InvoiceItem|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InvoiceItem saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InvoiceItem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\InvoiceItem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\InvoiceItem findOrCreate($search, callable $callback = null, $options = [])
 */
class InvoiceItemsTable extends Table
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

        $this->setTable('invoice_items');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'seller_id',
        ]);
        $this->belongsTo('Invoices', [
            'foreignKey' => 'invoice_id',
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

        $validator
            ->numeric('gross_amount')
            ->requirePresence('gross_amount', 'create')
            ->notEmptyString('gross_amount');

        

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
       
        $rules->add($rules->existsIn(['invoice_id'], 'Invoices'));
        $rules->add($rules->existsIn(['car_list_id'], 'CarLists'));

        return $rules;
    }
}
