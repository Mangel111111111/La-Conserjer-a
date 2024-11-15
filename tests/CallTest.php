<?php

    namespace tests;

    use PHPUnit\Framework\TestCase
    use App\Models\Call;

    class CallTest extends TestCase{

        public function testIfTestOk(){
            $this->assertEquals(1,1);
        }

        public function testIfGetRoomWorkCorrectly(){
            $newCall = new Call(null, "112", "Comment for test 1", null);

            $resultGetIssue = $newCall->getRoom;

            $this->assertEquals("112", $resultGetIssue);
        }

        public function testIfGetIssueWorkCorrectly(){
            $newCall = new Call(null, "112", "Comment for test 2", null);

            $resultGetIssue = $newCall->getIssue;

            $this->assertEquals("Comment for test 2", $resultGetIssue);
        }
    }
?>