<?php

namespace Liuggio\Fastest\Queue;

interface QueueInterface
{
    /**
     * @return TestSuite
     */
    public function pop();

    /**
     * Push a collections of tests.
     *
     * @param TestsQueue $tests
     *
     * @return int The number of message sent with this push.
     */
    public function push(TestsQueue $tests);

    /**
     * Get the number of the message sent.
     *
     * @return int
     */
    public function getNumberOfPushedMessage();

    /**
     * @return bool
     */
    public function close();
}