<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * InvoiceItems Controller
 *
 * @property \App\Model\Table\InvoiceItemsTable $InvoiceItems
 *
 * @method \App\Model\Entity\InvoiceItem[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InvoiceItemsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Invoices','Invoices.Users', 'CarLists','Users'],
        ];
        $invoiceItems = $this->paginate($this->InvoiceItems->find()->where(['seller_id'=>$this->Auth->user('id')]));

        $this->set(compact('invoiceItems'));
    }

    /**
     * View method
     *
     * @param string|null $id Invoice Item id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $invoiceItem = $this->InvoiceItems->get($id, [
            'contain' => ['Users', 'Invoices', 'CarLists']
        ]);

        $this->set('invoiceItem', $invoiceItem);
    }

}
