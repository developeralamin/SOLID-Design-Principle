/**
Design subclasses in a manner so that it would not
be unstable in any cases. That means- If the child
classe violates any functionality of parent classes,
it will break the Liskov substitution rule.
*/
<?php
class Birds
{
    public $weight;
    public $height;
    public function fly()
    {
    }
}
class Ostrich extends Birds
{
    public function fly()
    {
    }
}
/**
 *  But this is not possible. Ostrich can not fly. It breaks the parent classes rule. So, we can not design a subclass like this. So, it breaks the Liskov Substitution rules of SOLID principle.

 *Key points about Liskov Substitution Principle - 

 *Child class should not break parent class in any situation.
 *We have to design child clases in a manner so that it can not break parent class'es rule.
 
 */
