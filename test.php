<?php

class Foo
{
	public function bar(self $foo)
	{
		
	}
}

$refl = new ReflectionMethod('Foo', 'bar');
$p = $refl->getParameters();

var_dump($p[0]->getClass()->getName());

;
