<?php

class Pangolin
{
	private $_name;

	public function __construct($name)
	{
		$this->_name = $name;
	}

	public function correct(array $my_classes, array $namespaces)
	{
		$firstClassReflection = new ReflectionClass(array_values($my_classes)[0]);
		$firstClassProperties = $firstClassReflection->getProperties();
		$firstClassMethods = $firstClassReflection->getMethods();

		foreach ($my_classes as $class) {
			$reflection = new ReflectionClass($class);

			// Test 0: Toutes les classes font partie d'au moins un namespace fourni.
			echo "Test 0 : " . (in_array($reflection->getNamespaceName(), $namespaces) ? "Good !\n" : "KO.\n");

			// Test 1: Toutes les classes doivent être finales, non clonables, ne doivent pas hériter ni implémenter d'autres classes / interfaces.
			echo "Test 1 : " . ($reflection->isFinal() && !$reflection->isCloneable() && !$reflection->isSubclassOf('') && count($reflection->getInterfaces()) === 0 ? "Good !\n" : "KO.\n");

			// Test 2: Toutes les classes ont les mêmes attributs et méthodes, avec la même accessibilité.
			$propertiesMatch = $this->compareClassComponents($firstClassProperties, $reflection->getProperties());
			$methodsMatch = $this->compareClassComponents($firstClassMethods, $reflection->getMethods());
			echo "Test 2 : " . ($propertiesMatch && $methodsMatch ? "Good !\n" : "KO.\n");
		}
	}

	private function compareClassComponents($firstComponents, $otherComponents)
	{
		if (count($firstComponents) !== count($otherComponents)) {
			return false;
		}

		foreach ($firstComponents as $component) {
			$found = false;
			foreach ($otherComponents as $otherComponent) {
				if (
					$component->getName() === $otherComponent->getName() &&
					$component->isPublic() === $otherComponent->isPublic() &&
					$component->isProtected() === $otherComponent->isProtected() &&
					$component->isPrivate() === $otherComponent->isPrivate()
				) {
					$found = true;
					break;
				}
			}
			if (!$found) {
				return false;
			}
		}

		return true;
	}
}
