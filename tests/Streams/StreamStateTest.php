<?php

/**
 * Copyright (c) 2015-present Ganbaro Digital Ltd
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the names of the copyright holders nor the names of his
 *     contributors may be used to endorse or promote products derived
 *     from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @category  Libraries
 * @package   TokenStreams/Streams
 * @author    Stuart Herbert <stuherbert@ganbarodigital.com>
 * @copyright 2015-present Ganbaro Digital Ltd www.ganbarodigital.com
 * @license   http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link      http://code.ganbarodigital.com/php-token-streams
 */

namespace GanbaroDigital\TokenStreams\Streams;

use PHPUnit_Framework_TestCase;

class StreamStateTest_Target1 extends StreamState
{
    public function resetState()
    {
        $this->called = true;
    }
}

/**
 * @coversDefaultClass GanbaroDigital\TokenStreams\Streams\StreamState
 */
class StreamStateTest extends PHPUnit_Framework_TestCase
{
    /**
     * @coversNothing
     */
    public function testCanInstantiate()
    {
        // ----------------------------------------------------------------
        // setup your test



        // ----------------------------------------------------------------
        // perform the change

        $obj = new StreamState;

        // ----------------------------------------------------------------
        // test the results

        $this->assertTrue($obj instanceof StreamState);
    }

    /**
     * @covers ::resetState
     */
    public function testCanResetState()
    {
        // ----------------------------------------------------------------
        // setup your test

        $obj = new StreamState;
        $obj->one = 1;
        $obj->two = 2;
        $this->assertNotEquals(new StreamState, $obj);

        // ----------------------------------------------------------------
        // perform the change

        $obj->resetState();

        // ----------------------------------------------------------------
        // test the results

        $this->assertEquals(new StreamState, $obj);
    }

    /**
     * @covers ::__construct
     * @covers ::resetState
     */
    public function testResetStateCalledOnConstruction()
    {
        // ----------------------------------------------------------------
        // setup your test



        // ----------------------------------------------------------------
        // perform the change

        $obj = new StreamStateTest_Target1;

        // ----------------------------------------------------------------
        // test the results

        $this->assertTrue(isset($obj->called));
    }

}