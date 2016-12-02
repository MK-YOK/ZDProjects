<?php
class Member
{
	public $name;
	public $age;
	public $address;

	public function __construct($name) {
		$this->name = $name;
		echo "<p>" . $this->name . "が生成されました</p>";
	}

	public function __destruct(){
		echo "<p>" . $this->name . "が破棄されます</p>";
	}

	public function showInfo(){
		echo "<ul";
		echo "<li>名前：" . $this->name . "</li>";
		echo "<li>年齢：" . $this->age . "</li>";
		echo "<li>住所：" . $this->address . "</li>";
	}
}
