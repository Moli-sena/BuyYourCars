<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CarListsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CarListsTable Test Case
 */
class CarListsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CarListsTable
     */
    public $CarLists;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CarLists',
        'app.Users',
        'app.Carts',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CarLists') ? [] : ['className' => CarListsTable::class];
        $this->CarLists = TableRegistry::getTableLocator()->get('CarLists', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CarLists);

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
