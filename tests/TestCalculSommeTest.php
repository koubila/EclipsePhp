<?php
require_once 'SommeTest.php';

/**
 * TestCalculSomme test case.
 */
class TestCalculSommeTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var TestCalculSomme
     */
    private $testCalculSomme;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();

        // TODO Auto-generated TestCalculSommeTest::setUp()

        $this->testCalculSomme = new TestCalculSomme(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated TestCalculSommeTest::tearDown()
        $this->testCalculSomme = null;

        parent::tearDown();
    }

    /**
     * Constructs the test case.
     */
    public function __construct()
    {
        // TODO Auto-generated constructor
    }

    /**
     * Tests TestCalculSomme->testCalculSomme()
     */
    public function testTestCalculSomme()
    {
        // TODO Auto-generated TestCalculSommeTest->testTestCalculSomme()
        $this->markTestIncomplete("testCalculSomme test not implemented");

        $this->testCalculSomme->testCalculSomme(/* parameters */);
    }
}

