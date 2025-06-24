<?php

class ListNode 
{
    public $val = 0;
    public $next = null;

    function __construct($val = 0, $next = null) 
    {
        $this->val = $val;
        $this->next = $next;
    }
}

/**
 * Beats 99.82% at time of writing!
 */
class Solution 
{
    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1 = null, $l2 = null, $carry = 0) 
    {
        // Calculate sum value
        $sum = $l1->val + $l2->val + $carry;

        // Reset Carry
        $carry = 0;
        if($sum > 9){
            $carry = 1;
            $sum = $sum - 10;
        }

        // Last scenario
        if(!$l1->next && !$l2->next)
            return $carry ? new ListNode($sum, new ListNode(1,null)) : new ListNode($sum);

        // Fill with 0 when necessary
        if(!$l1->next && $l2->next) $l1->next = new ListNode();
        if(!$l2->next && $l1->next) $l2->next = new ListNode();

        return new ListNode($sum, $this->addTwoNumbers($l1->next,$l2->next,$carry));
    }
}

$solution = new Solution();

// Example usage
$l1 = new ListNode(9, new ListNode(9, new ListNode(9, new ListNode(9, new ListNode(9, new ListNode(9, new ListNode(9)))))));
$l2 = new ListNode(9, new ListNode(9, new ListNode(9, new ListNode(9))));
var_dump($solution->addTwoNumbers($l1, $l2));


$l1 = new ListNode(2, new ListNode(4, new ListNode(3)));
$l2 = new ListNode(5, new ListNode(6, new ListNode(4)));
var_dump($solution->addTwoNumbers($l1, $l2));