<?php

    namespace FactoryPattern\Classes\ItalyPizzaStores;

    use FactoryPattern\Classes\Abstracts\Pizza;
    use FactoryPattern\Classes\Abstracts\PizzaStore as APizzaStore;
    use FactoryPattern\Classes\ItalyPizzaStores\ItalyStyleCheesePizza;
    use FactoryPattern\Classes\ItalyPizzaStores\ItalyStyleClamPizza;
    use FactoryPattern\Classes\ItalyPizzaStores\ItalyStylePepperoniPizza;
    use FactoryPattern\Classes\ItalyPizzaStores\ItalyStyleVeggiePizza;

    class ItalyPizzaStore extends APizzaStore {

        function createPizza(string $type): Pizza {
            
            switch ($type) {
                case 'cheese':
                    return new ItalyStyleCheesePizza();
                    break;
                
                case 'veggie':
                    return new ItalyStyleVeggiePizza();
                    break;
                
                case 'clam':
                    return new ItalyStyleClamPizza();
                    break;
                
                case 'pepperoni':
                    return new ItalyStylePepperoniPizza();
                    break;
                
                default:
                    return NULL;
                    break;
            }
        }
    }
