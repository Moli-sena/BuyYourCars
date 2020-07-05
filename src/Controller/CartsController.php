<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * Carts Controller
 *
 * @property \App\Model\Table\CartsTable $Carts
 *
 * @method \App\Model\Entity\Cart[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CartsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'CartItems.CarLists'],
        ];
        $carts = $this->paginate($this->Carts->find()->where(['Carts.user_id'=>$this->Auth->user('id')]));

        $this->set(compact('carts'));
    }
	 public function selllist()
    {
        $this->paginate = [
            'contain' => ['Users', 'CarLists'],
        ];
        $carts = $this->paginate($this->Carts->find()->where(['Carts.seller_id'=>$this->Auth->user('id')]));

        $this->set(compact('carts'));
    }

    /**
     * View method
     *
     * @param string|null $id Cart id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cart = $this->Carts->get($id, [
            'contain' => ['Users', 'CarLists'],
        ]);

        $this->set('cart', $cart);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id=null)
    {
		if(!$id){
			return $this->redirect(['controller'=>'CarLists','action' => 'index']);
		}
		$cart=$this->Carts->find()->where(['user_id'=>$this->Auth->user('id')]);
		$car=$this->Carts->CartItems->CarLists->get($id);
		if($cart->count()>0){
			$cart=$cart->first();
		}else{
			 $cart = $this->Carts->newEntity();
			 $cart->user_id=$this->Auth->user('id');
			$cart->order_id="INV-".rand(1000,10000); 
			 $cart->created_at=date('Y-m-d H:i:s');
			 $this->Carts->save($cart);
		}
		
			$cart_items = $this->Carts->CartItems->newEntity();
			$cart_items->seller_id=$car->user_id; 
			$cart_items->cart_id=$cart->id; 
			$cart_items->quantity=1;
			$cart_items->car_list_id=$id;
			$cart_items->gross_amount=$car->car_price;
			$cart_items->total_amount=$car->car_price;
			$cart_items->created_at=date('Y-m-d H:i:s');
			 
            if ($this->Carts->CartItems->save($cart_items)) {
				$cart=$this->Carts->get($cart->id);
				$cart->gross=$cart->gross+$cart_items->gross_amount;
				$cart->total_amount=$cart->total_amount+$cart_items->total_amount;
				
				
				$this->Carts->save($cart);
                $this->Flash->success(__('The cart has been saved.'));

                return $this->redirect(['action' => 'index']);
            }else{
				
            $this->Flash->error(__('The cart could not be saved. Please, try again.'));
			return $this->redirect(['controller'=>'CarLists','action' => 'index']);
			}
     
       // $this->set(compact('cart', 'users', 'carLists'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cart id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cart = $this->Carts->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cart = $this->Carts->patchEntity($cart, $this->request->getData());
            if ($this->Carts->save($cart)) {
                $this->Flash->success(__('The cart has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cart could not be saved. Please, try again.'));
        }
        $users = $this->Carts->Users->find('list', ['limit' => 200]);
        $carLists = $this->Carts->CarLists->find('list', ['limit' => 200]);
        $this->set(compact('cart', 'users', 'carLists'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cart id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
	 /**
	 * checkout method
	 * 
	 *
	 *
	 **/
	 public function checkout()
    {
		
		if ($this->Auth->user('id')) {
                                    $Carts = TableRegistry::getTableLocator()->get('Carts');
                                    $cart = $Carts->find('all')->where(['Carts.user_id' => $this->Auth->user('id')])->contain(['CartItems'])->first();
									$invoiceTableCls=TableRegistry::getTableLocator()->get('Invoices');
									$invoice=$invoiceTableCls->newEntity();
									
									$invoice->user_id=$cart->user_id;
									$invoice->gross=$cart->gross;
									$invoice->discount=$cart->discount;
									$invoice->tax=$cart->tax;
									$invoice->total_amount=$cart->total_amount;
									$invoice->order_id=$cart->order_id;
									$invoice->payment_mode=$cart->payment_mode;
									$invoice->created_at=date('Y-m-d H:i:s');
									
									$invoiceTableCls->save($invoice);
									
									foreach($cart->cart_items as $c){
										$invoice_items=$invoiceTableCls->InvoiceItems->newEntity();
											$invoice_items->seller_id	= $c->seller_id;
											$invoice_items->invoice_id	= $invoice->id;
											$invoice_items->car_list_id	= $c->car_list_id;
											$invoice_items->gross_amount= $c->gross_amount;	
											$invoice_items->quantity	= $c->quantity;
											$invoice_items->discount_amount	= $c->discount_amount;
											$invoice_items->total_amount= $c->total_amount;	
											$invoice_items->delivery_charge	= $c->delivery_charge;
											$invoice_items->created_at	= date('Y-m-d H:i:s');
											
										$invoiceTableCls->InvoiceItems->save($invoice_items);
										$Carts->CartItems->delete($c);
										
									}
									$Carts->delete($cart);
									$this->Flash->success(__('Congratulation: We are accept your order.'));
									return $this->redirect(['controller'=>'Invoices','action' => 'index']);
                                }else{
									$this->Flash->error(__('The cart could not be saved. Please, try again.'));
									return $this->redirect(['controller'=>'CarLists','action' => 'index']);
									
								}
		
    }	
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cart = $this->Carts->get($id);
        if ($this->Carts->delete($cart)) {
            $this->Flash->success(__('The cart has been deleted.'));
        } else {
            $this->Flash->error(__('The cart could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
