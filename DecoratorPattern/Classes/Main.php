<?php 

    namespace DecoratorPattern\Classes;

    use DecoratorPattern\Classes\Order;
    use DecoratorPattern\Classes\Beverages\{Espresso,HotChocolate,IcedCoffee,LatteCoffee,Milkshake};
    use DecoratorPattern\Classes\Beverages\AddOns\{CrumbledCookies,IceCream,WhippedCream};

    class Main {

        public static function init() {

            print("----------------------------------------------".PHP_EOL);
            print("DECORATOR PATTERN SAMPLE".PHP_EOL);
            print("----------------------------------------------".PHP_EOL);

            $order = new Order("Mr. WAWA");

            //Let's order Espresso with some ice crem
            $beverage_1 = new Espresso();
            $beverage_1 = new IceCream($beverage_1);
            $order->add($beverage_1);

            //and then...
            $beverage_2 = new Milkshake();
            $beverage_2 = new CrumbledCookies($beverage_2);
            $order->add($beverage_2);

            $beverage_3 = new IcedCoffee();
            $beverage_3 = new WhippedCream($beverage_3);
            $beverage_3 = new CrumbledCookies($beverage_3);
            $order->add($beverage_3);
            
            //another approach
            $beverage_4 = new CrumbledCookies(new IceCream( new LatteCoffee() ));
            $order->add($beverage_4);

            $beverage_5 = new HotChocolate();
            $order->add($beverage_5);

            //Oops! Too much coffee. Canceling some order...
            $order->remove($beverage_1);
            $order->remove($beverage_4);

            //Yeah, done.
            $order->checkout();
        }
    }