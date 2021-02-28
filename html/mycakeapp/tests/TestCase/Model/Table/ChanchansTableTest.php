<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChanchansTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChanchansTable Test Case
 */
class ChanchansTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ChanchansTable
     */
    public $Chanchans;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Chanchans',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Chanchans') ? [] : ['className' => ChanchansTable::class];
        $this->Chanchans = TableRegistry::getTableLocator()->get('Chanchans', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Chanchans);

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
}
