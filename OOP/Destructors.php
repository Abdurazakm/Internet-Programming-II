<?php
class Demo {
 public function __destruct() {
 echo "Object destroyed.";
 }
}
$demo = new Demo();