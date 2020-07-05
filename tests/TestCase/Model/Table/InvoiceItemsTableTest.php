<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InvoiceItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InvoiceItemsTable Test Case
 */
class InvoiceItemsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InvoiceItemsTable
     */
    public $InvoiceItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.InvoiceItems',
        'app.Sellers',
        'app.Invoices',
        'app.CarLists',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('InvoiceItems') ? [] : ['className' => InvoiceItemsTable::class];
        $this->InvoiceItems = TableRegistry::getTableLocator()->get('InvoiceItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->InvoiceItems);

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
