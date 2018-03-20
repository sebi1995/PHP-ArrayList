<?php

	class ArrayList {
		
		private $ArrayList;
		private $position;
		private $size;
		
		function __construct($size){
			$this->ArrayList = [$size];
			$this->position = 0;
			$this->size = $size;
		}
		
		function add($number){
			if($this->position == $this->size){
				$temp = $this->ArrayList;
				$this->ArrayList = [$this->size * 2];
				$this->ArrayList = $temp;
			}
			$this->ArrayList[$this->position++] = $number;
		}
		
		function remove($position){
			if($position >= 0 && $position < $this->position){
				$from = $position;
				$to = $this->position - 1;
				while($from != $to){
					$this->ArrayList[$from] = 4;
					--$to;
				}
				--$this->position;

			}
		}
		
		function removeLast(){
			if($this->position != 0){
				$this->ArrayList[$this->position-1] = $this->ArrayList[$this->position];
				--$this->position;
			}
		}
		
		function show(){
			$temp = 0;
			while($temp != $this->position){
				print $this->ArrayList[$temp]." ";
				++$temp;
			}
		}
		
		function find($number){
			$temp = 0;
			while($temp != $this->position){
				if($this->ArrayList[$temp] == $number){
					return true;
				}
				++$temp;
			}
			return false;
		}
		
	}
?>