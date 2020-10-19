<?php

    namespace FactoryPattern\Classes\NYPizzaStores;

    use FactoryPattern\Classes\Abstracts\Pizza;
    use FactoryPattern\Classes\Abstracts\PizzaStore as APizzaStore;
    use FactoryPattern\Classes\NYPizzaStores\NYStyleCheesePizza;
    use FactoryPattern\Classes\NYPizzaStores\NYStyleClamPizza;
    use FactoryPattern\Classes\NYPizzaStores\NYStylePepperoniPizza;
    use FactoryPattern\Classes\NYPizzaStores\NYStyleVeggiePizza;

    class NYPizzaStore extends APizzaStore {

        function createPizza(string $type): Pizza {
            
            switch ($type) {
                case 'cheese':
                    return new NYStyleCheesePizza();
                    break;
                
                case 'veggie':
                    return new NYStyleVeggiePizza();
                    break;
                
                case 'clam':
                    return new NYStyleClamPizza();
                    break;
                
                case 'pepperoni':
                    return new NYStylePepperoniPizza();
                    break;
                
                default:
                    return NULL;
                    break;
            }
        }
    }
