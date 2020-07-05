<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CartItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CartItemsTable Test Case
 */
class CartItemsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CartItemsTable
     */
    public $CartItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CartItems',
        'app.Sellers',
        'app.Carts',
        'app.CarLists',
        'app.Coupons',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CartItems') ? [] : ['className' => CartItemsTable::class];
        $this->CartItems = TableRegistry::getTableLocator()->get('CartItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CartItems);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
